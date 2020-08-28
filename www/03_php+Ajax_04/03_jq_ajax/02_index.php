<?php
header("content-type:text/html;charset=utf-8");

// get请求
/* if($_GET['act'] == 'btn1'){
    echo '{"data":"这是按钮1"}';
} */

// post请求
/* if($_POST['act'] == 'btn2'){
    // echo '{"data":"这是按钮1"}';
    echo '<p>这是按钮1</p>';
} */

// ajax请求
if($_REQUEST['act'] == 'btn3'){
    echo '{"data":"ajax请求"}';
}


?>