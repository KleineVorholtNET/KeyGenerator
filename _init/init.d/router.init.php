<?php
/**
 * Kleine-Vorholt.NET NAS - Splash Site - router.init.php
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file router.init.php
 * @date 27.08.2021 22:32
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 */

// Check if App is initialized
!isset($app) ? exit("FATAL ERROR: Initialization component 'router.init.php' needs to be loaded as part from 'init.php'") : null;

// Import router config
require_once __DIR__ . '/../../_config/router.php';

// Check if router database is empty or router is disabled
if (!$app->getRouter()->routeDBisEmpty() && !isset($_GET['disableRouter'])) {
    require_once __DIR__ . '/../../' . $app->getRouter()->load();
}