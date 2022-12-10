<?php
require_once "../../model/account/update_email.php";
require_once "../../model/account/account.php";

if (isset($_POST['btnUpdate'])) {
    $userId = $_SESSION['userId'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];

    $getUser = getUser($userId);
    if ($password !== $getUser['userPassword']) {
        $error = "Xác nhận mật khẩu không chính xác";
    } else {
        updateEmail($email,$userId);
        header("Location:./index.php?act=account");
    }
}
include '../../view/user/account/update_email.php';
?>