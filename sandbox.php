<?php 
    // Session会话
    if(isset($_POST['submit'])){

        // 存储性别信息到cookie
        setcookie('gender',$_POST['gender'],time()+86400);
        
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
    <select name="gender" >
        <option value="male">先生</option>
        <option value="female">女士</option>
    </select>
    <input type="submit" name="submit" value="提交">
</form>
</body>
</html>