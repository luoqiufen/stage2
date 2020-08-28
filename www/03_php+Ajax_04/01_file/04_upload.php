<?php
header("content-type:text/html;charset=utf-8");

// 后端接收到的数据?
// var_dump($_POST);
// var_dump($_FILES);

// 把上传的文件存储到 服务器 目录
if($_FILES['img']['size']>0){//有文件上传
    $old = $_FILES['img']['tmp_name'];

    $name = strtotime('now').mt_rand(0,1000).strrchr($_FILES['img']['name'],'.');//时间戳+图片后缀名
    $new = './upload/'.$name;
    
    $rs = move_uploaded_file($old,$new);
    if($rs){//上传成功,返回新路径
        echo $new;
    }else{//上传失败
        echo 'no';
    }
}





?>