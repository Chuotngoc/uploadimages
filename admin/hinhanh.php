<?php
$page = 3;
include_once 'header.php';

$rows =Select("select * from `viewimages`");
?>

<div class="container">
    <h2> Hình ảnh</h2>
    <div class="container">
        <?php foreach($rows as $row): ?>
            <div class="col-sm-3">
                <div>
                    <img src="<?php echo $row['url'] ?>" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
                </div>
                <div>
                    <h4 class="text-center"><b><?php echo $row['name'] ?></b></h4>
                    <p class="text-center">Danh mục: <i><?php echo $row['category'] ?></i></p>
                </div>
                <div class="control-view">
                    <a href="hinhanhedit.php?id=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-edit"></span>Sửa</a>
                    <a href="hinhanhdel.php?id=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-remove"></span>Xóa</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>