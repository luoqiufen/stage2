<?php
/*
 * @Author: your name
 * @Date: 2020-06-28 17:01:08
 * @LastEditTime: 2020-06-28 18:00:21
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_01\07_for.php
 */ 
header("content-type:text/html;charset=utf-8");

// 1)for循环
echo '<h3>for循环</h3>';

echo '<ul>';
for($i = 1; $i<=5; $i++){
    echo ('<li>第'.$i.'行</li>');
}
echo '</ul>';

// 2)while循环
echo '<h3>while循环</h3>';

echo '<ol>';
$i = 1;
while( $i<=5){
    echo ('<li>第'.$i.'行</li>');
    $i++;
}
echo '</ol>';

// 3)do-while循环
// 1+2+3+...+100的和
echo '<h3>do-while循环</h3>';
$num = 1;
$sum = 0;
do{
    $sum += $num;
    $num++;
}while($num<=100);
echo '1+2+3+...+100='.$sum;

// 数组循环
$province = array('江苏省','湖北省','湖南省','四川省');
var_dump($province);
echo count($province);//4

echo '<hr color = red>';
// for循环和
for($i = 0; $i < count($province); $i++){
    echo $province[$i].'<br>';
}

echo '<hr color = red>';
// while循环
$i = 0;
while($i < count($province)){
    echo $i.'-->'.$province[$i].'<br>';
    $i++;
}

echo '<hr color = red>';
// do-while循环
$i= 0;
do{
    echo $i.'-->'.$province[$i].'<br>';
    $i++;
}while($i < count($province));

?>