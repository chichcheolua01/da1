<div>
<h1 class="text-2xl text-center mt-10">Thay đổi Email</h1>
    <div class="grid grid-cols-7">
    <div class="col-span-2">
            <?php include('./account/account_side_menu.php'); ?>
        </div>
    <div class="my-5 col-span-5">
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
    
</div>