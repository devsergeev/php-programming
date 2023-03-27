<?php

// closures

class A
{
    public function getClosure(int $c): Closure
    {
        $a = 1;
        $b = 2;
        return static function() use ($a, $b, $c) {
            // var_dump($this); // error
            return $a + $b + $c;
        };
    }
}

$a = new A();
$closure = $a->getClosure(3);

var_dump($closure). PHP_EOL;

$result = $closure();
var_dump($result). PHP_EOL;

