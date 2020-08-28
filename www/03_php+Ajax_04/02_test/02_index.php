<?php

header("content-type:text/html;charset=utf-8");

/* if($_GET['act']=='get'){
    echo 'get请求'.$_GET['ucode'];
} */

/* if($_POST['act']=='post'){
    echo 'post请求'.$_POST['ucode'];
} */


if($_REQUEST['act']=='ajax'){
    echo 'ajax请求'.$_REQUEST['ucode'];
}

?>