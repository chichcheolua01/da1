<?php
include "../model/connect.php";
$id = $_GET['productId'];
echo $id;
$query = "DELETE FROM `products` WHERE `productId`='$id'";
connect($query);
header("Location:../view/admin/index.php?act=products");
?>