<div>
    <h1 class="text-2xl text-center">Thiết lập tài khoản</h1>
    <div class="my-5 grid grid-cols-4 gap-5 min-h-screen">
        <div class="col-span-1 bg-gray-100">
            <ul>
                <li id="liAcc1" class="py-3 px-5 hover:bg-white rounded-l-md my-2 ml-2"><a href="./index.php?act=account">Thông
                        tin tài khoản</a></li>
                <li id="liAcc2" class="py-3 px-5 hover:bg-white rounded-l-md my-2 ml-2"><a href="./index.php?act=update_email">Thay
                        đổi địa
                        chỉ email</a></li>
                <li id="liAcc3" class="py-3 px-5 hover:bg-white rounded-l-md my-2 ml-2"><a href="./index.php?act=update_password">Thay đổi mật
                        khẩu</a></li>
                <li id="liAcc4" class="py-3 px-5 hover:bg-white rounded-l-md my-2 ml-2"><a href="./index.php?act=receipts">Đơn hàng</a></li>
            </ul>
        </div>
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