<?php
/**
 * SarpexConsole - RouterConfig.php
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file RouterConfig.php
 * @date 30.07.2021 11:46
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 */

namespace NASSplash\Router;


class RouterConfig
{
    /**
     * @var array $routes Router routes
     */
    private array $routes = [];

    /**
     * @return array Gets the current saved routes
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param array $routes Overwrites the existing routes
     */
    public function setRoutes(array $routes): void
    {
        $this->routes = $routes;
    }

    /**
     * Adds a route to the Router configuration
     * @param string $route Route to set
     * @param string $resourcePath Path to resource
     * @return bool Returns true if successfully set
     */
    public function addRoute(string $route, string $resourcePath): bool
    {
        if (array_key_exists($route, $this->routes)) {
            return false;
        }
        $this->routes[$route] = $resourcePath;
        return true;
    }

    /**
     * Deletes an existing route from Router configuration
     * @param string $route Route to delete
     * @return bool Returns true if successfully deleted
     */
    public function deleteRoute(string $route): bool
    {
        if (array_key_exists($route, $this->routes)) {
            unset($this->routes[$route]);
            return true;
        }
        return false;
    }
}