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
                    <a href="./index.php?act=add_product"><button class="bg-white text-black px-[35px] py-[15px] rounded-2xl font-bold text-sm"> Add product
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
                        <td class="px-4 font-semibold">STT</td>
                        <td class="px-4 font-semibold">Name</td>
                        <td class="px-4 font-semibold">Email</td>
                        <td class="px-4 font-semibold">Address</td>
                        <td class="px-4 font-semibold">Phone Number</td>
                        <td class="px-4 font-semibold">Dispatch Box</td>
                        <td class="px-4 font-semibold">Delivery Date</td>
                        <td class="px-4 font-semibold">Note</td>
                        <td class="px-4 font-semibold">Status</td>
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                    $i = 0;
                    foreach ($receiptsList as $key => $item) : ?>

                        <tr class="border border-y-[1px] border-gray-200 border-x-0">
                            <td class="px-4">
                                <p class="text-sm font-semibold">
                                    <?php echo ($i++) ?>
                                </p>
                            </td>
                            <td class="px-4">
                                <p class="text-sm font-semibold">
                                    <?php echo ($item['username']) ?>
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
                                <form action="./index.php?act=update_status&receiptId=<?php echo $item['receiptId'] ?>" enctype="multipart/form-data" method="post">
                                    <select class="border-2 px-1 h-10 w-[130px] my-2 rounded-md border-gray-600" name="status" id="status">
                                        <option value="<?php echo $item['status'] ?>">
                                            <?php echo $item['status'] ?>
                                        </option>
                                        <option value="Đang xử lí">Đang xử lí</option>
                                        <option value="Đang giao">Đang giao</option>
                                        <option value="Hoàn thành">Hoàn thành</option>
                                    </select>
                                    <button type="submit" name="submit"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                            <td class="px-4">
                                <div class="space-y-[10px] flex flex-col">
                                    <a onclick="return confirm('Bạn có muốn xóa đơn hàng này?')" href="./index.php?act=delete_receipts&receiptId=<?php echo $item['receiptId'] ?>">
                                        <button class="p-[10px] bg-[#6C5DD3] text-white rounded-2xl font-semibold">
                                            Xoá
                                        </button>
                                    </a>
                                </div>
                            </td>
                            <td class="px-4">
                                <div class="space-y-[10px] flex flex-col">
                                    <a href="./index.php?act=receipt_detail&receiptId=<?php echo $item['receiptId'] ?>">
                                        <button class="p-[10px] bg-[#6C5DD3] text-white rounded-2xl font-semibold">
                                            Chi_tiết
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