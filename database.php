<?php
include_once "config.php";
global $conect;
$conect = mysqli_connect(server,user,pass,db);
mysqli_set_charset($conect,"utf-8");
if (mysqli_connect_errno())
{
    echo "Lỗi kết nối tới MySQL: " . mysqli_connect_error();
}

function Select($sql){
    $connect = $GLOBALS['conect'];
    if ($result=mysqli_query($connect,$sql))
    {
        $rows = [];
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $rows[] = $row;
        }
        return $rows;
    }
    mysqli_close($connect);
    return null;
}

function Excuter($sql){
    $connect = $GLOBALS['conect'];
    if ($result=mysqli_query($connect,$sql))
    {
        return true;
    }
    mysqli_close($connect);
    return false;
}

