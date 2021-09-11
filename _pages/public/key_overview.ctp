<?php
/**
 * Key Generator - key_overview.ctp
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file key_overview.ctp
 * @date 10.09.2021 23:10
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 *
 * @var $config array App configuration array loaded in '_init/init.php'
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- // TITLE // -->
        <title><?= 'License Key, Password & Hash Generator - ' . $config['general']['application_name'] ?></title>

        <?php require_once __DIR__ . '/template/head.ctp' ?>
    </head>

    <body>

        <?php require_once __DIR__ . '/template/navbar.ctp' ?>


        <?php require_once __DIR__ . '/template/scripts.ctp' ?>

    </body>
</html>
