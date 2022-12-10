<?php
require_once "../../model/connect.php";
function getAllProducts()
{
    $product_query = "SELECT * FROM products JOIN product_gender on products.productGenderId = product_gender.productGenderId;";
    $products = getAll($product_query);
    return $products;
}
function getProductCateId($categoryId)
{
    $category_query = "SELECT * FROM categories WHERE categoryId = $categoryId";
    $category = getOne($category_query);
    return $category;
}

function getProductGender($productGenderId)
{
    $product_gender_query = "SELECT * FROM product_gender WHERE productGenderId = $productGenderId";
    $gender = getOne($product_gender_query);
    return $gender;
}
function getProductId($id)
{
    $query = "SELECT * FROM products WHERE productId = $id";
    $product = getOne($query);
    return $product;
}
function getAllProGender()
{
    $gender_query = "SELECT * FROM product_gender";
    $gender = getAll($gender_query);
    return $gender;
}
function getAllProCate()
{
    $category_query = "SELECT * FROM categories";
    $categories = getAll($category_query);
    return $categories;
}
function getAllProType()
{
    $catetype_query = "SELECT * FROM `category_types`";
    $categories_type = getAll($catetype_query);
    return $categories_type;
}
