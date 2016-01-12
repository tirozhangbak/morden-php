<?php

class Callme {
    public function __invoke($phone_num) {
        echo "Hello: $phone_num";
    }
}
 
$call = new Callme();
// $call(13810688888); // "Hello: 13810688888

$func = function() {
    echo "Hello, anonymous function";
};
 
// echo gettype($func).PHP_EOL;    // object
// echo get_class($func).PHP_EOL;  // Closure

$name = 'TIPI Team';
$func = function($arg) use($name) {
    echo "Hello, $name".PHP_EOL;
    echo $arg.PHP_EOL;
};
 
// $func('test'); 

function getCounter() {
    $i = 0;
    return function() use($i) { // 这里如果使用引用传入变量: use(&$i)
        echo ++$i;
    };
}
 
$counter = getCounter();
// $counter(); // 1
// $counter(); // 1

$i2=100;
$counter = function() use($i2) {
    debug_zval_dump($i2);
};  
// $counter();

$a = 1; 
$b = &$a;
// debug_zval_dump($a); // refcount(1) a new copy

//php-5.3.0
$class = new ReflectionClass("Closure");
var_dump($class->isInternal());
var_dump($class->isAbstract() );
var_dump($class->isFinal());
var_dump($class->isInterface());

// vim600:ts=4 st=4 foldmethod=marker foldmarker=<<<,>>>
// vim600:syn=php commentstring=//%s
