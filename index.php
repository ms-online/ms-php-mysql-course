<?php 
  
  // mysqli & PDO

  // 链接数据库
   $conn = mysqli_connect('localhost','msonlinephp','test1234','msonline courses');
  // 验证数据库链接是否成功
   if(!$conn){
    echo '数据库链接失败：'. mysqli_connect_error();
   }

  // 创建SQL查询语句
  $sql = 'SELECT title, points, id FROM courses ORDER BY created_at';

  // 执行查询语句得到返回结果对象
  $result = mysqli_query($conn, $sql);

  // 获取结果对象并对她进行格式化（关联数组）
  $courses = mysqli_fetch_all($result,MYSQLI_ASSOC);

  // 释放结果内存
  mysqli_free_result($result);

  // 关闭数据库链接
  mysqli_close($conn);

  // explode方法将字符串分割为数组
  // print_r(explode(',',$courses[0]['points']));

?>

<!DOCTYPE html>
<html lang="en">

  <?php include('templates/header.php');?>
   <h4 class="center grey-text">课程列表</h4>
   <div class="container">
   <div class="row">
     <?php foreach($courses as $course){?>
      <div class="col s6 md3">
        <div class="card z-depth-0">
          <div class="card-content center">
            <h6><?php echo htmlspecialchars($course['title']);?></h6>
            <ul class="grey-text">
              <?php foreach(explode(',',$course['points']) as $point){?>
                <li><?php echo htmlspecialchars($point);?></li>
              <?php }?>
            </ul>
          </div>
          <div class="card-action right-align">
            <a href="#" class="brand-text">了解更多</a>
          </div>
        </div>
      </div>
     <?php }?>
   </div>
   </div>
   
  <?php include('templates/footer.php');?>
     

</html>