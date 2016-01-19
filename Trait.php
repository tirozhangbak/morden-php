<?php

class Base
{
    public function sayHello()
    {
        echo 'Hello ';
    }
}

trait SayWorld
{
    public function sayHello()
    {
        // parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base
{
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

// vim600:ts=4 st=4 foldmethod=marker foldmarker=<<<,>>>
// vim600:syn=php commentstring=//%s

