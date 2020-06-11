<?php 
    // 三元运算符

    $score = 60;

    // if($score >= 60){
    //     echo '恭喜你，考试通过！';
    // }else{
    //     echo '抱歉，请继续努力！';
    // }

    // 语法： 条件？结果1:结果2
    // echo $score>=60?'恭喜你，考试通过':'抱歉，请继续努力！';
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基础课程</title>
</head>
<body>
    <!-- <?php if($score>=60){?>

    <?php } ?> -->

    <h2><?php echo $score>=60 ? '恭喜你，考试通过！': '抱歉，请继续努力！';?></h2>
</body>
</html>