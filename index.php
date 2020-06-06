<?php 
    // PHP 变量规则：
    // 变量以 $ 符号开始，后面跟着变量的名称
    // 变量名必须以字母或者下划线字符开始
    // 变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）
    // 变量名不能包含空格
    // 变量名是区分大小写的（$y 和 $Y 是两个不同的变量）

    // 定义常量
    define('NAME','Summer');
    
    // 定义变量
    $name = 'Summer';
    $age = 25;
    $name = 'Jeff';

    echo $name;
    echo $age;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 初学者课程</title>
</head>
<body>
    <h1>欢迎来到米修在线！</h1>
    <div><?php echo NAME;?></div>
</body>
</html>