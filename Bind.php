<?php
class A {
    public $base = 100;
}

class B {

    private $base = 1000;
}

class C {

    private static $base = 10000;
}

$f = function () {
    return $this->base + 3;
};

$sf = static function() {
    return self::$base + 3;
};


$a = Closure::bind($f, new A);
print_r($a());

echo PHP_EOL;

$b = Closure::bind($f, new B , 'B');
print_r($b());

echo PHP_EOL;

$c = $sf->bindTo(null, 'C');
print_r($c());

echo PHP_EOL;

$c = $f->bindTo(new A, 'C');
print_r($c());

echo PHP_EOL;


// vim600:ts=4 st=4 foldmethod=marker foldmarker=<<<,>>>
// vim600:syn=php commentstring=//%s
