<?php
function uploadIMG($name = "anh"){
    $target_dir = ROOT."/public/images/";
    $extend = date('dmyhms')."_";
    $target_file = $target_dir .$extend. basename($_FILES[$name]["name"]);
    if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_file)) {
        return URL."/public/images/".$extend. basename($_FILES[$name]["name"]);
    }

    return null;
}
