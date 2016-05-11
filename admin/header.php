<?php
include_once "config.php";
include_once LIBRARY.'io.php';
include_once LIBRARY.'login.php';
if(empty($page)){
    $page =0;
}
if(!islogin()){
    header("Location:login.php");
}
?>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-2.0.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: #E7F3F7;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo URL.'/index.php' ?>">Trang Quản lý</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="<?php echo ($page ==3)? "active" : null; ?>" ><a href="hinhanh.php">Hình ảnh</a></li>
            <li class="<?php echo ($page ==4)? "active" : null; ?>" ><a href="danhmuc.php">Danh mục</a></li>
        </ul>
        <div class="nav navbar-right">
            <a href="<?php echo URL; ?>/login.php?logout" class="btn btn-info" style=" margin-top: 7px; margin-right: 20px">Đăng xuất</a>
        </div>
    </div>
</nav>

