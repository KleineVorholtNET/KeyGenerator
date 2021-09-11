<?php
/**
 * Key Generator - update-theme.php
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file update-theme.php
 * @date 11.09.2021 00:11
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 *
 * @var $config array App configuration array loaded in '_init/init.php'
 * @var $app App App configuration array loaded in '_init/init.php'
 */

use SarpexConsole\App;

if (!array_key_exists($app->getRouter()->getKey('THEMEID'), $config['theme']['available_themes'])) {
    die("Theme not found!");
}

setcookie('KEYGEN_theme', $app->getRouter()->getKey('THEMEID'), time()+3600*24*30, '/', $config['host']['fqdn']);

sleep(1);

isset($_SERVER['HTTP_REFERER']) ? header('LOCATION: ' . $_SERVER['HTTP_REFERER']) : header('LOCATION: ' . $config['host']['url']);
