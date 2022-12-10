<?php
require_once "../../model/signin.php";
if (isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    $error = "";
    if (!$userName || !$userPassword) {
        $error = "Nhập thiếu thông tin đăng nhập!";
    } else {
        $login_user = getUserName($userName);
        if (!isset($login_user['userName'])) {
            $error = "Tài khoản không tồn tại";
        } else {
            if ($userPassword != $login_user['userPassword']) {
                $error = "Mật khẩu không chính xác";
            } else {
                $_SESSION['userName'] = $login_user['userName'];
                $_SESSION['userId'] = $login_user['userId'];
                $_SESSION['userAccess'] = $login_user['userAccess'];
                if ($login_user['userAccess'] == 1) {
                    header("Location: ../admin/index.php?act=logined&userId=" . $_SESSION['userId']);

                } else {
                    header("Location: ../user/index.php?act=logined&userId=" . $_SESSION['userId']);
                }
            }
        }
    }
}
include("../../view/user/signin.php");
?>