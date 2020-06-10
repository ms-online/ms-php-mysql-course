<?php 
  // mysqli & PDO
  // 链接数据库
  $conn = mysqli_connect('localhost','msonlinephp','test1234','msonline courses');
  // 验证数据库链接是否成功
   if(!$conn){
    echo '数据库链接失败：'. mysqli_connect_error();
   }
?>