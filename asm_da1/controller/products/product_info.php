<?php
require_once "../../model/products/product_info.php";
$productId = $_GET['productId'];
$product_info = getProductInfo($productId);
include '../../view/user/products/product_info.php';
?>