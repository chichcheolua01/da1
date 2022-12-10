<?php
require_once "../../model/account/update_password.php";
require_once "../../model/account/account.php";
if (isset($_POST['btnUpdate'])) {
    $userId = $_SESSION['userId'];
    $password = $_POST['txtPassword'];
    $new_password = $_POST['txtNewPassword'];
    $re_password = $_POST['txtRePassword'];

    $getUser = getUser($userId);

    if ($password !== $getUser['userPassword']) {
        $error1 = "Mật khẩu không chính xác";
    }
    if ($re_password === "") {
        $error2 = "Chưa nhập mật khẩu";
    }
    if ($new_password !== $re_password) {
        $error2 = "Xác nhận mật khẩu không chính xác";
    }
    if ($new_password === "") {
        $error = "Chưa nhập mật khẩu mới";
    }
    if ($new_password === $re_password && $password === $getUser['userPassword']) {
        updatePassword($new_password, $userId);
        header("Location:./index.php?act=account");
    }
}
include '../../view/user/account/update_password.php';
