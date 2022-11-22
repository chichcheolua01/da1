<?php
include '../model/connect.php';
if (isset($_POST['btn-signup'])) {
    $user_query = "SELECT * FROM users";
    $users = getAll($user_query);
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    $userRePassword = $_POST['userRePassword'];
    $userFullname = $_POST['userFullname'];
    $userEmail = $_POST['userEmail'];
    $userImage = $_FILES['userImage']['name'];
    $userAccess = 0;
    foreach ($users as $value) {
        if ($userName == $value['userName']) {
            $error = "Tài khoản đã tồn tại !";
            header("Location:/da1/asm_da1/view/user/index.php?act=signup&error=$error");
        } else {
            $query = "INSERT INTO users( `userName`, `userPassword`, `userEmail`, `userFullname`, `userAccess`, `userImage`) VALUES ('$userName','$userPassword','$userEmail','$userFullname','$userAccess','$userImage')";
            connect($query);
            move_uploaded_file($_FILES["userImage"]["tmp_name"], "../../image/" . $_FILES["userImage"]["name"]);
            header("Location: ../view/user/index.php?act=signin");

        }
    }
}

?>