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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="<?= $config['host']['url'] . '_assets/css/main.css' ?>">
        <link rel="stylesheet" href="<?= $config['host']['url'] . '_vendor/prismjs/prism-okaidia.css' ?>">
        <link rel="stylesheet" href="<?= $config['host']['url'] . '_assets/css/key-style.css' ?>">
        <style>
            #loader {
                transition: all .3s ease-in-out;
                opacity: 1;
                visibility: visible;
                position: fixed;
                height: 100vh;
                width: 100%;
                background: #fff;
                z-index: 70000;
            }

            #loader.fadeOut {
                opacity: 0;
                visibility: hidden
            }

            .layer-center {
                position: absolute;
                top: calc(50% - 12px);
                left: calc(50% - 94px);
            }
        </style>

        <!-- // ANALYTICS // -->
        <script type="text/javascript">
            var _paq = window._paq = window._paq || [];
            /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
            _paq.push(["setCookieDomain", "*.key-generator.kleine-vorholt.eu"]);
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);
            (function() {
                var u="//analytics.kleine-vorholt.eu/";
                _paq.push(['setTrackerUrl', u+'matomo.php']);
                _paq.push(['setSiteId', '4']);
                var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
            })();
        </script>

        <!-- // NOJS // -->
        <noscript>
            <style>
                body {
                    padding-top: 0;
                }
            </style>
            <div id="loader">
                <span class="layer-center" style="font-weight: bold">Please enable JavaScript!</span>
            </div>
            <p><img src="//analytics.kleine-vorholt.eu/matomo.php?idsite=4&amp;rec=1" style="border:0;" alt="" /></p>
        </noscript>
