<?php 
    // 初始化变量
    $email = $title = $points = '';
    // 初始化报错数组
    $errors = array('email' => '', 'title' => '', 'points'=> '');
    if(isset($_POST['submit'])){
        // 验证邮箱
        if(empty($_POST['email'])){
            $errors['email'] ='邮箱不能为空';
        }else{
           $email = $_POST['email'];
           if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
             $errors['email'] ='邮箱格式不正确';
           }
        }

        // 验证课程名称
        if(empty($_POST['title'])){
            $errors['title'] ='课程名称不能为空';
        }else{
           $title = $_POST['title'];
           if(!preg_match('/^[\w\x{4e00}-\x{9fa5}]+$/u',$title)){
             $errors['title'] ='课程名称不能包含特殊字符';
           }
        }

        // 验证知识要点
        if(empty($_POST['points'])){
            $errors['points'] ='至少提交一个知识要点';
        }else{
           $points = $_POST['points'];
           if(!preg_match('/^([\w\x{4e00}-\x{9fa5}]+)(,\s*[\w\x{4e00}-\x{9fa5}\s]*)*$/u', $points)){
               $errors['points'] ='知识要点必须以英文输入法逗号隔开';
           }
        }

        // errors数组为空的时候
        if(array_filter($errors)){
            // echo '表单中有错误提示';
        }else{
            // echo '表单验证通过';
            header('Location:index.php');
            exit;
            
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
          <input type="text" name="email" value="<?php echo htmlspecialchars($email);?>">
          <div class="red-text"><?php echo $errors['email']; ?></div>
          <label for="title">课程名称</label>
          <input type="text" name="title" value="<?php echo htmlspecialchars($title);?>">
          <div class="red-text"><?php echo $errors['title']; ?></div>
          <label for="points">知识要点(逗号隔开)</label>
          <input type="text" name="points" value="<?php echo htmlspecialchars($points);?>">
          <div class="red-text"><?php echo $errors['points']; ?></div>
          <div class="center">
              <input type="submit" name="submit" value="立即提交" class="btn brand z-depth-0">
          </div>
      </form>
  </section>
  
  <?php include('templates/footer.php');?>
     

</html>