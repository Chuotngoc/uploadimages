<?php
include_once LIBRARY."login.php";
if(islogin()){
    header("Location:".URL."/index.php");
}
if(isset($_REQUEST['login'])){
    $name = REQUEST("name");
    $pass = REQUEST("pass");
    $sql = "Select * from `user` WHERE name = '$name' and pass = '$pass'";
    $data = Select($sql);
    if(count($data) > 0){
        setcookie("id",$data[0]["id"]);
        setcookie("name",$data[0]["name"]);
        header("Location:".URL."/index.php");
    }else{
        $errors[] = "Mật khẩu hoặc Tên Đăng nhập sai!";
    }
}

if(isset($_REQUEST['logout'])){
    setcookie("id",null);
    setcookie("name",null);
    header("Location:".URL."/index.php");
}