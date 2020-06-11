<?php
    // 链接数据库
include('config/db_connect.php');

    // 删除课程
    if(isset($_POST['delete'])){
    // 初始化id
    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    // 创建SQL语句
    $sql = "DELETE FROM courses WHERE id = $id_to_delete";

    // 执行语句并进行验证
    if(mysqli_query($conn, $sql)){
        //删除成功
        header('Location: index.php');
    }else{
        // 删除失败
        echo 'query error: ' . mysqli_error($conn);
    }
    }

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

    <!-- 删除表单 -->
    <form action="details.php" method="POST">
        <input type="hidden" name="id_to_delete" value ="<?php echo $course['id'];?>">
        <input type="submit" name="delete" value="删除" class="btn brand z-depth-0">
    </form>
    <?php else:?>
    <h5>抱歉，该课程详情不存在！</h5>
   <?php endif;?>
</div>
<?php include('templates/footer.php');?>


</html>