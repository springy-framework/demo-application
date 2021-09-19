#!/usr/bin/env php
<?php

$startTime = microtime(true);

// Loads the Composer autoload
require __DIR__ . '/vendor/autoload.php';

$kernel = Springy\Core\Kernel::getInstance(__DIR__ . '/conf/main.php');
$app = Springy\Console\System::getInstance();
$kernel->run($app, $startTime);

exit($app->getExitStatus());
