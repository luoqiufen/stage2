<?php
/*
 * @Author: your name
 * @Date: 2020-06-29 11:47:51
 * @LastEditTime: 2020-06-29 19:29:20
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_02\04_resPost.php
 */ 
header("content-type:text/html;charset=utf-8");

// 响应页面 处理 post请求
// $_POST: 接收发送的数据

// var_dump($_POST);
/* array
  'uname' => string 'lancy' (length=5)
  'upass' => string '123' (length=3)
*/
// 譬如用户名 lancy 密码123
if($_POST['uname']=='lancy' && $_POST['upass']=='123'){
    echo '登录成功';
}else{
    echo '用户名/密码有误';
}




?>