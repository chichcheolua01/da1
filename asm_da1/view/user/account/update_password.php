<?php
if (isset($_POST['btnUpdate'])) {
    $userId = $_SESSION['userId'];
    $password = $_POST['txtPassword'];
    $new_password = $_POST['txtNewPassword'];
    $re_password = $_POST['txtRePassword'];
    $query = "SELECT * FROM `users` WHERE userId=$userId";
    $getUser = getOne($query);

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
        $query_update = "UPDATE `users` SET `userPassword`='$new_password' WHERE userId=$userId";
        connect($query_update);
        header("Location:./index.php?act=account");
    }
}
?>
<div>
    <h1 class="text-2xl text-center">Thiết lập tài khoản</h1>
    <div class="my-5 grid grid-cols-4 gap-5 min-h-screen">
        <div class="col-span-1 bg-gray-100">
            <ul>
                <li id="liAcc1" class="py-3 px-5 hover:bg-white rounded-l-md my-2 ml-2"><a
                        href="./index.php?act=account">Thông
                        tin tài khoản</a></li>
                <li id="liAcc2" class="py-3 px-5 hover:bg-white rounded-l-md my-2 ml-2"><a
                        href="./index.php?act=update_email">Thay
                        đổi địa
                        chỉ email</a></li>
                <li id="liAcc3" class="py-3 px-5 hover:bg-white rounded-l-md my-2 ml-2"><a
                        href="./index.php?act=update_password">Thay đổi mật
                        khẩu</a></li>
            </ul>
        </div>
        <div class="col-span-3 px-5">
            <form action="" method="post">
                <div class="my-5">
                    <label for="">Mật khẩu cũ: </label>
                    <br>
                    <input class="w-1/2 border rounded-full h-[30px] px-5" type="password" name="txtPassword" id="">
                    <div class="text-red-500">
                        <?php
                        if (isset($error1)) {
                            echo $error1;
                        }
                        ?>
                    </div>
                </div>
                <div class="my-5">
                    <label for="">Mật khẩu mới</label>
                    <br>
                    <input class="w-1/2 border rounded-full h-[30px] px-5" type="password" name="txtNewPassword" id="">
                    <div class="text-red-500">
                        <?php
                        if (isset($error)) {
                            echo $error;
                        }
                        ?>
                    </div>
                </div>
                <div class="my-5">
                    <label for="">Xác nhận mật khẩu mới:</label>
                    <br>
                    <input class="w-1/2 border rounded-full h-[30px] px-5" type="password" name="txtRePassword" id="">
                    <div class="text-red-500">
                        <?php
                        if (isset($error2)) {
                            echo $error2;
                        }
                        ?>
                    </div>
                </div>
                <button name="btnUpdate" class="px-5 py-2 text-white bg-violet-700 rounded-md">
                    Cập nhật
                </button>
            </form>
        </div>
    </div>
</div>