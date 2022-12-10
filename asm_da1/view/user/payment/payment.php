<?php
    if(!isset($_SESSION['userId']))
{
    header("Location: ./index.php?act=logined&userId=".$_SESSION['userId']);
}
else 
{
    
}
?>
<div class="container mx-auto">
    <h2
        class="text-xl tracking-widest text-gray-800 font-bold p-2 underline underline-offset-[12px] decoration-2 decoration-purple-800 text-center">
        THANH TOÁN</h2>
    <div class="grid grid-cols-3 grid-flow-row-dense gap-4 border-t-2 my-3">
        <!-- Box right -->
        <div class="col-span-2 border shadow-[0px_0px_5px_1px_rgba(0,0,0,0.2)] mt-8 p-5">
            <form action="./index.php?act=payment" method="POST" onsubmit="return validate()" enctype="multipart/form-data">
                <div class="mt-5">
                    <label for="email"><span class="font-sans">Địa chỉ email</span></label>
                    <div>
                        <input type="text" name="email" class="email border border-gray-300 px-10 py-1 rounded-2xl  my-2">
                    </div>
                </div>
                <!-- 2 row -->
                <div class="grid grid-cols-2 gap-y-4 border-b-2 pb-3">
                    <div>
                        <label for="userName"><span class="font-sans">Tên</span></label> <br>
                        <input type="text" name="userName" class="username border border-gray-300 px-14 py-1 rounded-2xl  my-2">
                    </div>
                    <div>
                        <label for="address"><span class="font-sans">Địa chỉ đường</span></label>
                        <div>
                            <input type="text" name="address" class="address border border-gray-300 px-14 py-1 rounded-2xl  my-2">
                        </div>
                    </div>
                    <div>
                        <label for="phoneNumber"><span class="font-sans">Số điện thoại</span></label>
                        <div>
                            <input type="text" name="phoneNumber" class="phoneNumber border border-gray-300 px-14 py-1 rounded-2xl  my-2">
                        </div>
                    </div>
                    <div>
                        <label for="province"><span class="font-sans">Tỉnh/Thành phố</span></label>
                        <div>
                            <input type="text" name="province" class="province border border-gray-300 px-14 py-1 rounded-2xl  my-2">
                        </div>
                    </div>
                    <div>
                        <label for="district"><span class="font-sans">Quận/huyện</span></label>
                        <div>
                            <input type="text" name="district" class="district border border-gray-300 px-14 py-1 rounded-2xl  my-2">
                        </div>
                    </div>
                    <div>
                        <label for="commune"><span class="font-sans">Phường/xã</span></label>
                        <div>
                            <input type="text" name="commune" class="commune border border-gray-300 px-14 py-1 rounded-2xl  my-2">
                        </div>
                    </div>
                </div>
                <!-- 2 row end -->
                <!-- dow 2  -->
                <div class="flex items-center space-x-2 mt-5 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-purple-800">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                    </svg>
                    <span class="font-bold">Phương thức vận chuyển</span>
                </div>
                <div class="space-x-5">
                    <input class="px-5 my-3 py-1 border rounded-3xl text-gray-500 hover:shadow-[0px_0px_5px_1px_rgba(0,0,0,0.56)]" value="Nhận tại cửa hàng" type="button"  onclick="choose_delivery_place(this)"></input>
                    <input
                        class="px-5 my-3 py-1 border rounded-3xl text-gray-500 hover:shadow-[0px_0px_5px_1px_rgba(0,0,0,0.56)]"
                        value="Giao hàng tận nơi" type="button" onclick="choose_delivery_place(this)"></input>
                </div>
                <!--  -->
                <input type="text" class="hidden" name="dispatch_box" id="delivery_place"></input>
                <!--  -->
                <div>
                    <label for="date">Ngày giao hàng</label> <br>
                    <input type="date" name="date" class="px-5 my-3 py-1 border rounded-3xl" value="">
                </div>
                <div>
                    <label for="note">Lưu ý khi nhận hàng</label> <br>
                    <textarea name="note" class="border border-gray-300 rounded-3xl p-2 mt-2" cols="80"
                        rows="4"></textarea>
                </div>
                <!-- dow 2 end -->


        </div>
        <!-- Box right end -->
        <!-- Box left -->
        <div class="relative shadow-[0px_0px_5px_1px_rgba(0,0,0,0.2)] mt-8 p-5 ">
            <div class="grid grid-rows-3">

                <?php
                $i = 0;
                if (isset($_SESSION['mycart'])) {
                    foreach ($_SESSION['mycart'] as $cart) {                    
                        echo '
                        <div class="flex gap-x-1 justify-between my-2">
                        <img src="../../image/' . $cart[4] . ' " alt="" class="w-[75px]">
                        <div class="">
                            <p class="text-xs">' . $cart[2] . '</p>
                            <div class="border w-[100px] flex items-center justify-center rounded-2xl mt-4 py-1 space-x-4">
                                <span>-</span>
                                <span>'.$cart[5].'</span>
                                <span>+</span>
                            </div>
    
                        </div>
                        <div class="flex items-start justify-start">
                        <span class="mr-2 text-xs"> ' . currency_format($cart[3]) . '</span>
                        <a onclick="dl_pro_pay('.$i.'); ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-purple-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                        </div>
                    </div>';
                        $i++;
                    }
                    
            } else {
                echo "";
            } ?>
            <input type="hidden" name="userId" value="<?php echo $userId ?>">
            <div class="">
                <div class="flex justify-between items-center border-t-2 mt-2">
                    <p>Tổng thanh toán</p>
                    <p>                        
                        <?php
                        $total = 0;
                        if (isset($_SESSION['mycart']) ){
                            foreach ($_SESSION['mycart'] as $cart) {
                                $total += $cart[3];
                            }
                        }
                        ?>
                        <?php echo currency_format($total) ?></p>
                </div>
                <button name="submit" class="bg-purple-800 text-white py-1 px-8 rounded-3xl my-4">ĐẶT HÀNG</button>
            </div>
        </div>
        </form>
        <!-- Box left end -->
    </div>
</div>
