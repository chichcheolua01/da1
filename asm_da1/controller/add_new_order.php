<?php
session_start();
include '../model/connect.php';
include 'order.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $userName = $_POST['userName'];
    $address = $_POST['address'];
    $phoneNumber = $_POST['phoneNumber'];
    $province = $_POST['province'];
    $district = $_POST['district'];
    $commune = $_POST['commune'];
    $dispatch_box = $_POST['dispatch_box'];
    $date = $_POST['date'];
    $note = $_POST['note'];
    $userId = $_POST['userId'];
    
    $orderId = taodonhang($email,$userName,$address,$phoneNumber,$province,$district,$commune,$dispatch_box,$date,$note,$userId);
    if (isset($_SESSION['mycart']) && (count($_SESSION['mycart']) > 0)) {
        foreach ($_SESSION['mycart'] as $cart) {
            addtocart($orderId,$cart[0], $cart[1], $cart[2], $cart[3], $cart[4]);
        }
        unset($_SESSION['mycart']);
    }
    header("location:../view/user/index.php?act=logined&userId=$userId");
}
?>