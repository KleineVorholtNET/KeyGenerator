<?php
/**
 * Kleine-Vorholt.NET NAS - Splash Site - init.php
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file init.php
 * @date 27.08.2021 22:22
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 */

// Define initialization order
$components = $order = [
    'core',
    'config',
    'app',
    'router'
];

// Load initialization components
foreach ($components as $component) {
    $file = __DIR__ . '/init.d/' . $component . '.init.php';
    if (file_exists($file)) {
        require_once $file;
    }
    else {
        exit('FATAL ERROR: One or more components could not be initialized!');
    }
}