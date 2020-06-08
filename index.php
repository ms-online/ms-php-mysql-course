<?php 

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