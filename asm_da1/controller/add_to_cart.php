<?php
session_start();
include '../model/connect.php';
if (!isset($_SESSION['userId'])) {
    header("location:../view/user/index.php?act=signin");
} else {
    $productId = $_POST['productId'];
    $userId = $_POST['userId'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productImage = $_POST['productImage'];
    $arr_cart = array($productId, $userId, $productName, $productPrice, $productImage);

    if (!isset($_SESSION['mycart'])) {
        $_SESSION['mycart'] = array();
    }
    array_push($_SESSION['mycart'], $arr_cart);
    header("location:../view/user/index.php?act=logined&userId=$userId");
    include '../view/user/cart.php';
}

?>