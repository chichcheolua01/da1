<?php
    require_once "../../model/account/account.php";
    $users = getAllUser();
    include '../../view/admin/account/accounts.php';
?>