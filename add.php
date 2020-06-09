<?php 
    // if(isset($_GET['submit'])){
    //     echo $_GET['email'] . '<br/>'; 
    //     echo $_GET['title'] . '<br/>'; 
    //     echo $_GET['points'] . '<br/>'; 
    // }
    if(isset($_POST['submit'])){
        echo htmlspecialchars($_POST['email']) . '<br/>'; 
        echo htmlspecialchars($_POST['title']) . '<br/>'; 
        echo htmlspecialchars($_POST['points']) . '<br/>'; 
    }
?>

<!DOCTYPE html>
<html lang="en">

  <?php include('templates/header.php');?>

  <section class="container grey-text">
      <h4 class="center">添加课程</h4>
      <form action="add.php" class="white" method="POST">
          <label for="email">邮箱</label>
          <input type="text" name="email">
          <label for="title">课程名称</label>
          <input type="text" name="title">
          <label for="points">知识要点(逗号隔开)</label>
          <input type="text" name="points">
          <div class="center">
              <input type="submit" name="submit" value="立即提交" class="btn brand z-depth-0">
          </div>
      </form>
  </section>
  
  <?php include('templates/footer.php');?>
     

</html>