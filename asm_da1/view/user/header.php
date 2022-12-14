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
    <!-- Search -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.search').keyup(function() {
                var txt = $('.search').val();
                $.post('../../controller/search.php', {
                    data: txt
                }, function(data) {
                    $('.result_search').html(data);
                })
            })
        });
    </script>
    <!-- Search End-->
</head>
<?php
$userId = "";
if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];
}
?>

<body class="lg:px-[100px] ">

    <div class="container mx-auto">
        <header class="w-full flex flex-col">
            <div class="flex py-[60px] w-full items-center justify-between">
                <div class="flex space-x-20">
                    <div class="flex justify-center space-x-5 items-center">
                        <img src="../../image/hethong.png" alt="">
                        <p>H?? TH???NG C???A H??NG</p>
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
                    <div class="relative">
                        <div class="flex items-center border border-purple-800 p-2 rounded-full">
                            <input type="search" name="search" class="outline-0 px-[10px] search" id="search" placeholder="T??m ki???m">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-purple-800 font-bold ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </div>
                        <!--  -->
                        <div class="result_search z-50 bg-white  absolute shadow-[0px_0px_5px_1px_rgba(0,0,0,0.2)] ">
                        </div>
                        <!--  -->
                    </div>
                </div>

                <div class="flex space-x-10 items-center">
                    <?php
                    if (isset($_SESSION['userId'])) {
                        if ($_SESSION['userId'] != "") {
                            $userId = $_SESSION['userId'];
                            $query = "SELECT * FROM users WHERE userId = $userId";
                            $getUser = getOne($query);
                            //echo "<div> Ch??o m???ng ", $getUser['userFullname'].'</div>';
                            echo '<div class="inline-block focus:outline-none focus:border-white group"><a id="btnSignout" href=""><img class="w-10 h-10 rounded-full" src="../../image/' . $getUser['userImage'] . '" alt="">
                          </a>
                            <div class="bg-white absolute rounded-lg mt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500 z--10 shadow-2xl border overflow-hidden">
                            <div><a href="../../controller/signout.php" class="block px-4 py-2 hover:bg-purple-800 hover:text-white font-semibold">Sign out</a>  </div>
                            <div><a href="./index.php?act=account" class="block px-4 py-2 hover:bg-purple-800 hover:text-white font-semibold">Account setting</a></div>
                            <div class="flex px-4 py-2 space-x-2"> <p>Hello</p> <p class="font-semibold">' . $getUser['userFullname'] . ' </p> </div>
                                
                            </div>
                        </div>
                          
                          ';
                        }
                    }
                    if (!isset($_SESSION['userId'])) {
                        echo '<a id="btnSignout" href="./index.php?act=signin"><img src="../../image/user.svg" alt="">                     
                      </a>';
                    }
                    ?>

                    <img src="../../image/wishlist.svg" alt="">
                    <button id="btnCart">
                        <img src="../../image/minicart.svg" alt="">
                    </button>
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
                                        <p class="text-black font-bold">TH????NG HI???U</p>
                                    </div>
                                </a>
                                <div class="grid grid-cols-4 w-full p-5 absolute top-full left-0 bg-white shadow-2xl mt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500 z--10">
                                    <ul class="p-2">
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">TH????NG HI???U B??N CH???Y</li>
                                            <a href="./index.php?act=product_list&categoryId=1">
                                                <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">
                                                    ORIENT</li>
                                            </a>
                                            <a href="./index.php?act=product_list&categoryId=3">
                                                <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">
                                                    FREDERIQUE
                                                    CONSTANT</li>
                                            </a>
                                            <a href="./index.php?act=product_list&categoryId=4">
                                                <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">
                                                    CERTINA
                                                </li>
                                            </a>
                                            
                                    </ul>
                                    <ul class="p-2">
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">?????NG H??? CAO C???P</li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=3">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">
                                                FREDERIQUE
                                                CONSTANT</li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=1">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ORIENT
                                            </li>
                                        </a>
                                        
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=4">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">CERTINA
                                            </li>
                                        </a>
                                    </ul>
                                    <ul class="p-2">
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">?????NG H??? TH???Y S??</li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=7">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">
                                                LONGINES
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=8">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">RADO
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=9">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">TISSOT
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=10">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ERNEST
                                                BOREL</li>
                                        </a>
                                    </ul>
                                    <ul class="p-2">
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">?????NG H??? NH???T B???N</li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=1">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ORIENT
                                                STAR
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=1">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ORIENT
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=2">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">SEIKO
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=5">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">CITIZEN
                                            </li>
                                        </a>
                                    </ul>

                                </div>
                            </li>
                            <li class="text-sm p-5 inline-block group">
                                <a href="index.php?act=home">
                                    <div class="flex justify-center items-center space-x-3">
                                        <img src="../../image/menu2.png" alt="">
                                        <p class="text-black font-bold">?????NG H???</p>
                                    </div>
                                </a>


                                <div class="grid grid-cols-4 w-full p-5 absolute top-full left-0 bg-white shadow-2xl mt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500 z--10">
                                    <ul class="p-2">
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">KHO???NG GI??</li>
                                        </a>
                                        <a href="./index.php?act=product_list&listPrice=under2">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">D?????I 2
                                                TRI???U</li>
                                        </a>
                                        <a href="./index.php?act=product_list&listPrice=2to5">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">T??? 2
                                                TRI???U
                                                - 5 TRI???U</li>
                                        </a>
                                        <a href="./index.php?act=product_list&listPrice=5to10">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">T??? 5
                                                TRI???U
                                                - 10 TRI???U</li>
                                        </a>
                                        <a href="./index.php?act=product_list&listPrice=10to20">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">T??? 10
                                                TRI???U
                                                - 20 TRI???U</li>
                                        </a>
                                        <a href="./index.php?act=product_list&listPrice=20to50">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">T??? 20
                                                TRI???U
                                                - 50 TRI???U</li>
                                        </a>
                                    </ul>
                                    <ul class="p-2">
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">TH????NG HI???U HOT</li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=3">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">
                                                FREDERIQUE
                                                CONSTANT</li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=7">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">
                                                LONGINES
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=9">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">TISSOT
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=1">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">ORIENT
                                            </li>
                                        </a>
                                    </ul>
                                    <ul class="p-2">
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">GI???I T??NH ?????NG H???</li>
                                        </a>
                                        <a href="./index.php?act=product_list&GenderId=1">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">?????NG H???
                                                NAM
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&GenderId=2">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">?????NG H???
                                                N???
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&GenderId=3">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">?????NG H???
                                                ????I
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&GenderId=4">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">?????NG H???
                                                UNISEX</li>
                                        </a>
                                    </ul>
                                    <ul class="p-2">
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">B??? S??U T???P N???I B???T</li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=frederique_list">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">
                                                FREDERIQUE
                                                CONSTANT HIGHLIFE</li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=manu">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">
                                                MANUFACTURE
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=2_5">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">SEIKO 5
                                                SPORTS</li>
                                        </a>
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
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">KHO???NG GI??</li>
                                        </a>
                                        <a href="./index.php?act=product_list&listPrice=under2">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">D?????I 2
                                                TRI???U</li>
                                        </a>
                                        <a href="./index.php?act=product_list&listPrice=2to5">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">T??? 2
                                                TRI???U
                                                - 5 TRI???U</li>
                                        </a>
                                        <a href="./index.php?act=product_list&listPrice=5to10">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">T??? 5
                                                TRI???U
                                                - 10 TRI???U</li>
                                        </a>
                                        <a href="./index.php?act=product_list&listPrice=10to20">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">T??? 10
                                                TRI???U
                                                - 20 TRI???U</li>
                                        </a>
                                        <a href="./index.php?act=product_list&listPrice=20to50">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">T??? 20
                                                TRI???U
                                                - 50 TRI???U</li>
                                        </a>
                                    </ul>
                                    <ul class="p-2">
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">TH????NG HI???U</li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">GARMIN
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">APPLE
                                            </li>
                                        </a>

                                    </ul>
                                    <ul class="p-2">
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">T??NH N??NG</li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">XEM GI???
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">??O S???C
                                                KHO???
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">G???N SIM
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">GARMIN
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">M??N
                                                H??NH
                                                AMOLED</li>
                                        </a>
                                    </ul>
                                    <ul class="p-2 invisible">
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                    </ul>

                                </div>
                            </li>
                            <li class="text-sm p-5 inline-block group">
                                <a href="index.php?act=home">
                                    <div class="flex justify-center items-center space-x-3">
                                        <img src="../../image/menu6.png" alt="">
                                        <p class="text-black font-bold">TIN T???C</p>
                                    </div>
                                </a>


                                <div class="grid grid-cols-4 w-full p-5 absolute top-full left-0 bg-white shadow-2xl mt-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:mt-0 transition-all duration-500 z--10">
                                    <ul class="p-2 invisible">
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                    </ul>
                                    <ul class="p-2 invisible">
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                    </ul>
                                    <ul class="p-2 invisible">
                                        <a href="">
                                            <li class="block font-semibold text-xl mb-5">Main memu</li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                        <a href="./index.php?act=product_list&categoryId=">
                                            <li class="block p-2 hover:bg-white hover:text-black cursor-pointer">Sub
                                                menu
                                            </li>
                                        </a>
                                    </ul>


                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class