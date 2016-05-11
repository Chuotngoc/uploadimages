<?php
if(isset($errors)) {
    foreach ($errors as $error) {
    ?>
        <div class="alert alert-warning">
            <?php echo $error; ?>
        </div>
    <?php
    }
}
?>