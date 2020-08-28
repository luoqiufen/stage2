<?php
/*
 * @Author: your name
 * @Date: 2020-06-30 15:24:08
 * @LastEditTime: 2020-06-30 15:47:58
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \www\03_php+Ajax_03\02_xml\03_index.php
 */ 
header("content-type:text/xml;charset=utf-8");

//echo '响应信息';
// 返回的 读取 xml文档信息

echo file_get_contents('./01_xml.xml');

?>