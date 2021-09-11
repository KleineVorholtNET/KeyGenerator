<?php
/**
 * Key Generator - general.php
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file general.php
 * @date 10.09.2021 23:12
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 */

/**
 * Declaration section
 */
$config = [];

/**
 * Modify section
 */
$config['general']['application_name'] = 'Kleine-Vorholt.NET Key Generator';
$config['general']['application_description'] = 'Kleine-Vorholt.NET Key Generator is a fast & user friendly tool which offers different randomly generated keys, password and hashes for use in your products.';
$config['general']['application_keywords'] = 'Password generator, KeyGen, Hash, License Key, Generator';
$config['general']['application_color'] = '#2780e3';
$config['general']['application_locale'] = 'en_US';
$config['general']['application_image'] = '_assets/images/logo.png';

$config['host']['fqdn'] = 'key-generator.kleine-vorholt.eu';
$config['host']['protocol'] = 'https://';
$config['host']['path'] = '/';

$config['theme']['default_theme'] = 'cosmo';
$config['theme']['available_themes'] = [
    // 'cerulean'  => 'Cerulean',
    'darkly'    => 'Darkly',
    // 'litera'    => 'Litera',
    // 'materia'   => 'Materia',
    'pulse'     => 'Pulse',
    'simplex'   => 'Simplex',
    'solar'     => 'Solar',
    'united'    => 'United',
    'zephyr'    => 'Zephyr',
    'cosmo'     => 'Cosmo',
    'flatly'    => 'Flatly',
    'lumen'     => 'Lumen',
    'minty'     => 'Minty',
    // 'quartz'    => 'Quartz',
    // 'sketchy'   => 'Sketchy',
    // 'spacelab'  => 'Spacelab',
    // 'vapor'     => 'Vapor',
    'cyborg'    => 'Cyborg',
    // 'journal'   => 'Journal',
    'lux'       => 'Lux',
    'morph'     => 'Morph',
    'sandstone' => 'Sandstone',
    // 'slate'     => 'Slate',
    'superhero' => 'Superhero',
    'yeti'      => 'Yeti'
];

/**
 * Fixed section
 */
$config['host']['url'] = $config['host']['protocol'] . $config['host']['fqdn'] . $config['host']['path'];