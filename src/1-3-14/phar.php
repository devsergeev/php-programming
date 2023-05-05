<?php

// ВАЖНО: установите phar.readonly = 0 в php.ini

if (!Phar::canWrite()) {
    echo "Phar it is disabled" . PHP_EOL;
}

$phar = new Phar(__DIR__ . '/test.phar');
$phar['test.txt'] = 'Hello Habr!';
