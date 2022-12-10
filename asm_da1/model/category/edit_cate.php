
<?php
require_once "../../model/connect.php";
function editCateNoImg($name, $type, $idcate)
{
    $query = "UPDATE `categories` SET `categoryName`='$name',`categoryTypeId`='$type' WHERE `categoryId`='$idcate'";
    connect($query);
}
function editCate($name, $imageCate, $type, $idcate){
    $query = "UPDATE `categories` SET `categoryName`='$name',`categoryImage`='$imageCate',`categoryTypeId`='$type' WHERE `categoryId`='$idcate'";
    connect($query);
}