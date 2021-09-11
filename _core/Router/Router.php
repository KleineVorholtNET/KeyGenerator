<?php
/**
 * SarpexConsole - Router.php
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file Router.php
 * @date 29.07.2021 23:06
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 */

namespace NASSplash\Router;


class Router
{
    /**
     * @var array Array of all routes and their resources
     */
    private array $routeDB;

    /**
     * @var array Array of all existing requestPaths
     */
    private array $requests;

    /**
     * @var array Array of all error codes and their siteFiles
     */
    private array $errorFiles;

    /**
     * @var string Saved RequestPath resolved by $this->setFinalRequest()
     */
    private string $request;

    /**
     * Router constructor.
     * @param RouterConfig $config Param to set router configuration
     */
    public function __construct(RouterConfig $config)
    {
        if (!is_null($config)) {
            $this->addRoutes($config->getRoutes());
        }
        $this->request = $this->setFinalRequest();
    }


    /**
     * Checks if any Sites are managed by SiteManager
     * @return bool Returns true if siteDB is empty
     */
    public function routeDBisEmpty(): bool
    {
        return empty($this->routeDB);
    }

    /**
     * Converts requestPath depths into array if possible
     * @param $request string RequestPath
     * @return false|array Array of sliced requestPath
     */
    private function getSlicedRequest(string $request)
    {
        return explode('/', $request);
    }

    /**
     * Gets requestPath from $_GET Var
     * @return string Returns with requestPath
     */
    public function setFinalRequest(): string
    {
        $plainRequest = $_GET['requestPath'];
        $slicedRequest = explode("/", $plainRequest);
        $finalRequest = '';
        for ($i=0; isset($slicedRequest[$i]); $i++) {
            $finalRequest .= '/'.$slicedRequest[$i];
        }
        return (empty($slicedRequest[0])) ? '/': $finalRequest;
    }

    /**
     * Gets all temporary requests
     * @return array Array of temporary requests
     */
    public function getRequests(): array
    {
        return $this->requests;
    }

    /**
     * Gets the saved request
     * @return string Request saved in $this->request
     */
    public function getRequest(): string
    {
        return $this->request;
    }

    /**
     * Sets error files
     * @param $errorID int ErrorCode (404 => notFound, etc.)
     * @param $file string SiteFile
     */
    public function addErrorFile(int $errorID, string $file)
    {
        $this->errorFiles[$errorID] = $file;
    }

    /**
     * Gets all requestPaths and siteFiles stored in siteDB
     * @return array SiteDB
     */
    public function getRouteDB(): array
    {
        return $this->routeDB;
    }

    /**
     * Checks if string is Variable in Syntax of SiteManager
     * @param $string string String to check
     * @return bool Returns true if $string is variable
     */
    private function checkVar(string $string): bool
    {
        return preg_match("/\{[^)]+\}/", $string);
    }

    /**
     * Sort array keys by their length
     * @param $array array Array to sort
     * @return array Returns sorted array
     */
    private function sortArray(array $array): array
    {
        usort($array,function ($a,$b){
            return strlen($a)-strlen($b);
        });
        return $array;
    }

    /**
     * Adds new Site to SiteManager
     * @param $request string Request path
     * @param $resource string Storage path of site file
     * @return bool Returns true if request is not already set
     */
    public function addRoute(string $request, string $resource): bool
    {
        if (!is_array($request) && !is_array($resource)) {
            $this->routeDB[$request] = $resource;
            $this->requests[] = $request;
            return true;
        }
        return false;
    }

    /**
     * Adds multiple new Sites to SiteManager using array
     * @param $array array Array of requestPaths & sitefiles ('requestPath' => 'siteFile')
     * @return bool Returns true if operation was successful
     */
    public function addRoutes(array $array): bool
    {
        if (!is_array($array)) {
            return false;
        }
        foreach ($array as $rq=>$file) {
            $this->addRoute($rq, $file);
        }
        return true;
    }

    /**
     * Resolves dynamic key in requestPaths
     * @param $key string Dynamic key to resolve ('key' or '{key}')
     * @param string|null $request Request from which the key should be get
     * @return string|null Returns with key value if found or null if key could not be found
     */
    public function getKey(string $key, ?string $request = null): ?string
    {
        $key = $this->checkVar($key) ? $key : '{'.$key.'}';
        if (!is_array($request)) {
            $request = (is_null($request)) ? $this->request : $request;
            $slices = $this->getSlicedRequest($request);
            $requestSlices = $this->getSlicedRequest($this->analyzeRequest($request)[0]);
            $i = 0;
            if ($requestSlices) {
                if (in_array($key, $requestSlices)) {
                    foreach ($requestSlices as $requestSlice) {
                        if ($requestSlice !== $key) {
                            $i++;
                        } else {
                            break;
                        }
                    }
                    return $slices[$i];
                }
            }
        }
        return null;
    }

    /**
     * Returns with all possible SiteFiles or error page siteFile
     * @param $request string Request path to analyze
     * @return array|bool Returns with array of possible SiteFiles, Error page or false of request could not be processed
     */
    public function analyzeRequest(string $request)
    {
        $propablyRequests = $this->requests;
        for($i=0; isset($this->getSlicedRequest($request)[$i]); $i++) {
            $propablyRequests = $this->requestKeyResolver($i, $request, $propablyRequests);
        }
        $sortedArray = $this->sortArray($propablyRequests);
        if (empty($propablyRequests) || !isset($propablyRequests)) {
            return false;
        }
        if (in_array($request, $propablyRequests)) {
            return [$request];
        }
        if (count(explode('/', $request)) < count(explode('/', $propablyRequests[0]))) {
            return false;
        }
        return $sortedArray;
    }

    /**
     * Get's all possible requests based on RQ-Depth
     * @param $depth int Depth of request to check
     * @param $request string RequestPath
     * @param $propablyRequests array Array of all requests that are still possible
     * @return array Array of possible requests or error id
     */
    private function requestKeyResolver(int $depth, string $request, array $propablyRequests): array
    {
        $analyzedRequests = [];
        if (is_array($propablyRequests)) {
            foreach ($propablyRequests as $propablyRequest) {
                if (array_key_exists($depth, $this->getSlicedRequest($request))) {
                    if ($this->getSlicedRequest($request)[$depth] == $this->getSlicedRequest($propablyRequest)[$depth] || $this->checkVar($this->getSlicedRequest($propablyRequest)[$depth])) {
                        $analyzedRequests[] = $propablyRequest;
                    }
                }
            }
            return $analyzedRequests;
        }
        return ['404'];
    }

    /**
     * Gets siteFile / Redirects based on requestPath
     * @param string|null $request RequestPath - null => $this->request
     * @return string Returns with sitefile or 404 file if requestPath was not found
     */
    public function load(?string $request = null): string
    {
        if (!is_array($request) || is_null($request)) {
            $request = (is_null($request)) ? $this->request : $request;
            if (!empty($this->routeDB[$this->analyzeRequest($request)[0]])) {
                if (substr($this->routeDB[$this->analyzeRequest($request)[0]], 0, 5) == "[URL]") {
                    $red = str_replace("[LOC]", $_SESSION['panelURL'], substr($this->routeDB[$this->analyzeRequest($request)[0]], 5));
                    header('Location: ' . $red);
                }
                return $this->routeDB[$this->analyzeRequest($request)[0]];
            }
        }
        return $this->errorFiles[404];
    }
}