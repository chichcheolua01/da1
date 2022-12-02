<?php
include "../model/connect.php";
$id = $_GET['userId'];
echo $id;
$query = "DELETE FROM `users` WHERE `userId`='$id'";
connect($query);
header("Location:/da1/asm_da1/view/admin/index.php?act=accounts");
?>