<?php
/*
 * @Author: your name
 * @Date: 2020-06-28 15:42:52
 * @LastEditTime: 2020-06-28 16:07:01
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_01\05_array.php
 */ 
header("content-type:text/html;charset=utf-8");

// 1)声明数组,存储5个颜色
$color = array(
    1=>'red',
    2=>'blue',
    3=>'green',
    4=>'yellow',
    5=>'skyblue',
);
var_dump($color);

// 2)声明数组,存储1个学生的信息
// 学号 姓名 性别 年龄 班级
$stu1 = array(
    'ucode'=>'12345',
    'uname'=>'虹猫',
    'usex'=>'男',
    'uage'=>'15',
    'class'=>'3班',
);
var_dump($stu1);

$stu2 = array(
    'ucode'=>'12345',
    'uname'=>'虹猫',
    'usex'=>'男',
    'uage'=>'15',
    'class'=>'3班',
);

// 3)声明数组,存储班级5名学生信息
$stus = array(
    array(
        'ucode'=>'12345',
        'uname'=>'虹猫',
        'usex'=>'男',
        'uage'=>'15',
        'class'=>'3班',
    ),
    array(
        'ucode'=>'12345',
        'uname'=>'虹猫',
        'usex'=>'男',
        'uage'=>'15',
        'class'=>'3班',
    ),
    array(
        'ucode'=>'12345',
        'uname'=>'虹猫',
        'usex'=>'男',
        'uage'=>'15',
        'class'=>'3班',
    ),
    array(
        'ucode'=>'12345',
        'uname'=>'虹猫',
        'usex'=>'男',
        'uage'=>'15',
        'class'=>'3班',
    ),
    array(
        'ucode'=>'12345',
        'uname'=>'虹猫',
        'usex'=>'男',
        'uage'=>'15',
        'class'=>'3班',
    ),
);
var_dump($stus);

// 二维数组嵌套:关联下标
$arr1 = array(
    'uname'=>'李白',
    'uage'=>'25',
    'like'=>array('篮球','羽毛球','乒乓球'),
    '课程'=>array('语文','数学','物理','英语','化学')
);
var_dump($arr1);
echo ($arr1['like'][1]);//羽毛球

// 获取数组长度
// count($arr)
echo ('<br>');
echo count($arr1);//4 


?>