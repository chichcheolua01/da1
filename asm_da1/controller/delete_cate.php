<?php
include "../model/connect.php";
$id = $_GET['categoryId'];
echo $id;
$query = "DELETE FROM `categories` WHERE `categoryId`='$id'";
connect($query);
header("Location:/da1/asm_da1/view/admin/index.php?act=categories");
?>