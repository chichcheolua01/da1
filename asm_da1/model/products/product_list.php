<?php
require_once "../../model/connect.php";
function getProductListCategoryId($categoryId)
    {
        $sql = "SELECT * FROM products WHERE categoryId = $categoryId";
        $list_products = getAll($sql);
        return $list_products;
    }
function getProductListGender($GenderId){
        $list_gender_query = "SELECT * FROM products WHERE productGenderId = $GenderId";
        $list_products = getAll($list_gender_query);
        return $list_products;
}
function getProductListPrice($listPrice)
{

    switch ($listPrice) {
        case 'under2': {
                $list_price_query = "SELECT * FROM products WHERE productPrice <= 2000000";
                break;
            }
        case '2to5': {
                $list_price_query = "SELECT * FROM products WHERE productPrice > 2000000 AND productPrice <= 5000000";
                break;
            }
        case '5to10': {
                $list_price_query = "SELECT * FROM products WHERE productPrice > 5000000 AND productPrice <= 10000000";
                break;
            }
        case '10to20': {
                $list_price_query = "SELECT * FROM products WHERE productPrice > 10000000 AND productPrice <= 20000000";
                break;
            }
        case '20to50': {
                $list_price_query = "SELECT * FROM products WHERE productPrice > 20000000 AND productPrice <= 50000000";
                break;
            }
    }
    $list_products = getAll($list_price_query);
    return $list_products;
}