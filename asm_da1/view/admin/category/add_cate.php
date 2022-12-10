<div class="">
    <div class="px-[300px] pt-[40px]">
        <div class="py-[100px]">
            <div class="bg-[#6C5DD3] rounded-3xl grid grid-cols-5">
                <div class="p-[50px] col-span-2 flex flex-col space-y-[10px] items-start">
                    <h3 class="text-5xl font-semibold text-white">Add Products</h3>
                    <p class="text-white">More Product</p>
                    <button class="bg-white text-black px-[35px] py-[15px] rounded-2xl font-bold text-sm"> Check all
                        settings </button>
                </div>
                <div class="col-span-3 relative overflow-hidden pt-[50px]">
                    <div class="absolute pr-[30px]">
                        <img src="../../image/product-banner.png" alt="">
                    </div>
                </div>
            </div>
            <div class="my-5">
                <form class="grid grid-cols-2 gap-3" action="./index.php?act=add_cate" method="POST"
                    enctype="multipart/form-data" id="formAddcate" onsubmit="return checkCate()">
                    <div class="col-span-1">
                        <label class="font-medium text-gray-500" for="">Category name</label>
                        <br>
                        <input class="border-2 px-1 h-10 w-full my-2 rounded-md border-gray-600" type="text"
                            name="txtName" id="nameCate">
                        <br>
                        <div id="errorName" class="text-red-500 font-semibold"></div>
                        <br>
                        <label class="font-medium text-gray-500" for="">Category type</label>
                        <br>
                        <select class="border-2 px-1 h-10 w-full my-2 rounded-md border-gray-600" name="txtType"
                            id="type">
                            <option value="">
                                ---
                            </option>
                            <?php foreach ($categories_type as $key => $item): ?>
                            <option value="<?php echo $item['categoryTypeId'] ?>">
                                <?php echo $item['categoryTypeName'] ?>
                            </option>
                            <?php endforeach ?>
                        </select>
                        <div id="errorType" class="text-red-500 font-semibold"></div>
                        <br>
                    </div>
                    <div class="col-span-1">
                        <label class="font-medium text-gray-500" for="">Image</label>
                        <br>
                        <input id="imageFile" type="file" name="txtImg">
                        <div class="border-2 px-1 w-full my-2 min-h-[400px] rounded-md border-gray-600">
                            <div id="textPrev" class="text-center mt-32 text-gray-500 font-bold">Preview Image</div>
                            <div id="errorImg" class="text-red-500 text-center font-semibold"></div>
                            <img src="" alt="" id="prevImage" class="w-auto max-h-[300px] mx-auto hidden">
                        </div>
                    </div>
                    <div class=""></div>
                    <div class="grid justify-items-end">
                        <button id="btnAdd" class="bg-[#6C5DD3] rounded-md px-3 py-2 text-white w-1/3"
                            name="btnAdd">Create
                            Category
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>