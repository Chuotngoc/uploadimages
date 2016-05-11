<?php


function REQUEST($var){
    return isset($_REQUEST[$var])? $_REQUEST[$var]: null;
}

function COOKIE($var){
    return isset($_COOKIE[$var])? $_COOKIE[$var]: null;
}

function ALL(){
    return $_REQUEST;
}