

<?php
include_once "database.php";
include_once CODE."login.php";
include_once "header.php";
?>
<div class="container col-sm-4 col-sm-offset-4" style="margin-top: 100px">
    <?php include_once "error.php"; ?>
    <form role="form">
        <div class="form-group">
            <label for="name">Tên đăng nhập:</label>
            <input type="text" name="name" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="pwd">Mật khẩu:</label>
            <input type="password" name="pass" class="form-control" id="pwd">
        </div>
        <button type="submit" name="login" class="btn btn-primary col-sm-offset-2 col-sm-3">Đăng nhâp</button>
        <button class="btn btn-danger col-sm-3 col-sm-offset-2">Hủy</button>
    </form>
</div>
<?php include_once "footer.php" ?>
