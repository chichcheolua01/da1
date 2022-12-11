<div>
<h1 class="text-2xl text-center mt-10">Danh sách hoá đơn</h1>
    <div class="grid grid-cols-7">
    <div class="col-span-2">
        <?php include('./account/account_side_menu.php'); ?>
    </div>
    <div class="my-5 col-span-5">
        <div class="col-span-3 px-5">
            <table class="w-full">
                <thead>
                    <tr>
                        <td class="px-4 font-semibold">Product Name</td>
                        <td class="px-4 font-semibold ">Image</td>
                        <td class="px-4 font-semibold">Price</td>
                        <td class="px-4 font-semibold">Quantity</td>
                        <td class="px-4 font-semibold">Status</td>
                    </tr>
                </thead>
                <tbody class="">
                    <?php
                        foreach ($receiptsList as $key => $item) { ?>
                            <tr class="border border-y-[1px] border-gray-200 border-x-0">
                                <td class="px-4">
                                    <p class="text-sm font-semibold">
                                        <?php echo ($item['productName']) ?>
                                    </p>
                                </td>
                                <td class="px-4">
                                    <img class="w-[100px] h-auto" src="../../image/<?php echo $item['productImage'] ?>" alt="">
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
                                    <p class="text-sm font-semibold">
                                        <?php echo $item['status'] ?>
                                    </p>
                                </td>
                            </tr>                    
                            <?php                        
                    } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
    </div>
    
</div>