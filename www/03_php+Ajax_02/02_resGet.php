<?php
header("content-type:text/html;charset=utf-8");

// 响应数据
echo '百度链接信息';

// 接收 ->请求时发送过来的数据(get)
// 预定义变量
// $_GET : 接收get传输的数据
// $_POST : 接收post传输的数据
var_dump($_GET);
/* array
  'act' => string 'category' (length=8) 
*/

echo '<h3>显示分类信息'.$_GET['act'].'</h3>';

echo '图书';
echo '<select>'.
    '<option>科幻</option>'.
    '<option>漫画</option>'.
    '<option>童话</option>'.
    '<option>小说</option>'.
'</select>';



?>