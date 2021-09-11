<?php
/**
 * Key Generator - navbar.ctp
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file navbar.ctp
 * @date 10.09.2021 23:24
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 *
 * @var $config array App configuration array loaded in '_init/init.php'
 */
?>

        <!-- // NAVBAR // -->
        <div class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
            <div class="container">
                <a href="../" class="navbar-brand"><?= $config['general']['application_name'] ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $config['host']['url'] ?>">Home</a>
                        </li>
                        <!--
                        <li class="nav-item">
                            <a class="nav-link" href="#!">Hash-Generator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#!">API</a>
                        </li>
                        -->
                    </ul>
                    <ul class="navbar-nav ms-md-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $config['host']['url'] . 'changelog' ?>">Changelog</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="themes">Theme <span class="caret"></span></a>
                            <div class="dropdown-menu" aria-labelledby="themes">
                                <?php
                                foreach ($config['theme']['available_themes'] as $themeID=>$themeName) {
                                    echo "<a class='dropdown-item' href='" . $config['host']['url'] . "update-theme/" . $themeID . "'>" . $themeName . "</a>";
                                }
                                ?>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
