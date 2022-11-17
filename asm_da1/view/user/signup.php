<?php
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
<div class="container mx-auto">
    <div class="w-[990px] mx-auto h-10 border-b-2 ">
        <div class="mx-auto w-[90px] text-center my-2 py-1 border-b-4 border-[#662d91] text-xl font-semibold">ĐĂNG KÝ
        </div>
    </div>
    <div class="w-1/3 mx-auto my-10 shadow-xl">
        <form action="" method="POST" name="signup-form" enctype="multipart/form-data" class="w-full mx-10">
            <div class="py-5">
                <label for="">Họ và tên</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5" type="text" name="userFullname" id="">
                <div class="text-red-500">
                    <?php if (isset($errorFullname)) {
                        echo $errorFullname;
                    } ?>
                </div>
            </div>
            <div class="py-5">
                <label for="">Tên đăng nhập</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5" type="text" name="userName" id="">
                <div class="text-red-500">
                    <?php if (isset($errorUsername)) {
                        echo $errorUsername;
                    } ?>
                </div>
            </div>
            <div class="py-5">
                <label for="">Email</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5" type="text" name="userEmail" id="">
                <div class="text-red-500">
                    <?php if (isset($errorEmail)) {
                        echo $errorEmail;
                    } ?>
                </div>
            </div>
            <div class="py-5">
                <label for="">Mật khẩu</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5" type="password" name="userPassword" id="">
                <div class="text-red-500">
                    <?php if (isset($errorPass)) {
                        echo $errorPass;
                    } ?>
                </div>
            </div>
            <div class="py-5">
                <label for="">Nhập lại mật khẩu</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5" type="password" name="userRePassword" id="">
                <div class="text-red-500">
                    <?php if (isset($errorPass)) {
                        echo $errorPass;
                    } ?>
                </div>
            </div>
            <div class="py-5">
                <label for="">Ảnh đại diện</label>
                <br>
                <div class="flex flex-col items-center space-y-10">
                    <input id="imageFile" type="file" name="userImage" onchange="chooseFile(this)">
                    <img src="" alt="" id="image" class="w-[200px] h-auto  rounded-lg">
                </div>
            </div>
            <div class="py-5 mx-auto">
                <button type="submit" name="btn-signup"
                    class="bg-[#662d91] text-white mx-32 w-[200px] py-2 rounded-full">TẠO TÀI
                    KHOẢN</button>
            </div>
        </form>
    </div>
</div>