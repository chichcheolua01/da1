<?php
if (isset($_POST['submit'])) {
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    $error = "";
    if (!$userName || !$userPassword) {
        $error = "Nhập thiếu thông tin đăng nhập!";
    } else {
        $one_login = "SELECT * FROM users WHERE userName = '$userName'";
        $login_user = getOne($one_login);
        if (!isset($login_user['userName'])) {
            $error = "Tài khoản không tồn tại";
        } else {
            if ($userPassword != $login_user['userPassword']) {
                $error = "Mật khẩu không chính xác";
            } else {
                $_SESSION['userName'] = $login_user['userName'];
                $_SESSION['userAccess'] = $login_user['userAccess'];
                // header("http://localhost/da1/asm_da1/view/user/index.php?act=");
                echo "Đăng nhập thành công";
            }
        }
    }
}
?>
<div class="container mx-auto">
    <div class="w-[990px] mx-auto h-10 border-b-2 ">
        <div class="mx-auto w-[120px] text-center my-2 py-1 border-b-4 border-[#662d91] text-xl font-semibold">ĐĂNG NHẬP
        </div>
    </div>
    <div class="w-1/3 mx-auto my-10 text-center">
        Nếu bạn đã có tài khoản, hãy đăng nhập bằng tài khoản email hoặc số điện thoại.
    </div>
    <div class="w-1/3 mx-auto my-10 shadow-xl border">
        <form class="w-full mx-10" action="" method="POST">
            <div class="py-5">
                <label for="">Tên đăng nhập</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5" type="text" name="userName" id="">
            </div>
            <div class="py-5">
                <label for="">Mật khẩu</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5" type="password" name="userPassword" id="">
            </div>
            <div class="text-red-500">
                <?php
                if (isset($error)) {
                    echo $error;
                }
                ?>
            </div>
            <div class="py-5 mx-auto">
                <button name="submit" class="bg-[#662d91] text-white w-[200px] py-2 rounded-full">ĐĂNG NHẬP</button>
                <a class="ml-16 underline" href="">Bạn quên mật khẩu ?</a>
            </div>
        </form>
        <br>
        <hr class="w-1/2 mx-auto">
        <div class="text-center">
            <h1 class="font-medium text-[#662d91]">BẠN CHƯA CÓ TÀI KHOẢN</h1>
            <div class="p-5">
                <a class="underline" href="./index.php?act=signup">Tạo tài khoản</a> có nhiều lợi ích: thanh toán nhanh
                hơn, giữ nhiều hơn một địa chỉ, theo dõi đơn đặt hàng và hơn thế nữa.
            </div>
        </div>
    </div>
</div>