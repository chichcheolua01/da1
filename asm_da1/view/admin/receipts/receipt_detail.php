
<div class="mb-10">
    <div class="px-[300px] pt-[40px]">
        <div>
        <div>
            <h1 class="text-3xl font-semibold">Hi Nghia Tran,</h1>
            <h2 class="text-6xl font-semibold">Welcome back</h2>
        </div>
        <div class="py-[100px]">
            <div class="bg-[#6C5DD3] rounded-3xl grid grid-cols-5">
                <div class="p-[50px] col-span-2 flex flex-col space-y-[10px] items-start">
                    <h3 class="text-5xl font-semibold text-white">Receipt_detail</h3>
                    <p class="text-white"></p>
                    <a href="./index.php?act=add_product"><button
                            class=" px-[35px] py-[15px] rounded-2xl font-bold text-sm">
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
        </div>
        <div>
            <table class="w-full">
            <p class="font-bold text-center text-3xl my-4 border w-[250px] p-2 bg-fuchsia-500 rounded-3xl ">ReceiptId <?php echo $receiptsId ?></p>
                <thead>
                    <tr>
                        <td class="px-4 font-semibold">Product Id</td>
                        <td class="px-4 font-semibold">Product Name</td>
                        <td class="px-4 font-semibold text-center">Image</td>
                        <td class="px-4 font-semibold">Price</td>
                        <td class="px-4 font-semibold">Quantity</td>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach ($receiptId as $key => $item): ?>
                    <tr class="border border-y-[1px] border-gray-200 border-x-0">
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo ($item['productId']) ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo ($item['productName']) ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <img class="w-[100px] h-auto"
                                src="../../image/<?php echo $item['productImage'] ?>" alt="">
                        </td>
                        
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo $item['productPrice'] ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo $item['quantity'] ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <div class="space-y-[10px] flex flex-col">
                            <a onclick="return confirm('Bạn có muốn xóa đơn hàng này?')" href="../../controller/delete_cart_admin.php?cartId=<?php echo $item['cartId'] ?>">
                                    <button 
                                        class="p-[10px] bg-[#6C5DD3] text-white rounded-2xl font-semibold">
                                        Xoá
                                    </button>
                                </a>
                            </div>
                        </td>
                        <input type="hidden" value="<?php echo $item['cartId'] ?>">
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <?php
                $total = 0;
                    foreach ($receiptId as $key => $item) {
                    $total += ($item['productPrice'] * $item['quantity']);
                }           
            ?>       
            <p class="font-bold my-3 text-2xl">Total Money: <?php echo currency_format($total) ?></p>
        </div>
    </div>

</div>
</div>
