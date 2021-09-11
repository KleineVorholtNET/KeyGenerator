<?php
/**
 * Kleine-Vorholt.NET NAS - Splash Site - router.php
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file router.php
 * @date 27.08.2021 22:24
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 *
 * @var App $app Core App object
 */

/*
|--------------------------------------------------------------------------
| Constructing Apps' Site Database
|--------------------------------------------------------------------------
|
| Class 'SarpexManagementCenter\SiteManager' is used to
| add pages to our app.
| To implement dynamic requests '{VAR}' is used. Variables can be read by
| using getKey(string $key) : string function from the same class.
|
| [URL] prefix is uses to declare an redirect.
| If [URL] is used together with [LOC] it'll be replaced with the panels location.
|
| EXAMPLES:
| '[URL]https://example.com' -> will redirect to https://example.com
| '[URL][LOC]auth/session/login' -> will redirect to https://panel.example.com/panel_path/auth/session/login
|
| WARNING:
| - [LOC] can be only used if App is initialized before! (new App())
|
*/


use NASSplash\Router\Router;
use NASSplash\Router\RouterConfig;
use SarpexConsole\App;

// Create new Router configuration Object
$routerConfiguration = new RouterConfig();

// Add routes
$routerConfiguration->addRoute('/', '_pages/public/key_overview.ctp');
$routerConfiguration->addRoute('/changelog', '_pages/public/changelog.ctp');
$routerConfiguration->addRoute('/update-theme/{THEMEID}', '_scripts/update-theme.php');

// Create router
$router = new Router($routerConfiguration);

// Add error pages
$router->addErrorFile(404, '_pages/error/404.ctp');

// Import Router
$app->setRouter($router);