<?php
include "../model/connect.php";
$id = $_GET['receiptId'];
echo $id;
$query = "DELETE FROM `receipts` WHERE `receiptId`='$id'";
$sql = "DELETE FROM `cart` WHERE `receiptId`='$id'";
connect($query);
connect($sql);
header("location:../view/admin/index.php?act=receipts");
?>