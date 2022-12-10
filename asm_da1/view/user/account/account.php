<div>
    <h1 class="text-2xl text-center">Thiết lập tài khoản</h1>
    <div class="my-5 grid grid-cols-4 gap-5 min-h-screen">
        <div class="col-span-1 bg-gray-100">
            <ul>
                <li id="liAcc1" class="py-3 px-5 hover:bg-white rounded-l-md my-2 ml-2"><a href="./index.php?act=account">Thông
                        tin tài khoản</a></li>
                <li id="liAcc2" class="py-3 px-5 hover:bg-white rounded-l-md my-2 ml-2"><a href="./index.php?act=update_email">Thay
                        đổi địa
                        chỉ email</a></li>
                <li id="liAcc3" class="py-3 px-5 hover:bg-white rounded-l-md my-2 ml-2"><a href="./index.php?act=update_password">Thay đổi mật
                        khẩu</a></li>
            </ul>
        </div>
        <div class="col-span-3 px-5">
            <div class="text-gray-500 font-semibold my-5">
                Họ và tên: <?php echo $user['userFullname'] ?></div>
            <div class="text-gray-500 font-semibold my-5">
                Tên đăng nhập:  <?php echo $user['userName'] ?>
            </div>
            <div class="text-gray-500 font-semibold my-5">
                Địa chỉ email: <?php echo $user['userEmail'] ?>
            </div>

        </div>
    </div>
</div>