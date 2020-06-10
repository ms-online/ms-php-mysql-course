<?php 
  
  // mysqli & PDO

  // 链接数据库
   $conn = mysqli_connect('localhost','msonlinephp','test1234','msonline courses');

   if(!$conn){
    echo '数据库链接失败：'. mysqli_connect_error();
   }
?>

<!DOCTYPE html>
<html lang="en">

  <?php include('templates/header.php');?>

  
  <?php include('templates/footer.php');?>
     

</html>