<body class="">
    <!-- Product Hot -->
    <?php
    $userName = "";
    $userId = "";
    if (isset($_SESSION['userName'])) {
        $userName = $_SESSION['userName'];
    }
    if (isset($_SESSION['userId'])) {
        $userId = $_SESSION['userId'];
    }
    ?>
    <div class="mx-auto max-w-screen-xl">
        <div class="flex justify-around items-center mb-7 mt-4">
            <?php
            $type = "";
            $item_query = "";
            if (isset($_GET['type'])) {
                $type = $_GET['type'];
                $item_query = "SELECT * FROM products WHERE productGenderId = $type";
            } else {
                $item_query = "SELECT * FROM products";
            }
            $products = getAll($item_query);
            ?>
            <h2
                class="text-xl tracking-widest text-gray-800 pb-2 underline underline-offset-8 decoration-2 decoration-purple-800 grow">
                SẢN PHẨM BÁN CHẠY</h2>
            <div class="space-x-3">
                <a href="./index.php?act=&type=1"><button id="btn-1"
                        class="bg-purple-800 text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ NAM</button></a>
                <a href="./index.php?act=&type=2"><button id="btn-2"
                        class="bg-purple-800 text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ NỮ</button></a>
                <a href="./index.php?act=&type=3"><button id="btn-3"
                        class="bg-purple-800 text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ ĐÔI</button></a>
                <a href="./index.php?act=&type=4"><button id="btn-4"
                        class="bg-purple-800 text-white p-2 px-3 rounded-3xl">ĐỒNG HỒ UNISEX</button></a>
                <a href="./index.php?act="><button id="btn-5" class="bg-purple-800 text-white p-2 px-3 rounded-3xl">TẤT
                        CẢ</button></a>
            </div>
        </div>
        <div class="grid mx-auto text-center grid-cols-4 gap-4 ">
            <?php foreach ($products as $key => $item): ?>
            <div class="group">
                <a
                    href="./index.php?act=product_info&productId=<?php echo $item["productId"] ?>&userId=<?php echo $userId; ?>">
                    <img src="../../image/<?php echo $item["productImage"] ?>"
                        class="mb-10 group-hover:scale-105 duration-500" alt="">
                    <div class="overflow-hidden relative flex flex-col justify-between">
                        <div>
                            <p class="font-semibold">
                                <?php echo $item['productName'] ?>
                            </p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div>
                                <p class="font-thin text-sm line-through my-1">
                                <div class="flex justify-center">
                                    <p class="text-xl line-through">
                                        <?php echo currency_format($item["productPrice"]) ?>
                                    </p>
                                </div>
                                </p>
                            </div>
                            <div class="flex pb-10 text-xl items-end">
                                <div class="flex">
                                    <p class="text-xl font-bold text-purple-800 mr-2 flex items-end"> Giá KM </p>
                                    <p class="text-2xl font-bold text-purple-800">
                                        <?php echo currency_format($item["productPrice"]) ?>
                                    </p>
                                </div>
                            </div>
                            <div>
                                <form action="../../controller/add_to_cart.php?" method="POST">
                                    <input type="text" class="hidden" name="productId"
                                        value="<?php echo $item['productId'] ?>">
                                    <input type="text" class="hidden" name="userId" value="<?php echo $userId ?>">
                                    <input type="text" class="hidden" name="productName"
                                        value="<?php echo $item["productName"] ?>">
                                    <input type="text" class="hidden" name="productPrice"
                                        value="<?php echo $item["productPrice"] ?>">
                                    <input type="text" class="hidden" name="categoryImage" F
                                        value="<?php echo $item_category["categoryImage"] ?>">
                                    <input type="text" class="hidden" name="productImage"
                                        value="<?php echo $item["productImage"] ?>">
                                    <button type="submit"
                                        class="bg-purple-800 text-white mt-2 p-2 px-3 w-52 left-12 rounded-3xl transform group-hover:bottom-0 group-hover:left-12 duration-500 absolute -bottom-16">
                                        THÊM
                                        VÀO GIỎ HÀNG</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- Product Hot End -->
    <!-- See more -->
    <a href="" class="flex relative mx-auto w-[358px] container text-center my-4">
        <span class="border rounded-3xl px-6 py-2">XEM THÊM SẢN PHẨM ĐỒNG HỒ ĐEO TAY
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6 absolute right-0 text-purple-800 top-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </a>
    <!-- See more  end-->

    <!-- Why choose us -->
    <div class="bg-gray-100">
        <div class="text-center">
            <h2
                class="text-xl tracking-widest text-gray-800 pt-6 underline underline-offset-8 decoration-2 decoration-purple-800 grow my-8">
                VÌ SAO CHỌN CHÚNG TÔI</h2>
        </div>
        <div class="grid grid-cols-4 container gap-6 mx-auto pb-6 font-bold text-xl tracking-wide">
            <div class="flex items-center justify-evenly">
                <img src="../../image/icon1.png" alt="">
                <span>100% SẢN PHẨM <br> CHÍNH HÃNG</span>
            </div>
            <div class="flex items-center">
                <img src="../../image/icon2.png" alt="">
                <span>MIỄN PHÍ <br>VẬN CHUYỂN</span>
            </div>
            <div class="flex items-center">
                <img src="../../image/icon3.png" alt="">
                <span>THAY PIN MIỄN PHÍ<br>TRỌN ĐỜI</span>
            </div>
            <div class="flex items-center">
                <img src="../../image/icon4.png" alt="">
                <span>HỖ TRỢ TRẢ GÓP<br> TRẢ GÓP 0%</span>
            </div>
        </div>
    </div>
    <script src="/asm_da1/main/account.js">
    </script>
</body>