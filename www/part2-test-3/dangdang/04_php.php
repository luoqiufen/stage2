<?php
/*
 * @Author: your name
 * @Date: 2020-07-04 12:43:33
 * @LastEditTime: 2020-07-04 16:05:31
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\week3_test\dangdang\04_php.php
 */ 

// 接收到的信息
var_dump($_GET);

$data = json_decode(file_get_contents('./01_index.json'),true);
var_dump($data['books'][$_GET['key']]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="item">
    <img src={{$value.img}} alt="">
    <h3>{{$value.book}}</h3>
    <p>
        作者:
        出版社:
    </p> 
    <p>当当价: <br>
        <font> </font><br>
        定价:
    </p>
    <p class="e_book">{{$value.e_book}}</p>
</div>
</body>
</html>