
<div id="bodylast" class="min-h-[100vh] absolute inset-y-0">
</div>
<!-- Cart -->
<div id="shoppingcart" class="block top-0 r-0 w-[500px] min-h-[100vh] absolute inset-y-0 right-[100%] bg-white">
    <div class="w-[500px] justify-items-end">
        <div class="w-[500px] mx-auto h-10 border-b-2 flex">
            <div class="mx-auto w-[90px] text-center border-b-4 border-[#662d91] text-xl font-semibold">Giỏ hàng</div>
            <button id="closeCart">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
        <div class="w-[500px] mx-auto grid place-items-end">
            <div class="min-h-[695px]">
                <?php
                $i = 0;
                if (isset($_SESSION['mycart'])) {
                    foreach ($_SESSION['mycart'] as $cart) {

                        echo '
                        <div class="grid grid-cols-4 justify-items-end gap-3 border-b-2 p-1 m-2">
                            <div>
                                <img src="../../image/' . $cart[4] . ' " alt="">
                            </div>
                            <div class="col-span-2">
                                <h1 class="font-semibold">' . $cart[2] . '</h1>
                                <div class="my-5 flex">
                                    Số lượng:
                                    <div class="grid grid-cols-3 rounded-full border w-1/2 justify-items-center mx-5">
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                            </svg>
                                        </button>
                                        1
                                        <button>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                            </svg>
                                        </button>
                                    </div>
                                </div> 
                                <div class=""> ' . currency_format($cart[3]) . '</div>
                            </div>
                            <div class="">
                                <a href="../../controller/delete_cart.php?cartId='.$i.'&userId='.$cart[1].'">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                                </a>
                            </div>
                        </div>
                        ';
                    }
                } else {
                    echo "";
                } ?>
            </div>
            <div class="bg-gray-100 w-full">
                <div class="flex justify-between px-10 py-5">
                    <div class="font-semibold">Tổng tiền hàng</div>
                    <div class="font-semibold">
                        <?php
                        $total = 0;
                        if (isset($_SESSION['mycart']) ){
                            foreach ($_SESSION['mycart'] as $cart) {
                                $total += $cart[3];
                            }
                        }

                        ?>
                        <?php echo currency_format($total) ?>
                    </div>
                </div>
                <div class="px-10 py-5">
                    <a href="../user/index.php?act=payment">
                    <button class="bg-[#662d91] hover:bg-[#662d99] text-white font-semibold w-full rounded-full py-2 my-1">Mua
                        ngay</button></a>
                    <button class=" text-[#662d91] border border-[#662d91] font-semibold w-full rounded-full py-2">Tiếp
                        tục mua sắm</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>