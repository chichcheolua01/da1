<?php
session_start();
    $quantity = $_POST['quantity'];
$productId = $_POST['productId'];
    $i = 0;
    if (isset($_SESSION['mycart'])) {
    foreach ($_SESSION['mycart'] as $cart) {         
        if ($cart[0] == $productId){
            $_SESSION['mycart'][$i][5] = $quantity;
            break;
        }
        $i++;
    }

}
header("location: ../../view/user/index.php?act=logined");

