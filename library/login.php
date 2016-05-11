<?php
include_once "io.php";

function islogin(){
    return isset($_COOKIE["id"]);
}
function getName(){
    return $_COOKIE["name"];
}
function getID(){
    return $_COOKIE["id"];
}
?>