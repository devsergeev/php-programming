<?php

// closures

function getClosure(int $c): Closure
{
    $a = 1;
    $b = 2;
    return function() use ($a, $b, $c) {
        var_dump($this);
        return $a + $b + $c;
    };
}

$closure = getClosure(3);

var_dump($closure). PHP_EOL;

$result = $closure();
var_dump($result). PHP_EOL;

