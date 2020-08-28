<?php
/*
 * @Author: your name
 * @Date: 2020-07-07 11:19:12
 * @LastEditTime: 2020-07-07 19:16:29
 * @LastEditors: your name
 * @Description: In User Settings Edit
 * @FilePath: \2-coded:\web2004\www\03_php+Ajax_07\04_test_finish\02_login.php
 */ 
header('content-type:text/html;charset=utf-8');
//处理登录请求
if($_GET['act'] == 'login'){
  if($_POST['uname'] && $_POST['upass']){
    echo 'ok';
  }else{
    echo 'no';
  }
}


?>