<?php

$path = '/../bin/jasperstarter';
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    $path .= '.exe';
}
define('JASPERSTARTER_BIN', realpath(__DIR__ . $path));
