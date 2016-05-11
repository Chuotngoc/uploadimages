<?php
$page = 3;
include_once 'header.php';

$rows =Select("select * from `images`");
?>

<div class="container">
    <h2> Hình ảnh</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Tên</th>
            <th>Danh mục</th>
            <th>Sửa</th>
            <th>Xóa</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($rows as $row): ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['category_id'] ?></td>
                <td><a href="hinhanhedit.php?id=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
                <td><a href="hinhanhdel.php?id=<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>