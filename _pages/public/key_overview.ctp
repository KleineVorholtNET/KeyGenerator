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

    <body id="topPage">

        <?php require_once __DIR__ . '/template/navbar.ctp' ?>


        <!-- // CONTAINER // -->
        <div class="container">

            <!-- // HEADER // -->
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <h1><?= $config['general']['application_name'] ?></h1>
                        <p class="lead">Generate random License Keys, Passwords, Hashes & other strings!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <p>With this tool you can either generate memorable or strong passwords and also license keys & random hashes.<br />All strings get generated and transported over a secure connection to you.<br /><span class="fw-bold">We do not save any key on our systems.</span></p>
                    </div>
                </div>
            </div>

            <!-- // REMEMBERABLE PASSWORDS // -->
            <div class="bs-content-section clearfix">
                <div class="row">
                    <div class="col col-md col-sm">
                        <div class="card bg-light">
                            <div class="card-header">
                                <span class="fw-bold">Rememberable Passwords</span><span class="text-muted"> | <span class="key-section-header-alt">Perfectly for securing your computer account or mobile phone</span></span>
                                <span class="float-end"><a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Generate new keys" onclick="generateRememberablePasswords()"><i class="fas fa-redo"></i></a></span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="rememberable_password_0">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="rememberable_password_1">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="rememberable_password_2">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="rememberable_password_3">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="rememberable_password_4">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="rememberable_password_5">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- // STRONG PASSWORDS // -->
            <div class="bs-content-section clearfix">
                <div class="row">
                    <div class="col col-md col-sm">
                        <div class="card bg-light">
                            <div class="card-header">
                                <span class="fw-bold">Strong Passwords</span><span class="text-muted"> | <span class="key-section-header-alt">Perfectly for securing database & hosting accounts </span></span>
                                <span class="float-end"><a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Generate new keys" onclick="generateStrongPasswords()"><i class="fas fa-redo"></i></a></span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="strong_password_0">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="strong_password_1">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="strong_password_2">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="strong_password_3">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="strong_password_4">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="strong_password_5">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- // ULTRA STRONG PASSWORDS // -->
            <div class="bs-content-section clearfix">
                <div class="row">
                    <div class="col col-md col-sm">
                        <div class="card bg-light">
                            <div class="card-header">
                                <span class="fw-bold">Ultra Strong Passwords</span><span class="text-muted"> | <span class="key-section-header-alt">Every root user account will be safe with this password </span></span>
                                <span class="float-end"><a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Generate new keys" onclick="generateUltraStrongPasswords()"><i class="fas fa-redo"></i></a></span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="ultrastrong_password_0">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="ultrastrong_password_1">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="ultrastrong_password_2">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="ultrastrong_password_3">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- // DEFAULT LICENSE KEYS // -->
            <div class="bs-content-section clearfix">
                <div class="row">
                    <div class="col col-md col-sm">
                        <div class="card bg-light">
                            <div class="card-header">
                                <span class="fw-bold">License Keys</span><span class="text-muted"> | <span class="key-section-header-alt">Best way for managing registered software products </span></span>
                                <span class="float-end"><a href="#!" data-bs-toggle="tooltip" data-bs-placement="top" title="Generate new keys" onclick="generateLicenseKeys()"><i class="fas fa-redo"></i></a></span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="license_key_0">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="license_key_1">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="license_key_2">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card border-secondary key-card">
                                            <div class="card-body">
                                                <span class="key-span" id="license_key_3">n/A</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bs-content-section">
                <div class="justify-content-center text-center">
                    <button type="button" class="btn btn-primary" onclick="generateKeys()"><i class="fas fa-redo"></i> Get a fresh new set of keys</button>
                    <button type="button" class="btn btn-secondary" onclick="downloadKeys()"><i class="fas fa-file-download"></i> Download keys as .txt file</button>
                </div>
            </div>

            <?php require_once __DIR__ . '/template/footer.ctp' ?>

        </div>


        <?php require_once __DIR__ . '/template/scripts.ctp' ?>
        <script src="<?= $config['host']['url'] . '_assets/js/overviewjs.min.js' ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                generateKeys();
            });
        </script>

    </body>
</html>
