<?php
    session_start();
    include '../model/connect.php';
    $productId = $_POST['productId'];
    $userId = $_POST['userId'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $categoryImage = $_POST['categoryImage'];
    $productImage = $_POST['productImage'];
    $arr_cart = array($productId,$userId,$productName,$productPrice,$categoryImage,$productImage);
    if (!isset($_SESSION['mycart'])) {
        $_SESSION['mycart'] = array();
    }
    array_push($_SESSION['mycart'], $arr_cart); 
    header("location:../view/user/index.php?act=logined&userId=$userId");
    include '../view/user/cart.php';
?>