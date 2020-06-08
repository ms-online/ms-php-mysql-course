<?php 
    // 索引数组——带有数字索引的数组
    $fruitOne = ['apple', 'orange', 'peach'];
    // echo $fruitOne[1];

    $fruitTwo = array('lemon', 'mango');
    // echo $fruitTwo[0];

    $price = [10,15,20,25];
    // print_r($price);

    // 重写
    $price[1] = 30;
    // print_r($price);

    // 数组末尾进行添加
    // $price[]= 5;
    // array_push($price,40);
    // print_r($price);

    // 删除数组中最后一个元素
    // array_pop($price);
    // print_r($price);

    // 返回数组元素的数目
    // echo count($price);
    
    // 数组合并
    $fruitThree = array_merge($fruitOne,$fruitTwo);
    // print_r($fruitThree);

    // 关联数组———带有键的数组(键值对数组)
    $colorOne = ['apple' => 'red', 'peach' => 'pink', 'lemon' => 'yellow'];
    // echo $colorOne['apple'];
    // print_r($colorOne);

    $colorTwo = array('orange'=> 'orange', 'grape' => 'purple');
    // print_r($colorTwo);

    // 数组末尾添加
    $colorTwo['watermelon'] = 'green';
    // print_r($colorTwo);

    // 返回元素数目
    // echo count($colorTwo);

    // 数组合并
    $colorThree = array_merge($colorOne,$colorTwo);
    print_r($colorThree);

   
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