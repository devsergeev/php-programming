<?php

class A implements BarC
{
    use C;

    public function fooA(): string
    {
        return __FUNCTION__;
    }
}

class B implements BarD
{
    use D;

    public function fooB(): string
    {
        return __FUNCTION__;
    }
}

trait C
{
    public function barC(): string
    {
        return __FUNCTION__;
    }
}

trait D
{
    public function barD(): string
    {
        return __FUNCTION__;
    }
}

interface BarC
{
    public function barC();
}

interface BarD
{
    public function barD();
}
