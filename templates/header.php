<?php
    session_start();

    // $_SESSION['name'] = 'Summer';

    if($_SERVER['QUERY_STRING'] == 'noname'){
        unset($_SESSION['name']);
        // session_unset();
    }

    // 空合并运算符
    $name = $_SESSION['name'] ?? '游客';
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <title>米修课堂</title>
    <style>
        .brand{
            background:#cbb09c !important;
        }

        .brand-text{
            color:#cbb09c !important;
        }
        form{
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }
        label{
            font-size: 16px;
        }

        .course{
            width:100px;
            margin: 40px auto -40px;
            display:block;
            position:relative;
            top: -40px;
        }
    </style>
</head>
<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="index.php" class="brand-logo brand-text">米修课堂</a>
            <ul id="nav-mobile" class="right hide-on-small-and-down">
                <li class="grey-text">欢迎<?php echo htmlspecialchars($name);?></li>
                <li><a href="add.php" class="btn brand z-depth-0">添加课程</a></li>
            </ul>
        </div>
    </nav>
