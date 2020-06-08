<?php 
    // 变量作用域

    // 局部变量
    function myFunc(){
        $price = 20;
        echo $price;
    }

    // myFunc();
    // echo $price;

    function myFuncTwo($age){
        echo $age;
    }

    // myFuncTwo(20);
    // echo $age;

    // 全局变量
    $name = 'Henry';

    // function sayHello(){
    //     global $name;
    //     $name = "Bob";
    //     echo "Hello $name";
    // }
    // sayHello();
    // echo $name;

    function sayBye(&$name){
        $name = "Lucy";
        echo "Byebye $name";
    }

    sayBye($name);
    echo $name;
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