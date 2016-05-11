<?php
$page = 4;
include_once 'header.php';

$rows =Select("select * from `category`");
?>
<div class="container">
    <a href="danhmucadd.php" class="btn btn-info">Thêm mới</a>
</div>
<div class="container">
    <h2> Danh mục</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Tên</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($rows as $row): ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><a href="danhmucedit.php?id=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
                <td><a href="danhmucdel.php?id=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>