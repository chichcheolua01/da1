<?php
$query = "SELECT *  
FROM receipts";
$receiptsList = getAll($query);
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
                        <td class="px-4 font-semibold">ID + UserName</td>
                        <td class="px-4 font-semibold">Email</td>
                        <td class="px-4 font-semibold">Địa chỉ</td>
                        <td class="px-4 font-semibold">Số điện thoại</td>
                        <td class="px-4 font-semibold">Nơi nhận hàng</td>
                        <td class="px-4 font-semibold">Ngày đặt hàng</td>
                        <td class="px-4 font-semibold">Ghi chú</td>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach ($receiptsList as $key => $item): ?>
                    <tr class="border border-y-[1px] border-gray-200 border-x-0">
                    <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo ($item['receiptId']) ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo ($item['userId']).'. '.($item['username']) ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo ($item['email']) ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo $item['address'] ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo $item['phoneNumber'] ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo $item['dispatch_box'] ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo $item['received_date'] ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo $item['note'] ?>
                            </p>
                        </td>

                        <td class="px-4">

                            <div class="space-y-[10px] flex flex-col">
                            <a onclick="return confirm('Bạn có muốn xóa đơn hàng này?')" href="../../controller/delete_receipts.php?receiptId=<?php echo $item['receiptId'] ?>">
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
