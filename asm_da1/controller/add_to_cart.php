<?php
    session_start();

    include '../model/connect.php';
    $productId = $_POST['productId'];
    $receiptId = $_POST['userId'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $categoryImage = $_POST['categoryImage'];

    $arr_cart = array($productId,$receiptId,$productName,$productPrice,$categoryImage);

    if (!isset($_SESSION['mycart'])) {
        $_SESSION['mycart'] = array();
    }
    
    array_push($_SESSION['mycart'], $arr_cart); 

    header("location:../view/user/index.php?act=logined&userId=$receiptId");
    include '../view/user/cart.php';


?>