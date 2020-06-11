<?php 
    // Session会话
    if(isset($_POST['submit'])){
        // 开启会话/创建会话
        session_start();

        $_SESSION['name'] = $_POST['name'];
        header('Location:index.php');
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基础课程</title>
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <input type="text" name="name">
    <input type="submit" name="submit" value="提交">
</form>
</body>
</html>