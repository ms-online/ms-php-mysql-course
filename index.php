<?php 
    $posts = ['post one', 'post two', 'post three'];

    // for循环
    // for($i = 0; $i < count($posts); $i++){
    //     echo $posts[$i] . '<br />';
    // }

    // foreach循环
    // foreach($posts as $post){
    //     echo $post . '<br />';
    // }
    

    $products = [
		['name' => 'apple', 'price' => 10],
		['name' => 'peach', 'price' => 5],
		['name' => 'mongo', 'price' => 15],
		['name' => 'grape', 'price' => 20],
		['name' => 'orange', 'price' => 8],
		['name' => 'watermelon', 'price' => 4]
    ];
    
    foreach($products as $product){
        echo $product['name'] . '-' . $product['price'];
        echo '<br />';
    }

    // while
    // $i = 0;
    // while($i < count($products)){
    //     echo $products[$i]['name'];
    //     echo '<br />';
    //     $i++;
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
        <h1>Products</h1>
        <ul>
        <?php  foreach($products as $product){?>
            <h3><?php echo $product['name'];?></h3>
            <p>¥<?php echo $product['price'];?></p>
       <?php }?>
        </ul>
</body>
</html>