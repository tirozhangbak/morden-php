<?php

$a = 123;
$b = 456;

$a = $a^$b;
$b = $a^$b;
$a = $b^$a;

echo $a.PHP_EOL;
echo $b.PHP_EOL;


// vim600:ts=4 st=4 foldmethod=marker foldmarker=<<<,>>>
// vim600:syn=php commentstring=//%s
