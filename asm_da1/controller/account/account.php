<?php
require_once "../../model/account/account.php";
if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
    $user = getUser($userId);
}
include '../../view/user/account/account.php';
?>