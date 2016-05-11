<?php
$page = 4;
include_once 'header.php';
include_once LIBRARY.'io.php';
include_once LIBRARY.'saveIMG.php';
if(!isset($_REQUEST['id'])){
    header("Location:danhmuc.php");

}
if(isset($_POST['del'])){
    $id = REQUEST('id');
    $sql = "DELETE FROM `category` WHERE id = $id";
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
        <h4>Bạn có muốn xóa danh mục <i><?php echo $rows[0]['name'] ?></i></h4>
        <button type="submit" class="btn btn-default col-sm-2 col-sm-offset-3" name="del">Xoá</button>
        <a href="danhmuc.php" class="btn btn-danger col-sm-2 col-sm-offset-1">Trở lại</a>
    </form>
</div>
