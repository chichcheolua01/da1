<div class="mb-10">
    <div class="px-[300px] pt-[40px]">
        <div>
            <div>
                <h1 class="text-3xl font-semibold">Hi Nghia Tran,</h1>
                <h2 class="text-6xl font-semibold">Welcome back</h2>
            </div>
            <div class="grid grid-cols-2 gap-6 mt-6">
                <!-- Box 1 -->
                <a href="./index.php?act=accounts">
                    <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-gray-600">Total Users</h2>
                                <p class="font-bold text-3xl"><?php echo count($countUser) ?><span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- Box 1 End -->
                <!-- Box 2 -->
                <a href="./index.php?act=receipts">
                    <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-green-600"><i class="fas fa-receipt fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-gray-600">Total Receipts</h2>
                                <p class="font-bold text-3xl"><?php echo count($countReceipts) ?><span class="text-green-500"><i class="fas fa-caret-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- Box 2 End -->
                <!-- Box 3 -->
                <a href="./index.php?act=products">
                    <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-yellow-600"><i class="fab fa-product-hunt fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-gray-600">Total Products</h2>
                                <p class="font-bold text-3xl"><?php echo count($countPro) ?> <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- Box 3 End -->
                <!-- Box 4 -->
                <a href="./index.php?act=categories">
                    <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-list fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-gray-600">Total Categories</h2>
                                <p class="font-bold text-3xl"><?php echo count($countCategory) ?></p>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- Box 4 End -->

            </div>
        </div>
    </div>
</div>