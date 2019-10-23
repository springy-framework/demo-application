<?php
/**
 * Springy - A micro framework for smart PHP developers.
 *
 * @copyright 2007 Fernando Val
 * @author    Fernando Val <fernando@fval.com.br>
 * @license   https://github.com/fernandoval/Springy/blob/master/LICENSE MIT
 */
$startTime = microtime(true);

// Loads the Composer autoload
require __DIR__.'/../vendor/autoload.php';

Springy\HTTP\Kernel::getInstance(__DIR__.'/../conf/main.php')
    ->run($startTime)->send();
