<?php

/*
$array = array(1, 2, 3, 4);
array_walk($array, create_function('$value', 'echo $value;'));
 */

$func = create_function('', 'echo "Function created dynamic";');
// echo $func.PHP_EOL; // lambda_1
// $func();    // Function created dynamic
 
// $my_func = 'lambda_1';
// $my_func(); // 不存在这个函数
// lambda_1(); // 不存在这个函数

function lambda_1(){
    echo 'my function lambda_1'.PHP_EOL;
}
$myFunction = 'lambda_1';
// $myFunction();
// $func();
// debug_zval_dump($myFunction);
// debug_zval_dump($func);
// echo gettype($myFunction);
// echo get_class($myFunction);
 
$my_func = chr(0) . "lambda_1";
// $my_func(); 

$closure = function(){
    echo 'closure';
};
// debug_zval_dump($closure);
// echo $closure;


// vim600:ts=4 st=4 foldmethod=marker foldmarker=<<<,>>>
// vim600:syn=php commentstring=//%s
