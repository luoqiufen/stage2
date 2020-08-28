<?php
/*
 * @Author: your name
 * @Date: 2020-06-30 17:52:21
 * @LastEditTime: 2020-06-30 20:19:26
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_03\03_json\04_search.php
 */ 

header("content-type:text/html;charset=utf-8");

// 接收post传递过来的数据
// var_dump($_POST['data']);//string '{"ucode":"1001","uname":"猪猪侠","upass":"13579"}' (length=52)

// php操作json字符串
// 转成数组
$arr= json_decode($_POST['data'],true);
// var_dump($arr);
/* 
array
  'ucode' => string '1001' (length=4)
  'uname' => string '猪猪侠' (length=9)
  'upass' => string '13579' (length=5)
*/

// uname: 猪猪侠 upass: 13579
if($arr['uname'] == '猪猪侠' && $arr['upass'] == '13579'){
    // 可以搜索数据
    echo file_get_contents('./01_json.json');
}else{
    echo '未搜索到信息';
}


?>