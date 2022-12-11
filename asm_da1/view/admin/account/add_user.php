<div class="">
    <div class="px-[300px] pt-[40px]">
        <div class="py-[100px]">
            <div class="bg-[#6C5DD3] rounded-3xl grid grid-cols-5">
                <div class="p-[50px] col-span-2 flex flex-col space-y-[10px] items-start">
                    <h3 class="text-5xl font-semibold text-white">Add User
                    <p class="text-white">More User</p>
                    <button class="bg-white text-black px-[35px] py-[15px] rounded-2xl font-bold text-sm"> Check all
                        settings </button>
                </div>
                <div class="col-span-3 relative overflow-hidden pt-[50px]">
                    <div class="absolute pr-[30px]">
                        <img src="../../image/product-banner.png" alt="">
                    </div>
                </div>
            </div>
            <div class="container mx-auto">
    <div class="w-full mx-auto my-10 shadow-xl">
        <div class="text-red-500 text-center font-semibold">
            <?php if (isset($_GET['error'])) {
                echo "Tài khoản đã tồn tại, hãy chọn tên tài khoản khác !";
            } ?>
        </div>
        <form action="./index.php?act=add_user_admin" method="POST" enctype="multipart/form-data"
            class="w-full mx-10" onsubmit="return validate()">
            <div class="py-5 mx-auto">
                <label for="">Họ và tên</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5 outline-none border-purple-800" type="text" name="userFullname" placeholder="Fullname" id="name">
                <div id="errorName" class="text-red-500">
                </div>
            </div>
            <div class="py-5">
                <label for="">Tên đăng nhập</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5 outline-none border-purple-800" type="text" name="userName" placeholder="Username" id="username">
                <div id="errorusername" class="text-red-500">

                </div>
            </div>
            <div class="py-5">
                <label for="">Email</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5 outline-none border-purple-800" type="email" name="userEmail" placeholder="Email" id="email">
                <div id="erroremail" class="text-red-500">

                </div>
            </div>
            <div class="py-5">
                <label for="">Mật khẩu</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5 outline-none border-purple-800" type="password" placeholder="Password" name="userPassword"
                    id="pass">
                <div id="errorpass" class="text-red-500">

                </div>
            </div>
            <div class="py-5">
                <label for="">Nhập lại mật khẩu</label>
                <br>
                <input class="w-[435px] border rounded-full h-[30px] px-5 outline-none border-purple-800" type="password" placeholder="Confirm password" name="userRePassword"
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