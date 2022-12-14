
<div class="container mx-auto">
    <div class="w-[990px] mx-auto h-10 border-b-2 ">
        <div class="mx-auto w-[120px] text-center my-2 py-1 border-b-4 border-[#662d91] text-xl font-semibold">ĐĂNG NHẬP
        </div>
    </div>
    <div class="w-1/3 mx-auto my-10 text-center">
        Nếu bạn đã có tài khoản, hãy đăng nhập bằng tài khoản email hoặc số điện thoại.
    </div>
    <div class="w-1/3 mx-auto my-10 shadow-xl border">
        <form class="w-full px-[50px]" action="../user/index.php?act=signin" method="POST">
            <div class="py-5">
                <label for="">Tên đăng nhập</label>
                <br>
                <input class="w-full border border-gray-500 rounded-full h-[30px] px-5 outline-none" type="text" name="userName" placeholder="Username" id="">
            </div>
            <div class="py-5">
                <label for="">Mật khẩu</label>
                <br>
                <input class="w-full border border-gray-500 outline-none rounded-full h-[30px] px-5" type="password" name="userPassword" placeholder="Password" id="">
            </div>
            <div class="text-red-500">
                <?php
                if (isset($error)) {
                    echo $error;
                }
                ?>
            </div>
            <div class="py-5 flex justify-center">
                <button name="submit" class="bg-[#662d91] text-white w-[200px] py-2 rounded-full">ĐĂNG NHẬP</button>
            </div>
            <div class="flex justify-center">
                <a class="underline" href="">Bạn quên mật khẩu ?</a>
            </div>

        </form>
        <br>
        <div class="text-center">
            <a class="" href="./index.php?act=signup">
                <h1 class="font-medium text-[#662d91] decoration-none">BẠN CHƯA CÓ TÀI KHOẢN?</h1>
            </a>
            <div class="p-5">
                <a class="underline" href="./index.php?act=signup">Tạo tài khoản</a> có nhiều lợi ích: thanh toán nhanh
                hơn, giữ nhiều hơn một địa chỉ, theo dõi đơn đặt hàng và hơn thế nữa.
            </div>
        </div>
    </div>
</div>