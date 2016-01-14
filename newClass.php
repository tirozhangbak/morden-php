<?php
class Test
{
    public function __construct($echo)
    {
        echo 'init';
        echo $echo;
    }
}

$std = new Test('test');


// vim600:ts=4 st=4 foldmethod=marker foldmarker=<<<,>>>
// vim600:syn=php commentstring=//%s
