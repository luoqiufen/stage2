<?php
/*
 * @Author: your name
 * @Date: 2020-06-29 18:56:26
 * @LastEditTime: 2020-06-30 19:41:54
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_02\11_test\02_login.php
 */ 
header("content-type:text/html;charset=utf-8");

//isset($变量) 判断是否存在

// 处理请求1: 用户名 Ajax验证
if(isset($_GET['uname'])){
    // echo $_GET['uname'];

    // 开始验证
    $vip = array('虹猫','蓝兔','大奔','逗逗','莎莉','跳跳','达达','黑小虎');//数据库的用户
    if(in_array($_GET['uname'],$vip)){//ture
        echo 0;
    }else{
        echo 1;
    }
}

if(isset($_GET['act'])){
    if($_GET['act'] == 'form'){
        // 存入数据库(忽略)
        echo '用户注册成功';
        echo '<a href ="./03_登录.html">点击登录</a>';
        echo '<script>setTimeout(function(){window.location = "./03_登录.html";},2000)</script>';
    }else if($_GET['act'] == 'login'){
        // 处理login表单信息
        echo '登录成功';
    }else if($_GET['act'] == 'formAjax'){
        echo 'ok';
    } 
}



?>