<div class="">
    <div class="px-[300px] pt-[40px]">
        <div>
            <h1 class="text-3xl font-semibold">Hi Nghia Tran,</h1>
            <h2 class="text-6xl font-semibold">Welcome back</h2>
        </div>
        <div class="py-[100px]">
            <div class="bg-[#6C5DD3] rounded-3xl grid grid-cols-5">
                <div class="p-[50px] col-span-2 flex flex-col space-y-[10px] items-start">
                    <h3 class="text-5xl font-semibold text-white">Account</h3>
                    <p class="text-white"></p>
                    <a href="./index.php?act=add_user_admin"><button
                            class="bg-white text-black px-[35px] py-[15px] rounded-2xl font-bold text-sm"> Add User
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
            <table class="w-full text-center">
                <thead>
                    <tr>
                        <td class="px-4 font-semibold text-left">Avatar</td>
                        <td class="px-4 font-semibold">Username</td>
                        <td class="px-4 font-semibold">Full name</td>
                        <td class="px-4 font-semibold">Classify</td>
                        <td class="px-4 font-semibold">Action</td>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach ($users as $key => $item): ?>
                    <tr class="border border-y-[1px] border-gray-200 border-x-0">
                        <td class="p-[20px]"><img class="w-[100px] h-auto"
                                src="../../image/<?php echo $item['userImage'] ?>" alt="">
                        </td>
                        <td>
                            <div>
                                <p class="text-sm font-semibold">
                                    <?php echo $item['userName'] ?>
                                </p>
                            </div>
                        </td>
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php echo $item['userFullname']; ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <p class="text-sm font-semibold">
                                <?php
                        if ($item['userAccess'] == 1) {
                            echo "Admin";
                        } else {
                            echo "User";
                        }
                                ?>
                            </p>
                        </td>
                        <td class="px-4">
                            <a onclick="return confirm('B???n c?? mu???n x??a ng?????i d??ng n??y?')" href="./index.php?act=delete_user&userId=<?php echo $item['userId'] ?>"
                                class="p-[10px] bg-[#6C5DD3] text-white rounded-2xl font-semibold">
                                Xo??
                            </a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>
<script src="../../main/confirm_user.js"></script>