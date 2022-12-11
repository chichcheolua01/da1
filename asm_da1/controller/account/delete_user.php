<?php
require_once "../../model/account/delete_user.php";
require_once "../../model/receipts/receipts.php";
$userId = $_GET['userId'];
deleteReiUserId($userId);
deleteUser($userId);
header("Location:../../view/admin/index.php?act=accounts");
?>