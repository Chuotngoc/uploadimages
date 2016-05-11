<?php
include_once LIBRARY."saveIMG.php";

if(isset($_REQUEST["upload"])){
    $name = REQUEST("name");
    $cate = REQUEST("cate");
    $url = uploadIMG();
    if($url != null){
        $sql = "Insert into `images`(`name`,`category_id`,`url`) VALUES('$name',$cate,'$url')";
        if(Excuter($sql)){
            $msgs[] = "Upload ảnh thành công!";
        }else {
            $errors[] = "Lỗi không thể lưu hình ảnh";
        }

    }else{
        $errors[] = "Lỗi upload hình ảnh";
    }

}
