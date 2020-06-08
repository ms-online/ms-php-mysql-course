<?php 
        // 创建function
        // PHP函数准则
        // 函数名尽量能够提示出它的功能；
        // 函数名称以字母或者下划线开头（不能以数字开头）
    function sayHello($name = 'Summer', $time = 'morning'){
        echo "good $time $name";
    }

    sayHello('Lucy','night');
    // sayHello('Jeff');

    function formatProduct($product){
        // echo "{$product['name']} 需要花费 {$product['price']} 进行购买";
        return "{$product['name']} 需要花费 {$product['price']} 进行购买";
    }

    $formatted = formatProduct(['name' => 'apple', 'price'=> '10']);
    // echo $formatted;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 初学者课程</title>
</head>
<body>
       
</body>
</html>