<div class="">
    <div class="px-[300px] pt-[40px]">
        <div>
            <h1 class="text-3xl font-semibold">Hi Nghia Tran,</h1>
            <h2 class="text-6xl font-semibold">Welcome back</h2>
        </div>
        <div class="py-[100px]">
            <div class="bg-[#6C5DD3] rounded-3xl grid grid-cols-5">
                <div class="p-[50px] col-span-2 flex flex-col space-y-[10px] items-start">
                    <h3 class="text-5xl font-semibold text-white">Your Products</h3>
                    <p class="text-white">Create Your Product Dashboard in Minutes</p>
                    <a href="./index.php?act=add_product"><button
                            class="bg-white text-black px-[35px] py-[15px] rounded-2xl font-bold text-sm"> Add product
                        </button></a>
                </div>
                <div class="col-span-3 relative overflow-hidden pt-[50px]">
                    <div class="absolute pr-[30px]">
                        <img src="../../image/product-banner.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="my-10 border-b-2 py-3">
            <form action="" method="post">
                <label class="font-semibold text-gray-500" for="">Tìm kiếm sản phẩm:</label>
                <input class="border w-1/3 rounded-md h-10 px-1" placeholder="Nhập tên sản phẩm muốn tìm " type="text"
                    name="txtName" />
                <button name="btnSearch"
                    class="bg-green-500 text-white font-semibold px-2 py-2 hover:bg-green-300 rounded-md">
                    Tìm kiếm
                </button>
            </form>
        </div>
        <div>
            <table class="w-full">
                <thead>
                    <tr>
                        <td></td>
                        <td></td>
                        <td class="px-4 font-semibold">Price</td>
                        <td class="px-4 font-semibold">View</td>
                        <td class="px-4 font-semibold">Gender</td>
                        <td class="px-4 font-semibold">Action</td>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach ($products as $key => $item): ?>
                    <?php
                        $categoryId = $item['categoryId'];
                        $category_query = "SELECT * FROM categories WHERE categoryId = $categoryId";
                        $category = getOne($category_query);
                        $productGenderId = $item['productGenderId'];
                        $product_gender_query = "SELECT * FROM product_gender WHERE productGenderId = $productGenderId";
                        $gender = getOne($product_gender_query);
                    ?>
                    <tr class="border border-y-[1px] border-gray-200 border-x-0">
                        <td class="p-[20px]"><img class="w-[100px] h-auto"
                                src="../../image/<?php echo $item['productImage'] ?>" alt=""></td>
                        <td>
                            <div>
                                <p class="text-sm font-semibold">
                                    <?php echo $item['productName'] ?>
                                </p>
                                <img src="../../image/<?php echo $category['categoryImage'] ?>" alt="">
                            </div>
                        </td>
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo currency_format($item['productPrice']) ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo $item['productView'] ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo $gender['productGender'] ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <div class="flex flex-col space-y-[10px]">
                                <a href="./index.php?act=edit_product&productId=<?php echo $item['productId'] ?>"><button
                                        class="p-[10px] bg-[#6C5DD3] text-white rounded-2xl font-semibold">Sửa</button>
                                </a>
                                <button onclick="confirm_del(<?php echo $item['productId'] ?>)"
                                    class="p-[10px] bg-[#6C5DD3] text-white rounded-2xl font-semibold">
                                    Xoá
                                </button>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>