<?php
require_once "../../model/connect.php";
function editProductNoImg($name, $price, $desc, $cate, $gender, $id)
{
    $query = "UPDATE `products` SET `productName`='$name',`productPrice`='$price',`productDesc`='$desc',`categoryId`='$cate',`productGenderId`='$gender' WHERE `productId`='$id'";
    connect($query);
}
function editProduct($name, $image, $price, $desc, $cate, $gender, $id){
    $query = "UPDATE `products` SET `productName`='$name',`productImage`='$image',`productPrice`='$price',`productDesc`='$desc',`categoryId`='$cate',`productGenderId`='$gender' WHERE `productId`='$id'";
    connect($query);
}