<?php
include "../model/connect.php";
$id = $_GET['cartId'];
$sql = "DELETE FROM `cart` WHERE `cartId`='$id'";
connect($sql);
header("location:../view/admin/index.php?act=overview");
?>