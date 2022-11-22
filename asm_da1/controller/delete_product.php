<?php
include "../model/connect.php";
$id = $_GET['productId'];
echo $id;
$query = "DELETE FROM `products` WHERE `productId`='$id'";
connect($query);
header("Location:/da1/asm_da1/view/admin/index.php?act=products");
?>