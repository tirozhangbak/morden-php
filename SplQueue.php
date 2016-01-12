<?php
$q = new SplQueue();
$q->push(1);
$q->push(2);
$q->push(3);
echo $q->pop().PHP_EOL;
print_r($q);



// vim600:ts=4 st=4 foldmethod=marker foldmarker=<<<,>>>
// vim600:syn=php commentstring=//%s
