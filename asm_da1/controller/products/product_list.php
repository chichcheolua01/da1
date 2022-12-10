<?php
    require_once "../../model/products/product_list.php";
    $categoryId = "";
    if (isset($_GET['categoryId'])) {
        $categoryId = $_GET['categoryId'];
        $list_products = getProductListCategoryId($categoryId);
    }
        $GenderId = "";
    if (isset($_GET['GenderId'])) {
        $GenderId = $_GET['GenderId'];
        $list_products = getProductListGender($GenderId);
    }
    if (isset($_GET['listPrice'])) {
    $listPrice = $_GET['listPrice'];
    $list_products = getProductListPrice($listPrice);
    }
    include '../../view/user/products/product_list.php';
?>