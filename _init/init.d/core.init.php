<?php
/**
 * Kleine-Vorholt.NET NAS - Splash Site - core.init.php
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file core.init.php
 * @date 27.08.2021 22:31
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 */

// Load all core classes
require_once __DIR__ . '/../../_core/App.php';
require_once __DIR__ . '/../../_core/Configuration/Config.php';
require_once __DIR__ . '/../../_core/Router/Router.php';
require_once __DIR__ . '/../../_core/Router/RouterConfig.php';
require_once __DIR__ . '/../../_core/Storage/SQL.php';
require_once __DIR__ . '/../../_core/Tools/Utils.php';