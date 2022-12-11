<?php
session_start();
include '../model/connect.php';
if (!isset($_SESSION['userId'])) {
    header("location:../../view/user/index.php?act=signin");
} else {
    $productId = $_POST['productId'];
    $userId = $_POST['userId'];
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productImage = $_POST['productImage'];
    $quantity = $_POST['quantity'];
    $status = "Đang xử lí";
    $arr_cart = array($productId, $userId, $productName, $productPrice, $productImage, $quantity, $status);

    if (!isset($_SESSION['mycart'])) {
        $_SESSION['mycart'] = array();
    }
    $i = 0;
    $sl = 1;
    $mark = 0;
    if (isset($_SESSION['mycart']) && (count($_SESSION['mycart']) > 0)) {
        foreach ($_SESSION['mycart'] as $cart) {         
            if ($cart[0] == $productId){
                $mark = 1;
                $sl+=$cart[5]; 
                $_SESSION['mycart'][$i][5] = $sl;
                break;
            }
            $i++;
        }
    }
    if ($mark == 0){
        array_push($_SESSION['mycart'], $arr_cart);
    }
    header("location: ../../view/user/index.php?act=logined&userId=$userId");
    include '../view/user/cart/cart.php';
}

?>