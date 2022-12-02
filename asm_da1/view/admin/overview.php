<?php
$query = "SELECT *  
FROM cart   ";
$cartList = getAll($query);
?>
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
        </div>
        <div>
            <table class="w-full">
                <thead>
                    <tr>
                        <td class="px-4 font-semibold">Id đơn hàng</td>
                        <td class="px-4 font-semibold">Id sản phẩm</td>
                        <td class="px-4 font-semibold">Tên sản phẩm</td>
                        <td class="px-4 font-semibold text-center">Ảnh</td>
                        <td class="px-4 font-semibold">Giá tiền</td>
                        <td class="px-4 font-semibold">Số lượng</td>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach ($cartList as $key => $item): ?>
                    <tr class="border border-y-[1px] border-gray-200 border-x-0">
                    <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo ($item['receiptId']) ?>
                            </p>
                        </td>
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
        </div>
    </div>

</div>
</div>
