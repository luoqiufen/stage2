<?php
/*
 * @Author: your name
 * @Date: 2020-07-02 16:02:48
 * @LastEditTime: 2020-07-02 16:17:20
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_05\03_index.php
 */ 
header("content-type:text/html;charset=utf-8");

// 允许其他源来跨域请求信息
header("Access-Control-Allow-Origin:*");

$data = file_get_contents('./01_Ajax/data.json');
echo $data;





?>