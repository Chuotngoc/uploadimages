<?php
if(isset($errors)) {
    foreach ($errors as $error) {
    ?>
        <div class="alert alert-warning">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo $error; ?>
        </div>
    <?php
    }
}
if(isset($msgs)) {
    foreach ($msgs as $msg) {
        ?>
        <div class="alert alert-info">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo $msg; ?>
        </div>
        <?php
    }
}
?>