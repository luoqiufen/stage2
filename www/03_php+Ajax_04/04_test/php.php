<?php
/*
 * @Author: your name
 * @Date: 2020-07-01 18:53:56
 * @LastEditTime: 2020-07-02 19:49:25
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_04\04_test\php.php
 */ 
header("content-type:text/html;charset=utf-8");

// 1)处理用户名验证请求: 读取json文件
// 响应信息 : ->已被注册
if($_GET['act'] == 'checkUname'){
    $uname = $_POST['uname'];//前端提交的用户名
    // echo $uname;

    $data = file_get_contents('./json.json');
    $dataArr = json_decode($data,true);
    // var_dump($dataArr);

    // 循环遍历数组,到里边查找
    foreach($dataArr as $k => $v){
        // var_dump($v['uname']);//每个人
        if($uname == $v['uname']){//找到了
            echo 0;
        }
    }
}

// 2)处理上传的文件
if($_GET['act'] == 'upload'){
    // var_dump($_FILES);
    // 存储到服务器的upload目录里
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
}

// 3)处理表单提交
if($_GET['act']=='form'){
    // var_dump($_POST);
    // echo '入库成功';
    // 把提交的数据再回传给前端
    // 把$_POST(php数组) ->'json字符串
    echo json_encode($_POST);


}







?>