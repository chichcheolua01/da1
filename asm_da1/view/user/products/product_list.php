<body class="">
    <!-- Product Hot -->
    <?php
    $id = "";
    if (isset($_GET['categoryId'])) {
        $id = $_GET['categoryId'];
        $category_query = "SELECT * FROM categories WHERE categoryId = '$id'";
        $category = getOne($category_query);
    } else if (isset($_GET['GenderId'])) {
        $id = $_GET['GenderId'];
        $category_query = "SELECT * FROM product_gender WHERE productGenderId = '$id'";
        $category = getOne($category_query);
    }
    ?>
    <section class="">
        <div class="">
            <hr class="border border-b-[1px] border-slate-200">
            <div class="flex justify-around items-center my-7">
                <div class="w-full">
                    <img class="w-[1930px] h-[350px] object-cover" src="../../image/<?php
                                                                        if (isset($_GET['categoryId'])) {
                                                                            echo $category['categoryBanner'];
                                                                        } else if (isset($_GET['GenderId'])) {
                                                                            echo $category['productGenderBanner'];
                                                                        }
                                                                        ?>">
                </div>
            </div>
            <div class="list_product grid mx-auto text-center grid-cols-4 gap-8 ">
                <?php
                foreach ($list_products as $key => $item) : ?>
                    <div class="group">
                        <a href="./index.php?act=product_info&productId=<?php echo $item["productId"] ?>">
                            <img src="../../image/<?php echo $item["productImage"] ?>" class="mb-10 group-hover:scale-105 duration-500" alt="">
                            <div class="overflow-hidden relative flex flex-col justify-between">
                                <div>
                                    <p class="font-semibold"><?php echo $item['productName'] ?></p>
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
                                            <p class="text-xl font-bold text-purple-800 mr-2 flex items-end"> Gi?? KM </p>
                                            <p class="text-2xl font-bold text-purple-800">
                                                <?php echo currency_format($item["productPrice"]) ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div>
                                        <form action="../../controller/cart/add_to_cart.php?" method="POST">
                                            <input type="text" class="hidden" name="productId" value="<?php echo $item['productId']  ?>">
                                            <input type="text" class="hidden" name="userId" value="<?php echo $userId ?>">
                                            <input type="text" class="hidden" name="productName" value="<?php echo $item["productName"] ?>">
                                            <input type="text" class="hidden" name="productPrice" value="<?php echo $item["productPrice"] ?>">
                                            <input type="text" class="hidden" name="productImage" value="<?php echo $item["productImage"] ?>">
                                            <input type="text" class="hidden" name="quantity" value="1">
                                            <button type="submit" class="bg-purple-800 text-white mt-2 p-2 px-3 w-52 left-12 rounded-3xl transform group-hover:bottom-0 group-hover:left-12 duration-500 absolute -bottom-16"> TH??M
                                                V??O GI??? H??NG</button>
                                        </form>
                                    </div>
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
        <span class="border rounded-3xl px-6 py-2">XEM TH??M S???N PH???M ?????NG H??? ??EO TAY
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 absolute right-0 text-primary top-2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </a>
</body>