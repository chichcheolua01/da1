
<?php
require_once "../../model/connect.php";
function getCategories()
{
    $category_query = "SELECT * FROM categories";
    $categories = getAll($category_query);
    return $categories;
}
function getCategoryType()
{
    $query_type = "SELECT * FROM `category_types`";
    $type = getAll($query_type);
    return $type;
}
function getCategoryTypeId($idType)
{
    $query_type = "SELECT * FROM `category_types` WHERE categoryTypeId=$idType";
    $type = getOne($query_type);
    return $type;
}
function getCategoryId($cateId)
{
    $query = "SELECT * FROM categories WHERE categoryId = $cateId";
    $cate = getOne($query);
    return $cate;
}
