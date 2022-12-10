<?php
require_once "../../model/products/insert_product_admin.php";
require_once "../../model/account/account.php";
require_once "../../model/category/categories.php";
require_once "../../model/receipts/receipts.php";
$countPro = getAllProducts();
$countUser = getAllUser();
$countCategory = getCategories();
$countReceipts = getAllReceicpts();
include '../../view/admin/overview.php';
