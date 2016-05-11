
<?php

include_once CODE . "upload.php";
$categores = Select("select * from `category`");
?>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form role="form" method="post">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload Hình ảnh</h4>
            </div>
            <div class="modal-body">

                    <div class="form-group">
                        <label for="name">Tên Hình ảnh:</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Danh mục:</label>
                        <select name="cate" class="form-control">
                            <?php foreach($categores as $category): ?>
                                <option value=" <?php echo $category["id"] ?>"> <?php echo $category["name"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="img">Hình ảnh:</label>
                        <input type="file" name="anh" class="form-control" id="img" >
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" name="upload" class="btn btn-primary col-sm-offset-1 col-sm-3">Upload</button>
                <button type="reset" class="btn btn-danger col-sm-3 col-sm-offset-1">Làm mới</button>
                <button type="button" class="btn btn-default col-sm-3 col-sm-offset-1" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>
