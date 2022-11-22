<?php

?>
<div class="container mx-auto">
    <div class="w-[990px] mx-auto h-10 border-b-2 ">
        <div class="mx-auto w-[90px] text-center my-2 py-1 border-b-4 border-[#662d91] text-xl font-semibold">ĐĂNG KÝ
        </div>
    </div>
    <div class="w-1/3 mx-auto my-10 shadow-xl">
        <div class="text-red-500 text-center font-semibold">
            <?php if (isset($_GET['error'])) {
                echo "Tài khoản đã tồn tại, hãy chọn tên tài khoản khác !";
            } ?>
        </div>
        <form action="../../controller/add_new_user.php" method="POST" enctype="multipart/form-data"
            class="w-full mx-10" onsubmit="return validate()">
            <div class="py-5">
                <label for="">Họ và tên</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5" type="text" name="userFullname" id="name">
                <div id="errorName" class="text-red-500">
                </div>
            </div>
            <div class="py-5">
                <label for="">Tên đăng nhập</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5" type="text" name="userName" id="username">
                <div id="errorusername" class="text-red-500">

                </div>
            </div>
            <div class="py-5">
                <label for="">Email</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5" type="email" name="userEmail" id="email">
                <div id="erroremail" class="text-red-500">

                </div>
            </div>
            <div class="py-5">
                <label for="">Mật khẩu</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5" type="password" name="userPassword"
                    id="pass">
                <div id="errorpass" class="text-red-500">

                </div>
            </div>
            <div class="py-5">
                <label for="">Nhập lại mật khẩu</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5" type="password" name="userRePassword"
                    id="repass">
                <div id="errorrepass" class="text-red-500">
                </div>
            </div>
            <div class="py-5">
                <label for="">Ảnh đại diện</label>
                <br>
                <div id="error_name" class="flex flex-col items-center space-y-10">
                    <input id="imageFile" type="file" name="userImage" onchange="chooseFile(this)">
                    <img src="" alt="" id="image" class="w-[200px] h-auto  rounded-lg">
                </div>
                <div id="errorImg" class="text-red-500">
                </div>
                <div class="py-5 mx-auto">
                    <button type="submit" name="btn-signup"
                        class="bg-[#662d91] text-white mx-32 w-[200px] py-2 rounded-full">TẠO TÀI
                        KHOẢN</button>
                </div>
        </form>
    </div>
</div>
<script src="../../main/validate.js"></script>