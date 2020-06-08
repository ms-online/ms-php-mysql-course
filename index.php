<?php 
  //include & require

    include 'test.php';
    require ('test.php');

    // 文件加载失败的时候，两者不同之处：
    // include 产生一个警告脚本并且会继续执行代码
    // require 导致一个致命性的错误同时停止执行
    // include('test1.php');
    // require('test1.php');


    echo 'end of PHP';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 初学者课程</title>
</head>
<body>
       <?php include('test2.php');?>
       <?php include('test2.php');?>
       <?php include('test2.php');?>
</body>
</html>