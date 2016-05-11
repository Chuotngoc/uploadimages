<?php
include_once "config.php";
include_once LIBRARY . "io.php";
include_once LIBRARY . "login.php";
include_once "database.php";

if(!isset($title)){
    $title ="Upload ảnh";
}
?>

<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <script src="public/js/jquery-2.0.0.js"></script>
    <script src="public/js/bootstrap.js"></script>
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/public.css">
    <script src="public/js/public.js"></script>
</head>
<body style="background-color: rgba(211, 245, 235, 0.59);">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Upload ảnh</a>
        </div>

        <ul class="nav navbar-right menu-right">
            <?php if(!islogin()){ ?>
                <a href="login.php" class="btn btn-default">Đăng nhập</a>
            <?php }else{ ?>
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal">Upload</a>
                <a href="login.php?logout" class="btn alert-danger">Đăng xuất</a>
                <?php include_once LIBRARY."upload.php"; ?>
            <?php }?>
        </ul>
    </div>
</nav>
<?php include_once "error.php"; ?>
