<?php
/**
 * Key Generator - head.ctp
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file head.ctp
 * @date 10.09.2021 23:38
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 *
 * @var $config array App configuration array loaded in '_init/init.php'
 */
?>

        <!-- // META // -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="robots" content="index, follow" />
        <meta http-equiv="content-language" content="en" />

        <meta name="keywords" content="<?= $config['general']['application_keywords'] ?>">
        <meta name="description" content="<?= $config['general']['application_description'] ?>">

        <meta property="og:locale" content="<?= $config['general']['application_locale'] ?>">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?= 'License Key, Password & Hash Generator - ' . $config['general']['application_name'] ?>">
        <meta property="og:description" content="<?= $config['general']['application_description'] ?>">
        <meta property="og:url" content="<?= $config['host']['protocol'] . $_SERVER['HTTP_HOST'] ?>">
        <meta property="og:site_name" content="<?= $config['general']['application_name'] ?>">
        <meta property="og:image" content="<?= $config['host']['url'] . $config['general']['application_image'] ?>">

        <meta name="twitter:card" content="summary">
        <meta name="twitter:description" content="<?= $config['general']['application_description'] ?>">
        <meta name="twitter:title" content="<?= 'License Key, Password & Hash Generator - ' . $config['general']['application_name'] ?>">
        <meta name="twitter:image" content="<?= $config['host']['url'] . $config['general']['application_image'] ?>">

        <meta name="theme-color" content="<?= $config['general']['application_color'] ?>">

        <!-- // FAVICON // -->
        <link href="<?= $config['host']['url'] . $config['general']['application_image'] ?>" rel="icon" type="image/png">

        <!-- // STYLESHEETS // -->
        <link rel="stylesheet" href="<?= $config['host']['url'] . '_assets/themes/' .  ($_COOKIE['KEYGEN_theme'] ?? $config['theme']['default_theme']) .'/bootstrap.min.css' ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- // NOJS // -->
