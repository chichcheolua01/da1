<!-- Cart -->
<div id="shoppingcart" class="block top-0 r-0 w-[500px] min-h-[100vh] fixed inset-y-0 right-[100%] bg-white overflow-y-scroll overflow-x-hidden shadow-[0px_0px_5px_1px_rgba(0,0,0,0.2)] ">
    <div class="w-[500px]  justify-items-end ">
        <div class="w-[500px] mx-auto h-10 border-b-2 flex">
            <div class="mx-auto w-[90px] text-center border-b-4 border-[#662d91] text-xl font-semibold">Giỏ hàng</div>
            <button id="closeCart" class="mr-14">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
        <div class="w-[500px] mx-auto grid box-border min-h-[510px] place-items-end ">
            <div class="grid grid-rows-3 gap-y-3">
                <?php
                $i = 0;
                if (isset($_SESSION['mycart'])) {
                    foreach ($_SESSION['mycart'] as $cart) {
                        echo '
                        <div class="grid grid-cols-4 justify-items-center gap-3 border-b-2 p-1 m-2 ">
                            <div>
                                <img src="../../image/' . $cart[4] . ' " alt="">
                            </div>
                            <div class="col-span-2">
                                <h1 class="font-semibold">' . $cart[2] . '</h1>
                                <div class="my-5 flex">
                                    <form action="../../controller/cart/quantity.php" method="POST">
                                    <div class="flex">
                                        <label for="quantity">Số lượng:</label>
                                        <input type="number" class="w-[70px] px-2 border" name="quantity" id="" value="' . $cart[5] . '" min="1" >
                                        <input type="text" class="hidden" name="productId" value="' . $cart[0] . '">
                                        <button class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                    </button>
                                    </div>
                                  </form>

                                </div> 
                                <div class=""> ' . currency_format($cart[3]) . '</div>
                            </div>
                            <div class="">
                                <a  onclick="redirect(' . $i . '); " >
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                                </a>
                            </div>
                        </div>
                        ';
                        $i++;
                    }
                } else {
                    echo "";
                } ?>
            </div>
        </div>
        <div class="bg-gray-100 w-full justify-items-end sticky bottom-0">
            <div class="flex justify-between px-10 py-5">
                <div class="font-semibold">Tổng tiền hàng</div>
                <div class="font-semibold">
                    <?php
                    $total = 0;
                    if (isset($_SESSION['mycart'])) {
                        foreach ($_SESSION['mycart'] as $cart) {
                            $total += ($cart[3] * $cart[5]);
                        }
                    }
                    ?>
                    <?php echo currency_format($total) ?? ('0') ?>
                </div>
            </div>
            <div class="px-10 py-5">
                <?php if (isset($_SESSION['userId'])) {
                    echo '
                    <a href="../user/index.php?act=payment&userId='.$_SESSION['userId'].'">
                        <button class="bg-[#662d91] hover:bg-[#662d99] text-white font-semibold w-full rounded-full py-2 my-1">Mua ngay</button>
                    </a>
                    ';
                }
                ?>
                <button class=" text-[#662d91] border border-[#662d91] font-semibold w-full rounded-full py-2">Tiếp tục mua sắm</button>
            </div>

        </div>
    </div>
</div>