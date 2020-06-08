<?php 
    // continue & break

    $products = [
		['name' => 'apple', 'price' => 10],
		['name' => 'peach', 'price' => 5],
		['name' => 'mongo', 'price' => 15],
		['name' => 'grape', 'price' => 20],
		['name' => 'orange', 'price' => 8],
		['name' => 'watermelon', 'price' => 4]
    ];

    foreach($products as $product){
        if($product['name'] === 'grape'){
        break;
        // 终止循环体的遍历后代码接着运行
        }

        if($product['price'] < 8){
            continue;
        // 终止循环体的单次循环后继续执行下面的循环
        }

        echo $product['name'] . '<br />';
    }
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