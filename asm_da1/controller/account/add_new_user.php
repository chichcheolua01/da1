<?php
require_once "../../model/signup.php";
if (isset($_POST['btn-signup'])) {
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    $userRePassword = $_POST['userRePassword'];
    $userFullname = $_POST['userFullname'];
    $userEmail = $_POST['userEmail'];
    $userImage = $_FILES['userImage']['name'];
    $userAccess = 0;

    if ($users = getOneUser($userName) !== []) {
        $error = "Tài khoản đã tồn tại !";
        header("Location:../user/index.php?act=signup&error=$error");
    }
    if ($users = getOneUser($userName) === []) {
        addUser($userName, $userPassword, $userEmail, $userFullname, $userAccess, $userImage);
        move_uploaded_file($_FILES["userImage"]["tmp_name"], "../../image/" . $_FILES["userImage"]["name"]);
        header("Location: ../user/index.php?act=signin");
    }
}
include("../../view/user/signup.php");

?>