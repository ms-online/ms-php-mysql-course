<?php 
    // 文件系统（一）
    // $files = readfile('readme.txt');
    // echo $files;

    $file = 'test.txt';

    if(file_exists($file)){
        //读取文件
        echo readfile($file) . '<br/>';
        // 绝对路径
        echo realpath($file). '<br/>';
        // filesize获取文件大小
        echo filesize($file). '<br/>';
        // 重命名
        rename($file, 'test.txt');
        // 文件复制
        copy($file,'file.txt');
    }else{
        echo '抱歉，文件不存在！';
    }

    // 创建目录
    mkdir('php');



?>

