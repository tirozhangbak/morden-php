<?php

class Article{
    private $title = "This is an article";
}

class Post{
    private $title = "This is a post";
}

class Test{
    public $title = "This is a test";
}

class Template{

    function render($context, $tpl){

        $closure = function($tpl){
            ob_start();
            include $tpl;
            return ob_end_flush();
        };

        $closure = $closure->bindTo($context, $context); // $arg_1 绑定的类 $arg_2 作用范围及类型
        // $closure = $closure->bindTo($context);
        $closure($tpl);

    }

}

$art = new Article();
$post = new Post();
$test = new Test();
$template = new Template();

$template->render($art, 'tpl.php');
$template->render($post, 'tpl.php');
$template->render($test, 'tpl.php');


// vim600:ts=4 st=4 foldmethod=marker foldmarker=<<<,>>>
// vim600:syn=php commentstring=//%s
