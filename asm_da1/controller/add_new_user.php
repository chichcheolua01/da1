<?php
include '../model/connect.php';
if (isset($_POST['btn-signup'])) {
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    $userRePassword = $_POST['userRePassword'];
    $userFullname = $_POST['userFullname'];
    $userEmail = $_POST['userEmail'];
    $userImage = $_FILES['userImage']['name'];
    $userAccess = 0;
    $user_query = "SELECT `userName` FROM `users` WHERE `userName`='$userName'";
    if ($users = getAll($user_query) !== []) {
        $error = "Tài khoản đã tồn tại !";
        header("Location:/da1/asm_da1/view/user/index.php?act=signup&error=$error");
    }
    if ($users = getAll($user_query) === []) {
        $query = "INSERT INTO users( `userName`, `userPassword`, `userEmail`, `userFullname`, `userAccess`, `userImage`) VALUES ('$userName','$userPassword','$userEmail','$userFullname','$userAccess','$userImage')";
        connect($query);
        move_uploaded_file($_FILES["userImage"]["tmp_name"], "../../image/" . $_FILES["userImage"]["name"]);
        header("Location: ../view/user/index.php?act=signin");

    }

}

?>