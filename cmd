#!/usr/bin/env php
<?php

$startTime = microtime(true);

// Loads the Composer autoload
require __DIR__.'/vendor/autoload.php';

$status = Springy\Console\Kernel::getInstance(__DIR__.'/conf/main.php')
    ->run($startTime)->getExitStatus();

exit($status);
