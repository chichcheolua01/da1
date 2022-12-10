<?php
require_once "../../model/connect.php";
function getProductInfo($productId )
{
    $product_info = "SELECT * FROM products INNER JOIN categories on products.categoryId = categories.categoryId   WHERE productId = $productId";
    $product_info = getOne($product_info);
    $add_view_query = "UPDATE products SET productView = productView + 1 WHERE productId = $productId";
    connect($add_view_query);
    return $product_info;
}