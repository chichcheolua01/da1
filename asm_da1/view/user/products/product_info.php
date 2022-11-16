<?php
$id = $_GET['id'];
$one_item_query = "SELECT * FROM products WHERE productId = $id";
$item = getOne($one_item_query);
$categoryId = $item['categoryId'];
$one_category_query = "SELECT * FROM categories WHERE categoryId = $categoryId";
$item_category = getOne($one_category_query);
?>
<div class="p-10">
    <div class="flex space-x-10 items-center mb-10">
        <a href="./index.php">
            <h2 class="font-sans">Trang chủ </h2>
        </a> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
        <h2 class=""><?php echo $item["productName"] ?></h2>
    </div>
    <div class="grid grid-cols-3">
        <div class="flex flex-col items-center space-y-10">
            <div>
                <img src="../../image/<?php echo $item["productImage"] ?>" alt="">
            </div>
            <div class="flex space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <p><?php echo $item['productView'] ?> lượt xem </p>
            </div>
        </div>
        <div class="">
            <h3 class="font-bold text-2xl">
                <?php echo $item["productName"] ?>
            </h3>
            <br>
            <hr class="border-b-1 border-gray-300">
            <div>
                <img src="../../image/<?php echo $item_category["categoryImage"] ?>" alt="">
                <div class="flex justify-center items-center">
                    <div class="border border-t-0 border-b-0 border-l-[1px] border-r-[1px] border-gray-600 flex justify-center items-center space-x-2 px-5 text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
                    <p class="text-2xl text-red-800 font-bold"> <?php echo substr($item["productPrice"], 0, -6)   ?>
                    <p class="text-2xl text-red-800 font-bold">.<?php echo substr($item["productPrice"], -6, 3)   ?>
                    <p class="text-2xl text-red-800 font-bold">.<?php echo substr($item["productPrice"], -3, 3)   ?>
                </div>
                <p class="underline text-red-800 font-bold">đ</p>
                <p class="font-bold text-sm line-through my-1">
                <div class="flex justify-center">
                    <p class="text-xl line-through"> <?php echo substr($item["productPrice"], 0, -6)   ?>
                    <p class="text-xl line-through">.<?php echo substr($item["productPrice"], -6, 3)   ?>
                    <p class="text-xl line-through">.<?php echo substr($item["productPrice"], -3, 3)   ?>
                    <p class="underline">đ</p>
                </div>
                </p>
            </div>
            <div class="flex flex-col space-y-10">
                <div class="flex space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                    </svg>
                    <h5 class="text-green-600 font-bold text-xl">CHƯƠNG TRÌNH ƯU ĐÃI</h5>
                </div>
                <div>
                    <div class="flex space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <p class="text-xl font-light">[Black Friday] Ưu đãi hấp dẫn 15% BST bán chạy nhất 2022</p>
                    </div>
                    <div class="flex space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-600">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <p class="text-xl font-light">[Black Friday] Ưu đãi 8% cho các sản phẩm nguyên giá</p>
                    </div>

                </div>
            </div>
            <div class="mt-10 flex flex-col space-y-3">
                <button class="w-full rounded-full bg-purple-800 text-white font-extrabold text-xl py-3"> MUA NGAY </button>
                <div class="flex justify-between">
                    <div class="basis-[48%]">
                        <button class="w-full rounded-full border border-purple-800 text-purple-800 font-light text-xl py-3"> MUA TRẢ GÓP 0% </button>
                    </div>
                    <div class="basis-[48%]">
                        <button class="w-full rounded-full border border-purple-800 text-purple-800 font-light text-xl py-3"> THÊM VÀO GIỎ HÀNG </button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col space-y-10 mt-10 ">
                <div class="flex space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-700">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                    </svg>
                    <h5 class="text-red-700 font-bold text-xl">CHƯƠNG TRÌNH ƯU ĐÃI</h5>
                </div>
                <div>
                    <div class="flex space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-700">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <p class="text-xl font-light">[Special Offer] Ưu đãi tới 12% khi thanh toán qua Vietcombank Platinum, Vietcombank Signature </p>
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
                        <button class="w-full rounded-full border border-purple-800 py-3 flex justify-center space-x-[10px] items-center">
                            <p class="text-purple-800 font-light text-nm"> YÊU THÍCH </p> <img src="../../image/wishlist.svg" alt="">
                        </button>
                    </div>
                    <div class="basis-[48%]">
                        <button class="w-full rounded-full border border-purple-800 py-3 flex justify-center space-x-[10px] items-center">
                            <p class="text-purple-800 font-light text-nm"> SO SÁNH </p>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-purple-800">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 4.5v15m6-15v15m-10.875 0h15.75c.621 0 1.125-.504 1.125-1.125V5.625c0-.621-.504-1.125-1.125-1.125H4.125C3.504 4.5 3 5.004 3 5.625v12.75c0 .621.504 1.125 1.125 1.125z" />
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
                            <input type="text" name="phoneNumber" class="p-3 border border-gray-300 rounded-full px-5 basis-[66%]" placeholder="Số điện thoại khách hàng">
                            <button class="bg-purple-800 text-white basis-30% p-3 px-8 rounded-full text-xl">GỬI</button>
                        </div>
                        <button class="w-full rounded-full border border-purple-800 py-3">
                            <div class="flex justify-center items-center space-x-3">

                                <p class="text-purple-800 font-nm text-xl">ĐẶT LỊCH</p> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-purple-800">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
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
        <div class="col-span-3 grid">
            <div class="border border-b-4 border-t-0 border-r-0 border-l-0 p-5 border-purple-800 w-[30%]">
                <h2 class="text-2xl font-medium">MÔ TẢ SẢN PHẨM</h2>
            </div>
            <hr class="border-b-1 border-gray-300">
            <div class="mt-10">
                <p class="text-xl font-light">
                    <?php echo $item['productDesc'] ?>
                </p>
            </div>
        </div>
        <div class="col-span-2">
            <div class="border border-b-4 border-t-0 border-r-0 border-l-0 p-5 border-purple-800 w-[50%]">
                <h2 class="text-2xl font-medium">THÔNG SỐ KĨ THUẬT</h2>
            </div>
        </div>

    </div>


