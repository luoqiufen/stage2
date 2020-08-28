<?php
/*
 * @Author: your name
 * @Date: 2020-06-28 14:40:59
 * @LastEditTime: 2020-06-28 16:24:46
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_01\04_dataType.php
 */ 
header("content-type:text/html;charset=utf-8");

// 数据类型
// 1)string
$str1 = "<div style='border: 1px solid red;'>盒子1</div>";

$str2 = '<p style="border: 1px solid blue;">段落1</p>';

echo $str1,$str2;

$uname = '虹猫';
$uage = 15;

echo '姓名:',$uname.'年龄:'.$uage.'<br>';
echo '姓名:',$uname,'年龄:',$uage,'<br>';

// 2)int
// 3float
$num1 = 20;
$num2 = 12.3;

echo $num1,$num2;
var_dump($num1,$num2);//int 20  float 12.3

// 算数运算
echo '<h3>算数运算</h3>';
echo 25+5.5,'<br>';
$num3 = 36;
$num3++;
echo $num3.'<br>';//37
++$num3;
echo $num3.'<br>';//38

$num3-=8;
echo $num3.'<br>';//30

$num3*=3;
echo $num3.'<br>';//90

$num3/=2;
echo $num3.'<br>';//45

$num3%=6;
echo $num3.'<br>';//3

$num4 = 15;
$num4.=6;//.连接符,连成字符串
var_dump($num4);//string '156'(length=3)

// 4)boolean
var_dump(true);//boolean true
var_dump(false);//boolean false

// 5)null
var_dump(null);//null
var_dump(NULL);//null
echo('<br>');

// 6)array
// 索引数组:数字下标
$arr1 = array();
$arr2 = array('虹猫',15,true);

echo $arr1;//array
print $arr2;//array

var_dump($arr1,$arr2);

// 指定索引下标
$arr3 = array(
    0=>'aa',
    2=>'bb',
    5=>'cc',
    8=>'dd',
);
var_dump($arr3);
/* array
  0 => string 'aa' (length=2)
  2 => string 'bb' (length=2)
  5 => string 'cc' (length=2)
  8 => string 'dd' (length=2) */

// 指定关联下标
$arr5 = array(
    'uname'=>'蓝兔',
    'uage'=>14,
    'province'=>'四川省',
    'city'=>'成都市',
);
var_dump($arr5);
/* array
  'uname' => string '蓝兔' (length=6)
  'uage' => int 14
  'province' => string '四川省' (length=9)
  'city' => string '成都市' (length=9) */

// 取值
var_dump($arr3[2]);//string 'bb' (length=2)
// var_dump($arr3[1]);//报错 不能取未指定的下标

var_dump($arr5['uname']);//string '蓝兔' (length=6)
echo $arr5['uage'];//14

$arr5['uage']+=5;
echo $arr5['uage'];//19

?>