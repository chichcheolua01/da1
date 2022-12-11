<?php
ob_start();
session_start();
include '../../model/connect.php';

if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ')
    {
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
            include  '../../controller/products/product_info.php';
            break;
        case 'cart':
            include './products/cart.php';
            break;
        case 'payment':
            include  '../../controller/payment/add_new_order.php';
            break;
        case 'product_list':
            include  '../../controller/products/product_list.php';
            break;
        case 'signin':
            include  '../../controller/signin.php';
            break;
        case 'signup':
            include  '../../controller/account/add_new_user.php';
            break;
        case 'account':
            include  '../../controller/account/account.php';
            break;
        case 'update_email':
            include '../../controller/account/update_email.php';
            break;
        case 'update_password':
            include '../../controller/account/update_password.php';
            break;
        case 'receipts':
            include '../../controller/account/receipts.php';
            break;
        case 'admin':
            include './admin';
            break;
        case 'add':
            include './add.php';
            break;
        case 'logined':
            include '../../controller/content.php';
            break;
        default:
            include '../../controller/content.php';
            break;
    }
} else {
    include '../../controller/content.php';
}
include './cart/cart.php';
include './footer.php';
