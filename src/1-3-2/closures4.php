<?php

$a = 1;

$foo = function () use ($a) {
    return $a;
};

$a = 2;

echo $foo() . PHP_EOL;
