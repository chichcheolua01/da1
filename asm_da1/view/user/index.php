<?php
ob_start();
session_start();
include '../../model/connect.php';
$product_query = "SELECT * FROM products";
$products = getAll($product_query);
$category_query = "SELECT * FROM categories";
$categories = getAll($category_query);
$user_query = "SELECT * FROM users";
$users = getAll($user_query);
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ') {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
include './header.php';
//controllers
if (isset($_GET['act'])) {

    $act = $_GET['act'];
    switch ($act) {
        case 'product_info':
            include './products/product_info.php';
            break;
        case 'cart':
            include './products/cart.php';
            break;
        case 'payment':
            include './products/payment.php';
            break;
        case 'product_list':
            include './products/product_list.php';
            break;
        case 'signin':
            include './signin.php';
            break;
        case 'signup':
            include './signup.php';
            break;
        case 'admin':
            include './admin';
            break;
        case 'add':
            include './add.php';
            break;
        case 'logined':
            include './content.php';
            break;
        default:
            include './content.php';
            break;
    }
} else {
    include './content.php';
}
include './cart.php';
include './footer.php';
?>