<?php
    require_once "../../model/connect.php";
    function deleteProduct($id)
    {
        $query = "DELETE FROM `products` WHERE `productId`='$id'";
        connect($query);
    }