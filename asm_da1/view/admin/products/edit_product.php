
<div class="">
    <div class="px-[300px] pt-[40px]">
        <div class="py-[100px]">
            <div class="bg-[#6C5DD3] rounded-3xl grid grid-cols-5">
                <div class="p-[50px] col-span-2 flex flex-col space-y-[10px] items-start">
                    <h3 class="text-5xl font-semibold text-white">Edit Products</h3>
                    <p class="text-white">Change your product's information</p>
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
                <form class="grid grid-cols-2 gap-3"
                    action="./index.php?act=edit_product&productId=<?php echo $product['productId'] ?>"
                    method="POST" enctype="multipart/form-data">
                    <div class="col-span-1">
                        <label class="font-medium text-gray-500" class="font-medium text-gray-500" for="">Product
                            name</label>
                        <br>
                        <input class="border-2 px-1 h-10 w-full my-2 rounded-md border-gray-600" required type="text"
                            name="txtName" value="<?php echo $product['productName'] ?>" id="">
                        <br>

                        <label class="font-medium text-gray-500" for="">Price</label>
                        <br>
                        <input class="border-2 px-1 h-10 w-full my-2 rounded-md border-gray-600"
                            value="<?php echo $product['productPrice'] ?>" required type="number" name="txtPrice" id="">
                        <br>
                        <label class="font-medium text-gray-500" for="">Categories</label>
                        <br>
                        <select class="border-2 px-1 h-10 w-full my-2 rounded-md border-gray-600" required
                            name="txtCate" id="">
                            <option value="<?php echo $product['categoryId'] ?>">
                                <?php echo $cate['categoryName'] ?>
                            </option>
                            <?php foreach ($categories as $key => $item): ?>
                            <option value="<?php echo $item['categoryId'] ?>">
                                <?php echo $item['categoryName'] ?>
                            </option>
                            <?php endforeach ?>
                        </select>
                        <br>
                        <label class="font-medium text-gray-500" for="">Gender</label>
                        <br>
                        <select class="border-2 px-1 h-10 w-full my-2 rounded-md border-gray-600" required
                            name="txtGender" id="">
                            <option value="<?php echo $product['productGenderId'] ?>">
                                <?php echo $genderId['productGender']; ?>
                            </option>
                            <?php foreach ($gender as $key => $item): ?>
                            <option value="<?php echo $item['productGenderId'] ?>">
                                <?php echo $item['productGender'] ?>
                            </option>
                            <?php endforeach ?>
                        </select>
                        <br>
                        <label class="font-medium text-gray-500" for="">Description</label>
                        <br>
                        <textarea class="border-2 px-1 w-full my-2 rounded-md border-gray-600" type="text"
                            name="txtDesc" id="" cols="30" rows="10"><?php echo $product['productDesc'] ?></textarea>
                        <br>
                    </div>
                    <div class="col-span-1">
                        <label class="font-medium text-gray-500" for="">Image</label>
                        <br>
                        <input id="imageFile" type="file" name="txtImg">
                        <div class="border-2 px-1 w-full my-2 h-1/2 rounded-md border-gray-600">
                            <div id="textPrev" class="hidden">Preview Image</div>
                            <img src="../../image/<?php echo $product['productImage'] ?>" alt="" id="prevImage"
                                class="w-2/3 max-h-full mx-auto">
                        </div>
                    </div>
                    <div class=""></div>
                    <div class="grid justify-items-end">
                        <button class="bg-[#6C5DD3] rounded-md px-3 py-2 text-white w-1/3" name="btnUpdate">Update
                            Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>