<?php
require_once "../../model/connect.php";
function getProduct()
{
    $type = "";
    $item_query = "";
    if (isset($_GET['type'])) {
        $type = $_GET['type'];
        $item_query = "SELECT * FROM products WHERE productGenderId = $type";
    } else {
        $item_query = "SELECT * FROM products";
    }
    $products = getAll($item_query);
    return $products;
}

