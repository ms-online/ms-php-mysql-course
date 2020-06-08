<?php 
    // 条件语句
    $age = 20;

    // if & if ...else...& if...elseif..else..
    // if($age < 20){
    //     echo '满足if条件';
    // }elseif($age === 20){
    //     echo '满足elseif条件';
    // }
    // else{
    //     echo '条件不满足';
    // }

    $products = [
		['name' => 'apple', 'price' => 10],
		['name' => 'peach', 'price' => 5],
		['name' => 'mongo', 'price' => 15],
		['name' => 'grape', 'price' => 20],
		['name' => 'orange', 'price' => 8],
		['name' => 'watermelon', 'price' => 4]
    ];

    // foreach($products as $product){
    //     if($product['price'] < 20 && $product['price'] > 10 ){
    //         echo $product['name'] . '<br />';
    //     }

    //     if($product['price'] > 15 || $product['price'] < 10){
    //         echo $product['name'] . '<br />';
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 初学者课程</title>
</head>
<body>
        <div>
            <ul>
                <?php foreach($products as $product){?>
                    <?php if($product['price'] > 15){?>
                        <li><?php echo $product['name'];?></li>
                    <?php }?>
                <?php }?>
            </ul>
        </div>
</body>
</html>