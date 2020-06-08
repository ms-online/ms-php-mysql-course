<?php 
//    多维数组——包含一个或者多个数组的数组

    $posts = [
        ['title'=>'post one', 'author'=>'Summer', 'content'=>'lorem', 'likes'=>20],
        ['title'=>'post two',  'author'=>'Lucy',  'content'=>'lorem', 'likes'=>30],
        ['title'=>'post three','author'=> 'Henry','content'=> 'lorem','likes'=> 40]
    ];

    // echo $posts[0][0];
    // print_r($posts);
    // print_r($posts[2]['author']);
    // echo count($posts);

    $posts[]=['title'=> 'post four','author'=>'Jeff','content'=> 'lorem','likes'=>'50'];
    // print_r($posts);

   $poped = array_pop($posts);
   print_r($poped);
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