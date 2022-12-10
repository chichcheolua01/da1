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
        <div class="my-10 border-b-2 py-3 flex justify-between">
            <form class="w-1/2" action="" method="post">
                <div>
                    <label class="font-semibold text-gray-500" for="">Tìm kiếm sản phẩm:</label>
                    <br>
                    <input class="border w-2/3 rounded-md h-10 px-1" placeholder="Nhập tên sản phẩm muốn tìm "
                        type="text" name="txtName" />
                    <button id="btnSearch" onchange="window.location.href" name="btnSearch"
                        class="bg-green-500 text-white font-semibold px-2 py-2 hover:bg-green-700 ease-out duration-200 rounded-md">
                        Tìm kiếm
                    </button>
                </div>

            </form>
            <div class="w-1/2">
                <label class="font-semibold text-gray-500 float-right" for="">Lọc sản phẩm theo:</label>
                <br>
                <select class="border w-1/2 rounded-md h-10 px-1 float-right" name="fillter" id="sort_data"
                    onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value)">
                    <option value="">
                        - - -
                    </option>
                    <option value="?act=products&sort=asc">
                        Giá tăng dần
                    </option>
                    <option value="?act=products&sort=desc">
                        Giá giảm dần
                    </option>
                </select>
            </div>
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
                                <?php echo $item['productGender'] ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <div class="space-y-[10px] flex flex-col">
                                <a href="./index.php?act=edit_product&productId=<?php echo $item['productId'] ?>"><button
                                        class="p-[10px] bg-[#6C5DD3] text-white rounded-2xl font-semibold">Sửa</button>
                                </a>
                                <a onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" href="./index.php?act=delete_product&productId=<?php echo $item['productId'] ?>">
                                    <button
                                        class="p-[10px] bg-[#6C5DD3] text-white rounded-2xl font-semibold">
                                        Xoá
                                    </button>
                                </a>
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