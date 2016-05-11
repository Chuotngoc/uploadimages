<?php
$page = 3;
include_once 'header.php';
include_once LIBRARY.'io.php';
include_once LIBRARY.'saveIMG.php';
$rows_cate =_select_query("select * from `category`");

if(!isset($_REQUEST['id'])){
    header("Location:hinhan.php");
}
if(isset($_POST['edit'])){
    $id = REQUEST('id');
    $ten = REQUEST('ten');
    $anh =  uploadIMG();
    if($anh == ''){
        $anh = REQUEST('old-img');
    }
    $mota = REQUEST('mota');
    $chitiet = REQUEST('chitiet');
    $gia = REQUEST('gia');
    if(empty($gia)){
        $gia =  0;
    }
    $danhmuc = REQUEST('danhmuc');
    $sql = "UPDATE `images` SET `ten`='$ten',`category_id`='$danhmuc' WHERE `id`=$id";
    //var_dump($sql);
    excuter_query($sql);
    //exit;
}
$id = REQUEST('id');
$rows =_select_query("select * from `images` WHERE id = $id");
if(count($rows)<1){
    header("Location:hinhanh.php");
}

?>

<div class="container col-sm-6 col-sm-offset-3">
    <form role="form" method="post" enctype="multipart/form-data">
        <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $rows[0]['id'] ?>">
        <div class="form-group">
            <label for="ten">Tên Hình ảnh:</label>
            <input type="text" class="form-control" name="ten" id="ten"  value="<?php echo $rows[0]['ten'] ?>">
        </div>
        <div class="form-group">
            <label for="anh">Danh mục:</label>
            <select class="form-control" name="danhmuc" id="danhmuc" value="<?php echo $rows[0]['category_id'] ?>">
                <?php foreach($rows_cate as $row): ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-default col-sm-2 col-sm-offset-3" name="edit">Lưu</button>
        <a href="danhmuc.php" class="btn btn-danger col-sm-2 col-sm-offset-1">Trở lại</a>
    </form>
</div>
