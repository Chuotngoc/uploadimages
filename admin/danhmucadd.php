<?php
$page = 4;
include_once 'header.php';
include_once LIBRARY.'saveIMG.php';
include_once LIBRARY.'io.php';

if(isset($_POST['add'])){
    $name = REQUEST('ten');
    $anh =  uploadIMG();
    $sql = "insert into `category`(`name`) VALUES ('$name')";
    Excuter($sql);
    header("Location:danhmuc.php");
}
?>

<div class="container col-sm-6 col-sm-offset-3">


<form role="form" method="post" enctype="multipart/form-data" action="danhmucadd.php">
    <div class="form-group">
        <label for="ten">Tên danh mục:</label>
        <input type="text" class="form-control" name="ten" id="ten">
    </div>
    <button type="submit" class="btn btn-default" name="add">Thêm</button>
</form>
</div>