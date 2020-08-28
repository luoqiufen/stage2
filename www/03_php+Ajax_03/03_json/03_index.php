<?php
/*
 * @Author: your name
 * @Date: 2020-06-30 17:28:21
 * @LastEditTime: 2020-06-30 17:48:26
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_03\03_json\03_index.php
 */ 
header("content-type:text/html;charset=utf-8");

// 读取json文件
echo file_get_contents('./01_json.json');


?>