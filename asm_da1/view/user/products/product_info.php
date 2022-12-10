
<div class="p-10">
    <div class="flex space-x-10 items-center mb-10">
        <a href="./index.php">
            <h2 class="font-sans">Trang chủ </h2>
        </a> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
        <h2 class="">
            <?php echo $product_info["productName"] ?>
        </h2>
    </div>
    <div class="grid grid-cols-3">
        <div class="flex flex-col items-center space-y-10">
            <div>
                <img src="../../image/<?php echo $product_info["productImage"] ?>" alt="">
            </div>
            <div class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <p>
                    <?php echo $product_info['productView'] ?> lượt xem
                </p>
            </div>
        </div>
        <div class="">
            <h3 class="font-bold text-2xl">
                <?php echo $product_info["productName"] ?>
            </h3>
            <br>
            <hr class="border-b-1 border-gray-300">
            <div>
                <img src="../../image/<?php echo $product_info["categoryImage"] ?>" alt="">
                <div class="flex justify-center items-center">
                    <div
                        class="border border-t-0 border-b-0 border-l-[1px] border-r-[1px] border-gray-600 flex justify-center items-center space-x-2 px-5 text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <h4 class="text-lg font-medium">CÒN HÀNG</h4>
                    </div>
                    <img src="../../image/hotsale.png" class="h-[24px] w-auto px-5" alt="">
                </div>
            </div>
            <div class="flex p-10 text-xl space-x-3 items-center">
                <p class="text-red-800 font-bold">Giá KM </p>
                <div class="flex">
                    <p class="text-2xl text-red-800 font-bold">
                        <?php echo currency_format($product_info["productPrice"]) ?>
                    </p>
                </div>
                <p class="underline text-red-800 font-bold">đ</p>
                <p class="font-bold text-sm line-through my-1">
                <div class="flex justify-center">
                    <p class="text-xl line-through">
                        <?php echo currency_format($product_info["productPrice"]) ?>
                    </p>
                </div>
                </p>
            </div>
            <div class="flex flex-col space-y-10">
                <div class="flex space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-green-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                    </svg>
                    <h5 class="text-green-600 font-bold text-xl">CHƯƠNG TRÌNH ƯU ĐÃI</h5>
                </div>
                <div>
                    <div class="flex space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-green-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <p class="text-xl font-light">[Black Friday] Ưu đãi hấp dẫn 15% BST bán chạy nhất 2022</p>
                    </div>
                    <div class="flex space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-green-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <p class="text-xl font-light">[Black Friday] Ưu đãi 8% cho các sản phẩm nguyên giá</p>
                    </div>
                </div>
            </div>
            <form action="../../controller/cart/add_to_cart.php?" method="POST">
                <div class="mt-10 flex flex-col space-y-3">
                <input type="text" class="hidden" name="productId" value="<?php echo $id?>">
                <input type="text" class="hidden" name="userId" value="<?php echo $userId?>">
                <input type="text" class="hidden" name="productName" value="<?php echo $product_info["productName"] ?>">
                <input type="text" class="hidden" name="productPrice" value="<?php echo $product_info["productPrice"] ?>">
                <input type="text" class="hidden" name="productImage" value="<?php echo $product_info["productImage"] ?>">
                <label for="quantity">Số lượng</label>
                <input type="number" class="border p-2 w-[100px] rounded-lg text-center border-purple-800 " name="quantity" id="" value="1" min="1" >
                    <button class="w-full rounded-full bg-purple-800 text-white font-extrabold text-xl py-3"
                        type="submit"> MUA NGAY </button>
                    <div class="flex justify-between">
                        <div class="basis-[48%]">
                            <button
                                class="w-full rounded-full border border-purple-800 text-purple-800 font-light text-xl py-3">
                                MUA TRẢ GÓP 0% </button>
                        </div>
                        <div class="basis-[48%]">
                            <button
                                class="w-full rounded-full border border-purple-800 text-purple-800 font-light text-xl py-3">
                                THÊM VÀO GIỎ HÀNG </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="flex flex-col space-y-10 mt-10 ">
                <div class="flex space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-red-700">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                    </svg>
                    <h5 class="text-red-700 font-bold text-xl">CHƯƠNG TRÌNH ƯU ĐÃI</h5>
                </div>
                <div>
                    <div class="flex space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-red-700">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <p class="text-xl font-light">[Special Offer] Ưu đãi tới 12% khi thanh toán qua Vietcombank
                            Platinum, Vietcombank Signature </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="p-10">
            <div class="w-full rounded-3xl border-gray-300 border-2 py-5 px-2">
                <div class="flex justify-center">
                    <h5 class="font-bold text-xl text-red-700">TẠI SAO NÊN CHỌN GALLE</h5>
                </div>

                <div class="p-5 space-y-[20px]">
                    <div class="flex items-center space-x-[20px]">
                        <img src="../../image/why1.png" alt="">
                        <p class="font-bold text-sm">100% CHÍNH HÃNG TIÊU CHUẨN QUỐC TẾ</p>
                    </div>
                    <div class="flex items-center space-x-[20px]">
                        <img src="../../image/why2.png" alt="">
                        <p class="font-bold text-sm">GÓI BẢO DƯỠNG GALLE CARE</p>
                    </div>
                    <div class="flex items-center space-x-[20px]">
                        <img src="../../image/why3.png" alt="">
                        <p class="font-bold text-sm">TRUNG TÂM BẢO HÀNH ỦY QUYỀN</p>
                    </div>
                    <div class="flex items-center space-x-[20px]">
                        <img src="../../image/why4.png" alt="">
                        <p class="font-bold text-sm">MIỄN PHÍ THAY PIN TRỌN ĐỜI</p>
                    </div>
                    <div class="flex items-center space-x-[20px]">
                        <img src="../../image/why5.png" alt="">
                        <p class="font-bold text-sm">HỖ TRỢ TRẢ GÓP 0%</p>
                    </div>
                    <div class="flex items-center space-x-[20px]">
                        <img src="../../image/why6.png" alt="">
                        <p class="font-bold text-sm">100% FREESHIP</p>
                    </div>
                </div>
            </div>
            <div class="my-10">
                <div class="flex justify-between items-center">
                    <div class="basis-[48%]">
                        <button
                            class="w-full rounded-full border border-purple-800 py-3 flex justify-center space-x-[10px] items-center">
                            <p class="text-purple-800 font-light text-nm"> YÊU THÍCH </p> <img
                                src="../../image/wishlist.svg" alt="">
                        </button>
                    </div>
                    <div class="basis-[48%]">
                        <button
                            class="w-full rounded-full border border-purple-800 py-3 flex justify-center space-x-[10px] items-center">
                            <p class="text-purple-800 font-light text-nm"> SO SÁNH </p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-7 h-7 text-purple-800">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 4.5v15m6-15v15m-10.875 0h15.75c.621 0 1.125-.504 1.125-1.125V5.625c0-.621-.504-1.125-1.125-1.125H4.125C3.504 4.5 3 5.004 3 5.625v12.75c0 .621.504 1.125 1.125 1.125z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <hr class="border-b-1 border-gray-300">
            <div class="p-5">
                <div class="flex space-x-3 items-center pb-5">
                    <img src="../../image/hotline.png" class="w-5 h-auto" alt="">
                    <p class="text-lg font-medium">Để lại số điện thoại để nhận tư vấn</p>
                </div>
                <div>
                    <form action="" method="POST">
                        <div class="flex items-center justify-between mb-5">
                            <input type="text" name="phoneNumber"
                                class="p-3 border border-gray-300 rounded-full px-5 basis-[66%]"
                                placeholder="Số điện thoại khách hàng">
                            <button
                                class="bg-purple-800 text-white basis-30% p-3 px-8 rounded-full text-xl">GỬI</button>
                        </div>
                        <button class="w-full rounded-full border border-purple-800 py-3">
                            <div class="flex justify-center items-center space-x-3">

                                <p class="text-purple-800 font-nm text-xl">ĐẶT LỊCH</p> <svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-purple-800">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>

                            </div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr class="border-b-1 border-gray-300">
    <div class="mt-10 grid grid-cols-5 gap-10">
        <div class="col-span-5 grid">
            <div class="border border-b-4 border-t-0 border-r-0 border-l-0 p-5 border-purple-800 w-[30%]">
                <h2 class="text-2xl font-medium">MÔ TẢ SẢN PHẨM</h2>
            </div>
            <hr class="border-b-1 border-gray-300">
            <div class="mt-10">
                <p class="text-base font-light">
                    <?php echo $product_info['productDesc'] ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div id="bodylast" class="min-h-[100vh] absolute inset-y-0">
</div>
