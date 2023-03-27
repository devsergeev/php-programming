<?php

$a = 1;

$foo = function () use (&$a) {
    $a = 3;
    return $a;
};

$a = 2;

echo $foo() . PHP_EOL;
