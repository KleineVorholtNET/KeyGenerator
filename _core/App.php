<?php
/**
 * SarpexConsole - App.php
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file App.php
 * @date 29.07.2021 23:03
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 */

namespace SarpexConsole;


use NASSPlash\Router\Router;
use NASSplash\Storage\SQL;
use NASSPlash\Tools\Utils;


class App
{
    /**
     * @var string $version Current Core edition
     */
    private string $version = '0.0.1';

    /**
     * @var string $appIdentifier Identifier which identifies the core object
     */
    private string $appIdentifier;

    /**
     * @var Router $router Router which is routing the request paths to the resources
     */
    private Router $router;

    /**
     * @var SQL $sql SQL-Connection object
     */
    private SQL $sql;

    /**
     * @var Utils $utils Object of Utils class including several useful functions
     */
    private Utils $utils;

    /**
     * App constructor.
     * @param string $appIdentifier Identifier which identifies the core object
     */
    public function __construct(string $appIdentifier)
    {
        $this->sql              = new SQL();
        $this->utils            = new Utils();

        // Start new PHP-Session
        session_start();

        // Assign App-Identifier
        try {
            $this->appIdentifier = is_null($appIdentifier) ? md5(random_bytes(5)) : $appIdentifier; } catch (\Exception $e) {
        }
    }

    /**
     * @return Router Returns the current router object
     */
    public function getRouter(): Router
    {
        return $this->router;
    }

    /**
     * @param Router $router Sets the router object
     */
    public function setRouter(Router $router)
    {
        $this->router = $router;
    }


    /**
     * @return SQL Returns the SQL-Object which includes the current database connection
     */
    public function getSQL(): SQL
    {
        return $this->sql;
    }
}