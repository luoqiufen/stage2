<?php
echo('这是php啊')
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
    <?php
        echo "<h1 style='border: 2px solid red;'>标题1: php</h1>";
    ?>

    <script>
        document.write("<h2 style='border: 2px solid red;'>标题2: js</h2>")
    </script>
    <h2 style='border: 2px solid red;'>标题3: html</h2>

    <?php
        // 用输出语句输出一个列表
        echo('<ul><li>第一行</li><li>第二行</li><li>第三行</li></ul>');
    ?>
</body>
</html>