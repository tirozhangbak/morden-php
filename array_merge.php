<?php
$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$result = $array1 + $array2;
$result2 = array_merge($array1, $array2);
print_r($result);
print_r($result2);


// vim600:ts=4 st=4 foldmethod=marker foldmarker=<<<,>>>
// vim600:syn=php commentstring=//%s
