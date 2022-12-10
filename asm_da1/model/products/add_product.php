<?php
    require_once "../../model/connect.php";
    function addProduct($name, $image, $price, $desc, $view, $cate, $gender)
    {
        $query = "INSERT INTO `products`(`productName`, `productImage`, `productPrice`, `productDesc`, `productView`, `categoryId`, `productGenderId`) VALUES ('$name','$image','$price','$desc','$view','$cate','$gender')";
        connect($query);
    }