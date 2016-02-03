<?php

//强制复制
$a = 1;
$b = $a;
$c = &$a;

$a = 2;

var_dump($a);
var_dump($b);
var_dump($c);



// vim600:ts=4 st=4 foldmethod=marker foldmarker=<<<,>>>
// vim600:syn=php commentstring=//%s
