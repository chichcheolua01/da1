<body class="border border-red-600">
    <!-- Product Hot -->
    <section class="content grid grid-cols-5">
        <aside class="filter col-span-1 pr-10">
            <p class="w-full flex items-center">
            </p>
            <div class="list_filter">
                <ul class="">
                    <li class="items-center border-b-[1px] border-slate-400 mt-2">
                        <a href="" class="flex  items-center py-4">
                            THƯƠNG HIỆU
                            <img src="../../../../../Du_an_1/asm_da1/image/down.svg" alt="">
                        </a>
                    </li>
                    <li class="items-center border-b-[1px] border-slate-400 mt-2">
                        <a href="" class="flex  items-center py-4">
                            MỨC CHIẾT KHẤU
                            <img src="../../../../../Du_an_1/asm_da1/image/down.svg" alt="">
                        </a>
                    </li>
                    <li class="items-center border-b-[1px] border-slate-400 mt-2">
                        <a href="" class="flex  items-center py-4">
                            MỨC GIÁ
                            <img src="../../../../../Du_an_1/asm_da1/image/down.svg" alt="">
                        </a>
                    </li>
                    <li class="items-center border-b-[1px] border-slate-400 mt-2">
                        <a href="" class="flex  items-center py-4">
                            GIỚI TÍNH
                            <img src="../../../../../Du_an_1/asm_da1/image/down.svg" alt="">
                        </a>
                    </li>
                    <li class="items-center border-b-[1px] border-slate-400 mt-2">
                        <a href="" class="flex  items-center py-4">
                            LOẠI DÂY
                            <img src="../../../../../Du_an_1/asm_da1/image/down.svg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <!--End .list_filter-->
        </aside> <!-- End .filter -->
        <div class="col-span-4">
            <div class="nav my-7 flex items-center">
                <ul class="flex space-x-4">
                    <li><a class="hover:underline" href="">Trang Chủ</a> | </li>
                    <li><a class="hover:underline" href="">Đồng hồ</a> | </li>
                    <li><a class="hover:underline" href="">Giới tính đồng hồ</a> | </li>
                    <li><a class="text-purple-800 underline" href="">Đồng hồ nam</a></li>
                </ul>
                <button class="flex  items-center border border-purple-800 px-4 py-2 rounded-[20px]">
                    Sản phẩm ưu tiên
                    <img src="../../../../../Du_an_1/asm_da1/image/down.svg" alt="">
                </button>
            </div> <!-- End .nav-->
            <hr class="border border-b-[1px] border-slate-200">
            <div class="flex justify-around items-center mb-7">
                <!-- <h2
        class="text-xl tracking-widest text-gray-800 pb-2 underline underline-offset-8 decoration-2 decoration-primary grow">
        SẢN PHẨM BÁN CHẠY
        </h2> -->
                <div class="space-x-3">
                    <button class="bg-primary text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
                    <button class="bg-primary text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
                    <button class="bg-primary text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
                    <button class="bg-primary text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐEO TAY</button>
                </div>
            </div>
            <div class="list_product grid mx-auto text-center grid-cols-4 gap-8 ">
                <?php foreach ($products as $key => $item) : ?>

                    <div class="group">
                        <a href="./index.php?act=product_info&id=<?php echo $item["productId"] ?>">
                            <img src="../../image/<?php echo $item["productImage"] ?>" class="mb-10 group-hover:scale-105 duration-500" alt="">
                            <div class="overflow-hidden relative flex flex-col justify-between">
                                <div>
                                    <p class="font-semibold"><?php echo $item['productName'] ?></p>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div>
                                        <p class="font-thin text-sm line-through my-1">
                                        <div class="flex justify-center">
                                            <p class="text-xl line-through"> <?php echo substr($item["productPrice"], 0, -6)   ?>
                                            <p class="text-xl line-through">.<?php echo substr($item["productPrice"], -6, 3)   ?>
                                            <p class="text-xl line-through">.<?php echo substr($item["productPrice"], -3, 3)   ?>
                                            <p class="underline">đ</p>
                                        </div>
                                        </p>
                                    </div>
                                    <div class="flex pb-10 text-xl items-end">
                                        <div class="flex">
                                            <p class="text-xl font-bold text-purple-800 mr-2 flex items-end"> Giá KM </p>
                                            <p class="text-2xl font-bold text-purple-800"> <?php echo substr($item["productPrice"], 0, -6)   ?>
                                            <p class="text-2xl font-bold text-purple-800">.<?php echo substr($item["productPrice"], -6, 3)   ?>
                                            <p class="text-2xl font-bold text-purple-800">.<?php echo substr($item["productPrice"], -3, 3)   ?>
                                            <p class="underline font-bold text-purple-800">đ</p>
                                        </div>
                                    </div>
                                    <a href="" class="bg-purple-800 text-white mt-2 p-2 px-3 w-52 left-12 rounded-3xl transform group-hover:bottom-0 group-hover:left-12 duration-500 absolute -bottom-16">THÊM
                                        VÀO GIỎ HÀNG</a>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach ?>
            </div> <!-- End .list_product-->
        </div>
    </section>
    <!--End .content -->

    <!-- Product Hot End -->

    <a href="" class="see_more flex relative mx-auto w-[358px] container text-center my-4">
        <span class="border rounded-3xl px-6 py-2">XEM THÊM SẢN PHẨM ĐỒNG HỒ ĐEO TAY
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 absolute right-0 text-primary top-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </a>
</body>