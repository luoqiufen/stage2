<?php
/*
 * @Author: your name
 * @Date: 2020-06-28 10:18:45
 * @LastEditTime: 2020-07-13 20:01:42
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_01\01_php 语法.php
 */ 

header("content-type:text/html;charset=utf-8");
// header(): 设置文件头

// php输出语句1: echo echo()
echo '<h2>这是php的echo输出语句</h2>','<h3>这是一个标题</h3>';

echo('<p>段落1</p>'),('<p>段落2</p>');

echo('<hr>');

# php输出语句2: print print()
print 'aa';
print('bb');

echo('<hr>');

# php输出语句3: print_r()
print_r('cc');

echo('<hr>');

# php输出语句4: var_dump()
// 打印详细数据,譬如 数组
var_dump('apple');

echo('<hr color=red>');
// php里的连接符是点: .
echo '小明','小红'.'白了个白';
print '虹猫'.'蓝兔'.'豆豆';
print_r('黑猫警长'.'汤姆猫'.'杰瑞鼠');
var_dump('gfjhhg'.'xfghgh');

?>