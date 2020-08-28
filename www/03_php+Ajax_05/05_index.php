<?php

header("content-type:text/html;charset=utf-8");

// 回传数据
// 返回的 就是 '函数名('数据')'

echo $_GET['callback'].'("我是响应信息")';
// echo 'init("我是响应信息")'






?>