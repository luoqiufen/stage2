<?php

header("content-type:text/html;charset=utf-8");

// 获取cookie
var_dump($_COOKIE);
// 增加cookie信息
// 持久cookie
setcookie("uage","15",time()+3600);
?>

<h1>第三个页面 php</h1>
<a href="./04_test4.php">下一页: 第四页</a>
