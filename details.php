<?php
    // 链接数据库
include('config/db_connect.php');

   //  验证是否是get请求
   if(isset($_GET['id'])){
    // 初始化id
    $id = mysqli_real_escape_string($conn , $_GET['id']);

    // 创建SQL语句
    $sql = "SELECT * FROM courses WHERE id = $id";

    // 执行语句获得结果
    $result = mysqli_query($conn, $sql);

    // 获取单个结果并转换为数组格式
    $course = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
   }

// print_r($course);
?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php');?>

<div class="container center">
   <?php if($course):?>
    <h4>课程标题：<?php echo $course['title'];?></h4>
    <p>课程作者：<?php echo $course['email'];?></p>
    <p>创建时间：<?php echo $course['created_at'];?></p>
    <h5>知识要点：</h5>
    <p><?php echo $course['points'];?></p>
    <?php else:?>
    <h5>抱歉，该课程详情不存在！</h5>
   <?php endif;?>
</div>
<?php include('templates/footer.php');?>


</html>