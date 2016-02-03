<?php
//按值排序
function sortArray($objects, $sorts)
{
    $avgs = array();
    foreach ($sorts as $key => $type){
        $sortKey = array();
        foreach ($objects as $k => $object){
            $sortKey[$k] = $object[$key];
        }
        $avgs[] = $sortKey;
        $avgs[] = $type;
    }
    $avgs[] = &$objects;
    print_r($avgs);
    call_user_func_array('array_multisort', $avgs);
    return $objects;
}

$demo = array(
    array('id'=>1, 'score'=>100, 'type'=>3),
    array('id'=>2, 'score'=>200, 'type'=>3),
    array('id'=>3, 'score'=>10, 'type'=>1),
);
print_r(sortArray($demo, array('score'=>SORT_DESC, 'type'=>SORT_ASC, 'id'=>SORT_DESC)));


// vim600:ts=4 st=4 foldmethod=marker foldmarker=<<<,>>>
// vim600:syn=php commentstring=//%s
