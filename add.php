<?php 
    // if(isset($_GET['submit'])){
    //     echo $_GET['email'] . '<br/>'; 
    //     echo $_GET['title'] . '<br/>'; 
    //     echo $_GET['points'] . '<br/>'; 
    // }
    if(isset($_POST['submit'])){
        // 验证邮箱
        if(empty($_POST['email'])){
            echo '邮箱不能为空 <br/>';
        }else{
           $email = $_POST['email'];
           if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
             echo '邮箱格式不正确';
           }
        }

        // 验证课程名称
        if(empty($_POST['title'])){
            echo '课程名称不能为空 <br/>';
        }else{
           $title = $_POST['title'];
           if(!preg_match('/^[\w\x{4e00}-\x{9fa5}]+$/u',$title)){
             echo '课程名称不能包含特殊字符';
           }
        }

        // 验证知识要点
        if(empty($_POST['points'])){
            echo '至少提交一个知识要点 <br/>';
        }else{
           $points = $_POST['points'];
           if(!preg_match('/^([\w\x{4e00}-\x{9fa5}]+)(,\s*[\w\x{4e00}-\x{9fa5}\s]*)*$/u', $points)){
               echo '知识要点必须以英文输入法逗号隔开';
           }
        }
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