<?php

if (PHP_SAPI != 'cli') {
    exit('Please run it in terminal!');
}
if ($argc < 3) {
    exit('At least 2 arguments needed!');
}

$controller = ucfirst($argv[1]) . 'Controller';
$action = 'action' . ucfirst($argv[2]);

// 检查类是否存在
if (!class_exists($controller)) {
    exit("Class $controller does not existed!");
}

// 获取类的反射
$reflector = new ReflectionClass($controller);
// 检查方法是否存在
if (!$reflector->hasMethod($action)) {
    exit("Method $action does not existed!");
}

// 取类的构造函数
$constructor = $reflector->getConstructor();
// 取构造函数的参数
$parameters = $constructor->getParameters();
// 遍历参数
foreach ($parameters as $key => $parameter) {
    // 获取参数声明的类
    $injector = new ReflectionClass($parameter->getClass()->name);
    // 实例化参数声明类并填入参数列表
    $parameters[$key] = $injector->newInstance();
}

// 使用参数列表实例 controller 类
$instance = $reflector->newInstanceArgs($parameters);
// 执行
$instance->$action();

class HelloController
{
    private $model;

    public function __construct(TestModel $model)
    {
        $this->model = $model;
    }

    public function actionWorld()
    {
        echo $this->model->property, PHP_EOL;
    }
}

class TestModel
{
    public $property = 'property';
}

// vim600:ts=4 st=4 foldmethod=marker foldmarker=<<<,>>>
// vim600:syn=php commentstring=//%s
