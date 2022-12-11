<?php
require_once "../../model/signup.php";
echo ('a');
if (isset($_POST['btn-signup'])) {
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    $userRePassword = $_POST['userRePassword'];
    $userFullname = $_POST['userFullname'];
    $userEmail = $_POST['userEmail'];
    $userImage = $_FILES['userImage']['name'];
    $userAccess = 0;
    include '../../view/admin/account/accounts.php';

    if ($users = getOneUser($userName) !== []) {
        $error = "Tài khoản đã tồn tại !";
        header("Location:../../admin/index.php?act=add_user_admin&error=$error");
    }
    if ($users = getOneUser($userName) === []) {
        addUser($userName, $userPassword, $userEmail, $userFullname, $userAccess, $userImage);
        move_uploaded_file($_FILES["userImage"]["tmp_name"], "../../image/" . $_FILES["userImage"]["name"]);
        header("Location: ../../view/admin/index.php?act=accounts");
    }
}
include("../../view/admin/account/add_user.php");

?>