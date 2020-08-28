<?php
/*
 * @Author: your name
 * @Date: 2020-06-29 16:13:49
 * @LastEditTime: 2020-06-29 16:39:03
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_02\08_Ajax_get.php
 */ 
header("content-type:text/html;charset=utf-8");

// 处理07页面发送的请求
// 接收数据->做出处理->回传数据

// var_dump($_GET);

/* 
array(
    'title'=>'aaa'
) 
*/

// 做出处理,显示回复前端数据
echo 'QQ空间: 发布了一个说说
    底下: 评论留言
    - 有新的留言,只更新当前这一块数据
    - 当前空间是不会重新加载的(局部刷新)';





?>