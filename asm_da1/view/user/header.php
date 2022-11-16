<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function chooseFile(fileInput) {
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>
</head>

<body class="lg:px-[100px] ">

    <div class="container mx-auto">
        <header class="w-full flex flex-col">
            <div class="flex py-[60px] w-full items-center justify-between">
                <div class="flex space-x-20">
                    <div class="flex justify-center space-x-5 items-center">
                        <img src="../../image/hethong.png" alt="">
                        <p>HÊ THỐNG CỬA HÀNG</p>
                    </div>
                    <div class="flex justify-center space-x-5 items-center">
                        <img src="../../image/hotline.png" alt="">
                        <p>1800 6785</p>
                    </div>
                </div>
                <div class="">
                    <a href="./index.php?act=">
                        <img class="h-[60px] w-auto" src="../../image/logo.svg" alt="">
                    </a>
                </div>
                <div class="flex space-x-20">
                    <div class="flex items-center border border-purple-800 p-2 rounded-full">
                        <input type="text" name="search" class="outline-0 px-[10px]" placeholder="Tìm cc gì v?">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-purple-800 font-bold ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                    <div class="flex space-x-10 items-center">
                        <img src="../../image/user.svg" alt="">
                        <img src="../../image/wishlist.svg" alt="">
                        <button id="btnCart">
                            <img src="../../image/minicart.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>

            <hr class="border-b-2 border-purple-800">
            <div class="flex justify-center">
                <div class="w-full py-[10px] flex justify-between items-center">
                    <div class="flex justify-center items-center relative w-full">
                        <ul class="flex justify-center space-x-[52px] items-center">
                            <li class="text-sm p-5 inline-block group">
                                <a href="index.php?act=home">
                                    <div class="flex justify-center items-center space-x-3">
                                        <img src="../../image/menu1.png" alt="">
                                        <p class="text-black font-bold">THƯƠNG HIỆU</p>
                                    </div>
                                </a>
                                <div class="grid grid-cols-4 w-full p-5 absolute top-full left-0 bg-white shadow-2xl mt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500 z--10">
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">THƯƠNG HIỆU BÁN CHẠY</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ORIENT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">PREDERIQUE CONSTANT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">CERTINA</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">PARKER</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">ĐỒNG HỒ CAO CẤP</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">PREDERIQUE CONSTANT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ORIENT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">PARKER</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">CERTINA</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">ĐỒNG HỒ THỤY SĨ</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">LONGINES</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">RADO</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">TISSOT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ERNEST BOREL</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">ĐỒNG HỒ NHẬT BẢN</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ORIENT STAR</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ORIENT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">SEIKO</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">CITIZEN</li>
                                    </ul>

                                </div>
                            </li>
                            <li class="text-sm p-5 inline-block group">
                                <a href="index.php?act=home">
                                    <div class="flex justify-center items-center space-x-3">
                                        <img src="../../image/menu2.png" alt="">
                                        <p class="text-black font-bold">ĐỒNG HỒ</p>
                                    </div>
                                </a>


                                <div class="grid grid-cols-4 w-full p-5 absolute top-full left-0 bg-white shadow-2xl mt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500 z--10">
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">KHOẢNG GIÁ</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">DƯỚI 2 TRIỆU</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">TỪ 2 TRIỆU - 5 TRIỆU</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">TỪ 5 TRIỆU - 10 TRIỆU</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">TỪ 10 TRIỆU - 20 TRIỆU</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">TỪ 20 TRIỆU - 50 TRIỆU</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">THƯƠNG HIỆU HOT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">FREDERIQUE CONSTANT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">LONGINES</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">TISSOT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">CANDINO</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ORIENT</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">GIỚI TÍNH ĐỒNG HỒ</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ĐỒNG HỒ NAM</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ĐỒNG HỒ NỮ</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ĐỒNG HỒ ĐÔI</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ĐỒNG HỒ UNISEX</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">BỘ SƯU TẬP NỔI BẬT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">FREDERIQUE CONSTANT HIGHLIFE</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">MANUFACTURE</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">SEIKO 5 SPORTS</li>
                                    </ul>

                                </div>
                            </li>
                            <li class="text-sm p-5 inline-block group">
                                <a href="index.php?act=home">
                                    <div class="flex justify-center items-center space-x-3">
                                        <img src="../../image/menu3.png" alt="">
                                        <p class="text-black font-bold">SMARTWATCH</p>
                                    </div>
                                </a>


                                <div class="grid grid-cols-4 w-full p-5 absolute top-full left-0 bg-white shadow-2xl mt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500 z--10">
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">KHOẢNG GIÁ</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">DƯỚI 2 TRIỆU</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">TỪ 2 TRIỆU - 5 TRIỆU</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">TỪ 5 TRIỆU - 10 TRIỆU</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">TỪ 10 TRIỆU - 20 TRIỆU</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">TỪ 20 TRIỆU - 50 TRIỆU</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">THƯƠNG HIỆU</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">GARMIN</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">APPLE</li>

                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">TÍNH NĂNG</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">XEM GIỜ</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ĐO SỨC KHOẺ</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">GẮN SIM</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">GARMIN</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">MÀN HÌNH AMOLED</li>
                                    </ul>
                                    <ul class="p-2 invisible">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>

                                </div>
                            </li>
                            <li class="text-sm p-5 inline-block group">
                                <a href="index.php?act=home">
                                    <div class="flex justify-center items-center space-x-3">
                                        <img src="../../image/menu6.png" alt="">
                                        <p class="text-black font-bold">TIN TỨC</p>
                                    </div>
                                </a>


                                <div class="grid grid-cols-4 w-full p-5 absolute top-full left-0 bg-white shadow-2xl mt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500 z--10">
                                    <ul class="p-2 invisible">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2 invisible">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2 invisible">
                                        <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub menu</li>
                                    </ul>
                                    <ul class="p-2">
                                        <li class="block font-semibold text-xl mb-5">DANH MỤC TIN</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">TIN TỨC NỔI BẬT</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">KIẾN THỨC ĐỒNG HỒ</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">BẢN TIN THƯƠNG HIỆU</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">CÔNG VIỆC TẠI GALLE</li>
                                        <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">VIDEO NỔI BẬT</li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="border-b-1 border-gray-300">

        </header>