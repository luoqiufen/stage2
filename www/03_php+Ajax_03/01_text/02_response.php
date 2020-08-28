<?php
header("content-type:text/html;charset=utf-8");

// var_dump($_GET['ucode']);//'1001'学号下表
// 根据学号 获取姓名,回传给前端
$arr = array(
    '1001'=>'虹猫',
    '1002'=>'蓝兔',
    '1003'=>'逗逗',
    '1004'=>'莎莉',
    '1005'=>'大奔'
);

// 姓名: $arr[]
echo $arr[$_GET['ucode']];


?>