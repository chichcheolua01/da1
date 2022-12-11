<?php
    session_start();
    include '../../model/connect.php';
if (isset($_SESSION['userId'])) {
}

    if(isset($_GET['cartId'])){
        array_splice($_SESSION['mycart'],$_GET['cartId'],1);
    } else{
        $_SESSION['mycart'] = [];
    }
    header("location:../../view/user/index.php?act=payment&userId=".$_SESSION['userId']);
?>
