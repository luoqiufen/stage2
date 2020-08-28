<?php
/*
 * @Author: your name
 * @Date: 2020-07-06 18:34:21
 * @LastEditTime: 2020-07-07 19:50:57
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_07\04_test\02_login.php
 */ 

header("content-type:text/html;charset=utf-8");

// 处理登录请求
if($_GET['act']=='getName'){
    if($_POST['uname'] && $_POST['upass']){
        echo 'ok';
    }else{
        echo 'no';
    }
    
    // setcookie('uname',$uname);
}


?>