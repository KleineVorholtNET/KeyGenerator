<?php
/**
 * Key Generator - scripts.ctp
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file scripts.ctp
 * @date 10.09.2021 23:29
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 *
 * @var $config array App configuration array loaded in '_init/init.php'
 */
?>
<!-- // SCRIPTS // -->
        <script src="<?= $config['host']['url'] . '_vendor/jquery/jquery.min.js' ?>"></script>
        <script src="<?= $config['host']['url'] . '_vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js" integrity="sha512-Qlv6VSKh1gDKGoJbnyA5RMXYcvnpIqhO++MhIM2fStMcGT9i2T//tSwYFlcyoRRDcDZ+TYHpH8azBBCyhpSeqw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="<?= $config['host']['url'] . '_vendor/prismjs/prism.js' ?>" data-manual></script>
        <script src="<?= $config['host']['url'] . '_assets/js/main.min.js' ?>"></script>
        <script src="<?= $config['host']['url'] . '_assets/js/crypto.min.js' ?>"></script>
        <script src="<?= $config['host']['url'] . '_assets/js/key-download.min.js' ?>"></script>
