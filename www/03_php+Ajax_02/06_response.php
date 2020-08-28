<?php
/*
 * @Author: your name
 * @Date: 2020-06-29 14:22:00
 * @LastEditTime: 2020-06-29 15:32:08
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_02\06_response.php
 */ 
header("content-type:text/html;charset=utf-8");

// 后端页面: 处理
var_dump($_GET);
var_dump($_POST);


if($_GET['act']=='addArt'){
    echo '保存文章信息-入库成功';
    // 显示出来
    echo '<h3>'.$_POST['title'].'</h3>';
    echo '<h4>'.$_POST['author'].'</h4>';
    echo '<p>'.$_POST['con'].'</p>';
}else if($_GET['act']=='register'){
    echo '保存用户信息-入库成功';
    // 可以登录
    echo '<a href="./03_reqPost.html">登录</a>';
}






?>