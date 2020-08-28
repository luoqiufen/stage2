<?php
//接收到的信息:
// var_dump($_GET);
//-data.json
$data = file_get_contents('./data.json');
$data = json_decode($data,true);//转成php数组
$mess = $data['pros'][$_GET['key']];//当前商品信息
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .item{
      width:700px;
      border:1px solid red;
      overflow:hidden;
    }
    .item img{
      float:left;
      width:200px;
      margin-right:10px;
    }
    .item span{
      color:skyblue;
    }
    .item font{
      color:red;
      font-size:24px;
    }
  </style>
</head>
<body>
  <div class="item">
    <img src="./imgs/<?php echo $mess['img'];  ?>" >
    <h3><?php echo $mess['title']?></h3>
    <p>
      作者: <span><?php echo $mess['author']?></span>
      <!-- 判断如果有出版社，再显示 -->
      <?php if($mess['public']){ ?>  

      出版社：<span><?php echo $mess['public']?></span>

      <?php }?>

    </p>
    <p> 
      当当价：<br>
      <font>¥<?php echo $mess['newP']?></font> 
      <br>
      定价：¥<?php echo $mess['oldP']?>
    </p>
  </div> 




</body>
</html>