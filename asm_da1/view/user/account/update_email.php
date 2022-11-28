<?php
if (isset($_POST['btnUpdate'])) {
    $userId = $_SESSION['userId'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];
    $query = "SELECT * FROM `users` WHERE userId=$userId";
    $getUser = getOne($query);
    if ($password !== $getUser['userPassword']) {
        $error = "Xác nhận mật khẩu không chính xác";
    } else {
        $query_update = "UPDATE `users` SET `userEmail`='$email' WHERE userId=$userId";
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
                    <label for="">Email mới: </label>
                    <br>
                    <input class="w-1/2 border rounded-full h-[30px] px-5" type="text" name="txtEmail" id="">
                </div>
                <div class="my-5">
                    <label for="">Mật khẩu</label>
                    <br>
                    <input class="w-1/2 border rounded-full h-[30px] px-5" type="password" name="txtPassword" id="">
                    <div class="text-red-500">
                        <?php
                        if (isset($error)) {
                            echo $error;
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