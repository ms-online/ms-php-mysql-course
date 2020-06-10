<?php 
  
  // mysqli & PDO

  // 链接数据库
   $conn = mysqli_connect('localhost','msonlinephp','test1234','msonline courses');
  // 验证数据库链接是否成功
   if(!$conn){
    echo '数据库链接失败：'. mysqli_connect_error();
   }

  // 创建SQL查询语句
  $sql = 'SELECT title, points, id FROM courses';

  // 执行查询语句得到返回结果对象
  $result = mysqli_query($conn, $sql);

  // 获取结果对象并对她进行格式化（关联数组）
  $courses = mysqli_fetch_all($result,MYSQLI_ASSOC);

  // 释放结果内存
  mysqli_free_result($result);

  // 关闭数据库链接
  mysqli_close($conn);

  print_r($courses);


?>

<!DOCTYPE html>
<html lang="en">

  <?php include('templates/header.php');?>

  
  <?php include('templates/footer.php');?>
     

</html>