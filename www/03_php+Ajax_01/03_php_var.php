<?php
/*
 * @Author: your name
 * @Date: 2020-06-28 14:07:47
 * @LastEditTime: 2020-07-13 20:16:01
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \2-coded:\web2004\www\03_php+Ajax_01\03_php_var.php
 */ 
header("content-type:text/html;charset=utf-8");
// 声明变量
$name1 = 'aa';
$age = 15;
$province = '江苏省';

// 打印数据
echo $name1.'<br>';
print $age.'<br>';
print_r($province.'<br>');

var_dump($name1,$age,2.36,$province);

echo '<hr>';

// 常量: 固定不变的数据
// 不可修改
// 1)定义常量
define('uname','虹猫',true);
// 2)引用常量
echo uname;
echo UNAME;

echo '<hr>';

// 变量
$_city = '南京市';
$num = 10;
echo $_city,'--',$num;

// 修改变量
$_city = '武汉市';
echo $_city;

// 修改常量(常量不可用赋值操作)
// uname = '蓝兔';
// echo uname;

// 常量不允许重新定义
// define('uname','蓝兔');
// echo uname;


?>