<?php
/*
 * @Author: your name
 * @Date: 2020-07-01 11:06:50
 * @LastEditTime: 2020-07-01 14:23:59
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_04\02_index.php
 */ 
header("content-type:text/html;charset=utf-8");

// post 提交的文本信息\
echo '<h3>post信息</h3>';
var_dump($_POST);
echo '<h3>get信息</h3>';
var_dump($_GET);

// 获取文件信息
echo '<h3>file信息</h3>';
var_dump($_FILES);

// 把上传的文件存储到服务器目录里(演示)

// 转移上传的文件 (原路径,新路径)
// move_uploaded_file()
$old = $_FILES['pic']['tmp_name'];
// 处理: 防止文件名冲突(了解)
// 自定义新名字: 时间戳+随机数+原名字
$name = strtotime('now').mt_rand(0,1000).$_FILES['pic']['name'];

$new = './upload/'.$name;
$rs = move_uploaded_file($old,$new);
if($rs){//成功
    echo '上传成功';
}else{//失败
    echo '上传失败';
}
    

?>