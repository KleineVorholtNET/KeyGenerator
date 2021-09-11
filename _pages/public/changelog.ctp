<?php
/**
 * Key Generator - changelog.ctp
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file changelog.ctp
 * @date 11.09.2021 13:29
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
        <title><?= 'Changelog - ' . $config['general']['application_name'] ?></title>

        <?php require_once __DIR__ . '/template/head.ctp' ?>
    </head>

    <body id="topPage">

        <?php require_once __DIR__ . '/template/navbar.ctp' ?>


        <!-- // CONTAINER // -->
        <div class="container">

            <!-- // HEADER // -->
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <h1>Changelog</h1>
                        <p class="lead">Releases & Updates</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <p>We're continuously improving this software to guarantee the best user experience & highest security.<br />So if you found a bug or something similar, please feel free to open an issue on <a href="https://github.com/KleineVorholtNET/KeyGenerator/issues" target="_blank">GitHub</a>.</p>
                    </div>
                </div>
            </div>

            <!-- // VERSIONS // -->
            <div class="bs-content-section">
                <div class="row">
                    <div class="col-md">
                        <div class="accordion" id="changelogAccordion">

                            <!-- // Version: 1.0.0 // -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading_version_1_0_0">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_version_1_0_0" aria-expanded="true" aria-controls="collapse_version_1_0_0">
                                       <span class="fw-bold">1.0.0</span>&nbsp;- September 11, 2021&nbsp;<span class="badge rounded-pill bg-success">Latest</span>
                                    </button>
                                </h2>
                                <div id="collapse_version_1_0_0" class="accordion-collapse collapse show" aria-labelledby="heading_version_1_0_0" data-bs-parent="#changelogAccordion" style="">
                                    <div class="accordion-body">
                                        <div class="changelog-version-header">
                                            <h4>1.0.0 <span class="text-muted fs-6">Release - September 11, 2021</span></h4>
                                        </div>
                                        <div class="changelog-version-body">
                                            <span class="fw-bold">New Features / Added Content</span>
                                            <ul>
                                                <li>Added web environment to generate keys online</li>
                                                <ul>
                                                    <li>Remeberable Passwords</li>
                                                    <li>Strong Passwords</li>
                                                    <li>Ultra Strong Passwords</li>
                                                    <li>License Keys (5-Block)</li>
                                                </ul>
                                                <li>Added 15 different themes</li>
                                                <li>Added possibility to download online generated keys as .txt file</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <?php require_once __DIR__ . '/template/footer.ctp' ?>

        </div>


        <?php require_once __DIR__ . '/template/scripts.ctp' ?>

    </body>
</html>