<div class="">
    <div class="px-[300px] pt-[40px]">
        <div>
            <h1 class="text-3xl font-semibold">Hi Nghia Tran,</h1>
            <h2 class="text-6xl font-semibold">Welcome back</h2>
        </div>
        <div class="py-[100px]">
            <div class="bg-[#6C5DD3] rounded-3xl grid grid-cols-5">
                <div class="p-[50px] col-span-2 flex flex-col space-y-[10px] items-start">
                    <h3 class="text-5xl font-semibold text-white">Your Categories</h3>
                    <p class="text-white">Create Your Category Dashboard in Minutes</p>
                    <a href="./index.php?act=add_cate"><button
                            class="bg-white text-black px-[35px] py-[15px] rounded-2xl font-bold text-sm"> Add category
                        </button></a>
                </div>
                <div class="col-span-3 relative overflow-hidden pt-[50px]">
                    <div class="absolute pr-[30px]">
                        <img src="../../image/product-banner.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div>
            <table class="w-full  text-center">
                <thead>
                    <tr>
                        <td class="px-4 font-semibold">Name</td>
                        <td class="px-4 font-semibold">Image</td>
                        <td class="px-4 font-semibold">Action</td>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach ($categories as $key => $item): ?>
                    <tr class="border border-y-[1px] border-gray-200 border-x-0">
                        <td>
                            <p class="text-sm font-semibold">
                                <?php echo $item['categoryName'] ?>
                            </p>
                        </td>
                        <td class="p-[20px]"><img class="w-[100px] mx-auto h-auto"
                                src="../../image/<?php echo $item['categoryImage'] ?>" alt="">
                        </td>
                        <td class="px-4">
                            <div class="space-y-[10px] flex flex-col">
                                <a href="./index.php?act=edit_cate&categoryId=<?php echo $item['categoryId'] ?>"><button
                                        class="p-[10px] bg-[#6C5DD3] text-white rounded-2xl font-semibold">Sửa</button>
                                </a>
                                <a href="">
                                    <button onclick="confirm_delcate(<?php echo $item['categoryId'] ?>)"
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