</div>
<div id="bodylast" class="min-h-[100vh] absolute inset-y-0">
</div>
<!-- Cart -->
<div id="shoppingcart" class="fixed block top-0 r-0 w-[500px] min-h-[100vh] absolute inset-y-0 right-[100%] bg-white">
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
                <a href="#">
                    <div class="grid grid-cols-4 justify-items-end gap-3 border-b-2 p-1 m-2">
                        <div class="col-span-1">
                            <img src="https://galle.vn/media/catalog/product/cache/4eb977b9e79759bad481a70e526f1a23/r/e/re-av0006y-01_1546484306.png" alt="">
                        </div>
                        <div class="col-span-2">
                            <h1 class="font-semibold">ĐỒNG HỒ NAM ORIENT STAR RE-AV0006Y00B</h1>
                            <div class="my-5 flex">
                                Số lượng:
                                <div class="grid grid-cols-3 rounded-full border w-1/2 flex justify-items-center mx-5">
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
                            <div class="">20.638.000 ₫</div>
                        </div>
                        <div class="">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </a>
            </div>
            <div class="bg-gray-100 w-full">
                <div class="flex justify-between px-10 py-5">
                    <div class="font-semibold">Tổng tiền hàng</div>
                    <div class="font-semibold">61.914.000 ₫</div>
                </div>
                <div class="px-10 py-5">
                    <button class="bg-[#662d91] hover:bg-[#662d99] text-white font-semibold w-full rounded-full py-2 my-1">Mua ngay</button>
                    <button class=" text-[#662d91] border border-[#662d91] font-semibold w-full rounded-full py-2">Tiếp tục mua sắm</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart -->
<script>
    const btnCart = document.querySelector("#btnCart")
    const btnClose = document.querySelector("#closeCart")
    const shoppingCart = document.querySelector("#shoppingcart")

    console.log(shoppingCart.className);
    btnCart.addEventListener('click', function() {
        console.log("hehe");
        const openCart = shoppingCart.classList
        openCart.remove("right-[100%]")
        openCart.add("right-36")
        openCart.add("transition")
        document.querySelector("#bodylast").classList.add("bg-gray-600")
        document.querySelector("#bodylast").classList.add("w-[1400px]")
        document.querySelector("#bodylast").classList.add("opacity-25")
        document.querySelector("body").classList.add("overflow-hidden")
    })
    btnClose.addEventListener('click', function() {
        const closeCart = shoppingCart.classList
        closeCart.add("right-[100%]")
        closeCart.remove("right-36")
        document.querySelector("#bodylast").classList.remove("bg-gray-600")
        document.querySelector("#bodylast").classList.remove("w-[1400px]")
        document.querySelector("body").classList.remove("overflow-hidden")
    })
    document.querySelector("#bodylast").addEventListener('click', function() {
        console.log("hahahah");
        const closeCart = shoppingCart.classList
        closeCart.add("right-[100%]")
        closeCart.remove("right-36")
        document.querySelector("#bodylast").classList.remove("bg-gray-600")
        document.querySelector("#bodylast").classList.remove("w-[1400px]")
        document.querySelector("body").classList.remove("overflow-hidden")

    })
</script>