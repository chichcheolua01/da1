<?php
    session_start();
    include '../model/connect.php';
    $productId = $_POST['productId'];
<<<<<<< HEAD
    $receiptId = $_POST['userId'];
    $add_to_cart_query = "INSERT INTO receipts_info (receiptId, productId) VALUES ('$receiptId','$productId')";
    connect($add_to_cart_query);
    header("Location: ../view/user/index.php?act=logined&receiptId=".$receiptId);
=======
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
>>>>>>> a2fdfb9f280c75cb3bf69d661fe4fb66214af8da
?>