<?php
/**
 * Key Generator - footer.ctp
 * Copyright (c) 2021 Sarpex IT Services
 *
 * For used third-party software see THIRD-PARTY
 * file at '_misc/THIRD-PARTY'
 *
 * @file footer.ctp
 * @date 11.09.2021 10:23
 *
 * @copyright (c) the author(s)
 * @author Kleine-Vorholt.NET <florian@kleine-vorholt.net> (2021–)
 * @author Sarpex IT Services <info@sarpex.eu> (2021–)
 * @license CC 4.0 http://creativecommons.org/licenses/by-nc-nd/4.0/
 *
 * @var $config array App configuration array loaded in '_init/init.php'
 */
?>

        <!-- // FOOTER // -->
        <footer id="footer">
            <div class="row">
                <div class="col-md">
                    <ul class="list-unstyled">
                        <li class="float-end" style="margin-right: 0"><a href="#topPage" id="top">Back to top</a></li>
                        <li><a href="<?= $config['host']['url'] . 'changelog' ?>">Changelog</a></li>
                        <!--
                        <li><a href="<?= $config['host']['url'] . 'api' ?>">API</a></li>
                        -->
                        <li><a href="https://github.com/KleineVorholtNET/KeyGenerator">GitHub</a></li>
                        <li><a href="https://paypal.me/kleinevorholtnet" target="_blank">Donate</a></li>
                    </ul>
                    <p><i class="fas fa-cog fa-spin"></i> Version: 1.0.0 (September 11, 2021)</p>
                    <p>Key Generator made by <a href="https://kleine-vorholt.net">Kleine-Vorholt.NET</a>.</p>
                    <p>Design by  <a href="https://bootswatch.com" target="_blank">Bootswatch</a> & released under the <a href="https://github.com/thomaspark/bootswatch/blob/master/LICENSE">MIT License</a>.</p>
                </div>
            </div>
        </footer>
