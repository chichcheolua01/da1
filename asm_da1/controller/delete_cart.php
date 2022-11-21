<?php
    session_start();
    include '../model/connect.php';
    $userId = $_GET['userId'];
    if(isset($_GET['cartId'])){
        array_splice($_SESSION['mycart'],$_GET['cartId'],1);
    } else{
        $_SESSION['mycart'] = [];
    }
    header("location:../view/user/index.php?act=logined&userId=$userId");
?>