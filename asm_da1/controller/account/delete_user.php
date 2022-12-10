<?php
require_once "../../model/account/delete_user.php";
$userId = $_GET['userId'];
deleteUser($userId);
header("Location:../../view/admin/index.php?act=accounts");
?>