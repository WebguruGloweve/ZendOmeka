<?php

require dirname(__DIR__) . '/vendor/autoload.php';

use OmekaTestHelper\Bootstrap;

Bootstrap::bootstrap(__DIR__);
Bootstrap::loginAsAdmin();
Bootstrap::enableModule('GuestUser');
Bootstrap::enableModule('MediaQuality');
Bootstrap::enableModule('DownloadManager');
