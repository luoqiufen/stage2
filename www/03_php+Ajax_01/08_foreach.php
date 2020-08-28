<?php
/*
 * @Author: your name
 * @Date: 2020-06-28 17:20:42
 * @LastEditTime: 2020-06-30 20:18:53
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_01\08_for-each.php
 */ 
header("content-type:text/html;charset=utf-8");

// foreach循环遍历数组
$province = array('江苏省','湖北省','湖南省','四川省');
$stus = array(
    'ucode'=>'1001',
    'uanme'=>'白居易', 
    'uage'=>'25',
    'province'=>'江苏省',
    'city'=>'南京市',
);

// 数组1:
// $province: 数组名
// $key: 变量名 存储下标
// $value: 变量名 存储值
foreach($province as $key=>$value){
    echo $key.'----'.$value.'<br>';
}

echo '<hr color = red>';

// 数组2
foreach($stus as $k=>$v){
    echo $k.': '.$v.'<br>';
}

echo '<hr color = red>';

// foreach用法2: $key 可以省略
foreach($province as $value){
    echo $value.'<br>';
}  

echo '<hr color = red>';

// 二维数组循环遍历
$poems = array(
    array(
        'title'=>'将进酒',
        'content'=>'君不见,黄河之水天上来',
        'author'=>'李白',
        'time'=>'唐'
    ),
    array(
        'title'=>'水调歌头',
        'content'=>'明月几时有,把酒问青天',
        'author'=>'苏轼',
        'time'=>'宋'
    ),
    array(
        'title'=>'如梦令',
        'content'=>'知否知否,应是绿肥红瘦',
        'author'=>'李清照',
        'time'=>'宋'
    )
    );

// 把数组打印输出到页面里
// 一条新闻显示一行
// title:标题内容 content:内容
foreach($poems as $key => $value){
    foreach($value as $k => $v){
        echo $k.': '.$v.' ';
    }
    echo $value.'<br>'; 
}

echo '<hr color = red>';

// 案例练习
$category = array(
    '图书'=>array('科幻','童话','励志','文学','插画'),
    '电器'=>array('电视','冰箱','洗衣机','空调','扫地机器人'),
    '服装'=>array('裙子','外套','毛衣','裤子','帽子'),
);

// 显示到页面上
foreach($category as $key => $value){
    echo $key;
    echo '<select>';
    foreach($value as $k => $v){
        echo '<option value='.$k.'>'.$v.'</option>';
    }
    echo '</select><br><br>';
}


?>