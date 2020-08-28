<?php
/*
 * @Author: your name
 * @Date: 2020-07-06 14:47:30
 * @LastEditTime: 2020-07-06 15:24:16
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_07\02_cookie\02_car.php
 */ 
header("content-type:text/html;charset=utf-8");

// 登录操作
if($_GET['act']=='login'){
    $uname=$_POST['uname'];
    $upass=$_POST['upass'];
    echo '登录成功';
    setcookie('uname',$uname);
    setcookie('upass',$upass);
    // 下一步跳转到详情页
    echo '<script>setTimeout(function(){
        window.location="./03_arcticle.html"},500)</script>';
}




?>