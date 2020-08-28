<?php
header('content-type:text/html;charset=utf-8');

//var_dump($_FILES);

//处理多文件
if($_FILES){//有文件上传
  $arr = array();//存储上传完的新地址
  foreach($_FILES as $k=>$v){//循环遍历-调用上传文件函数 upload(当前图)
    $rs = upload($v);//上传图片
    if($rs){//上传成功
      // 把上传新地址 添加到数组中
      array_push($arr,$rs);
    }
  }
  //返回响应信息
  echo json_encode($arr);
}

//上传一张图片
// 参数1：$file ->上传的图片信息
// 上传成功：return 新路径
// 上传失败: return false
function upload($file){
  $old =$file['tmp_name'];
  $name = strtotime('now').mt_rand(0,1000).$file['name'];
  $new = "./upload/".$name;
  $rs = move_uploaded_file($old,$new);
  if($rs){//上传成功，返回新的路径
    return $new;
  }else{//失败
    return false;
  }
}


?>