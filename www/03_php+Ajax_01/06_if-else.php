<?php
/*
 * @Author: your name
 * @Date: 2020-06-28 16:24:20
 * @LastEditTime: 2020-06-28 17:01:33
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_01\06_if-else.php
 */ 
header("content-type:text/html;charset=utf-8");

// if条件语句
$age = 15;
if($age>=18){
    echo "<h3>已成年</h3>";
}else{
    echo "<h3>未成年</h3>"; 
}

// 多条件
// 指定颜色,显示内容
$color = '红色';
if($color =='红色'){
    echo "<div style='border: 1px solid red;width:200px;height:200px'></div>";
}else if($color =='绿色'){
    echo "<div style='border: 1px solid green;width:200px;height:200px'></div>";
}else{
    echo "<div style='border: 1px solid blue;width:200px;
    height:200px'></div>";
}

// 三目运算符描述
// 如果是个位数,补全成2位数
$num = 3;
$num < 10 ? $num = '0'.$num : $num;
echo $num;


// switch分支
// 列表类型
// 无序/有序
$type = '无序';

switch($type){
    case '无序': echo "<ul><li>第一行</li><li>第二行</li></ul>";break;
    case '有序': echo "<ol><li>第一行</li><li>第二行</li></ol>";break;
    default: echo '列表无法显示';
}
 

?>