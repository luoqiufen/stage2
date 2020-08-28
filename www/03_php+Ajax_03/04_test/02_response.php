<?php
/*
 * @Author: your name
 * @Date: 2020-06-30 19:04:06
 * @LastEditTime: 2020-07-01 18:58:08
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_03\04_test\02_response.php
 */ 
header("content-type:text/html;charset=utf-8");

// $_GET 存储: 前端发过来的数据
// var_dump($_GET['keyword']);//类型名

// 数据库: 00_data.json
$data = file_get_contents('./00_data.json');//数据库里获取数据
// var_dump($data);//json字符串

// 把 json字符串 转换成 php数组
$dataArr = json_decode($data,true);
// var_dump($dataArr);

// 取类型对应的信息 $dataArr[类型名]

if(isset($dataArr[$_GET['keyword']])){//true 有该类型
    // var_dump($data[$_GET['keyword']]);
    // php数组 转换成 json字符串 给前端 识别
    echo json_encode($dataArr[$_GET['keyword']]);
}else{
    echo 'no';
}



?>