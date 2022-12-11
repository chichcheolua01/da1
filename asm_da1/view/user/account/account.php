<div class="">
    <h1 class="text-2xl text-center mt-10">Thông tin tài khoản</h1>
    <div class="grid grid-cols-7">
        <div class="col-span-2">
            <?php include('./account/account_side_menu.php'); ?>
        </div>
        <div class="my-5 col-span-5">
            <div class="col-span-3 px-5">
                <div class="text-gray-500 font-semibold my-5">
                    Họ và tên: <?php echo $user['userFullname'] ?></div>
                <div class="text-gray-500 font-semibold my-5">
                    Tên đăng nhập: <?php echo $user['userName'] ?>
                </div>
                <div class="text-gray-500 font-semibold my-5">
                    Địa chỉ email: <?php echo $user['userEmail'] ?>
                </div>
            </div>
        </div>
    </div>
</div>