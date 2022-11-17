<?php
    session_start();
    include '../model/connect.php';
    $productId = $_POST['productId'];
    $receiptId = $_POST['userId'];
    $add_to_cart_query = "INSERT INTO receipts_info (receiptId, productId) VALUES ('$receiptId', '$productId')";
    connect($add_to_cart_query);
    header("Location: ../view/user/index.php?act=logined");
?>