<?php
$page = 4;
include_once 'header.php';
include_once LIBRARY.'io.php';
include_once LIBRARY.'saveIMG.php';
if(!isset($_REQUEST['id'])){
    header("Location:danhmuc.php");

}
if(isset($_POST['edit'])){
    $id = REQUEST('id');
    $ten = REQUEST("ten");
    $sql = "update `category` set name  = '$ten' WHERE  id = $id";
    Excuter($sql);
}
$id = REQUEST('id');
$rows =Select("select * from `category` WHERE id = $id");
if(count($rows)<1){
    header("Location:danhmuc.php");
}

?>

<div class="container col-sm-6 col-sm-offset-3">
    <form role="form" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $rows[0]['id']?>">
        <div class="form-group">
            <label for="ten">Tên danh mục:</label>
            <input type="text" class="form-control" name="ten" id="ten" value="<?php echo $rows[0]['name'] ?>">
        </div>
        <button type="submit" class="btn btn-default col-sm-2 col-sm-offset-3" name="edit">Lưu</button>
        <a href="danhmuc.php" class="btn btn-danger col-sm-2 col-sm-offset-1">Trở lại</a>
    </form>
</div>
