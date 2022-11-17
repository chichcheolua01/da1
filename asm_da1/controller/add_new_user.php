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
    $errorFullname = "";
    $errorUsername = "";
    $errorEmail = "";
    $errorPass = "";
    foreach ($users as $value) {
        if ($userName == $value['userName']) {
            $errorUsername = "Tài khoản đã tồn tại ";
        }
    }
    if ($userFullname === "") {
        $errorFullname = "Chưa nhập họ và tên";
    }
    if ($userName === "") {
        $errorUsername = "Chưa nhập tên tài khoản";
    }
    if ($userEmail === "") {
        $errorEmail = "Chưa nhập email";
    }
    if ($userPassword === "") {
        $errorPass = "Chưa nhập mật khẩu";
    }
    if ($userPassword != $userRePassword) {
        $errorPass = "Mật khẩu không trùng khớp";
    }
    if ($userName && $userPassword && $userRePassword && $userFullname && $userEmail != "") {
        $query = "INSERT INTO users( `userName`, `userPassword`, `userEmail`, `userFullname`, `userAccess`, `userImage`) VALUES ('$userName','$userPassword','$userEmail','$userFullname','$userAccess','$userImage')";
        connect($query);
        move_uploaded_file($_FILES["userImage"]["tmp_name"], "../../image/" . $_FILES["userImage"]["name"]);
        echo "Đăng ký thành công";
    }
}
?>