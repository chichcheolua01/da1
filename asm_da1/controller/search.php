<?php
include '../model/connect.php';

$data = $_POST['data'];
$sql = "SELECT * FROM `products` WHERE `productName` LIKE '%$data%' ORDER BY `productName` limit 0,3 ";
$products = getAll($sql);

foreach ($products as $key => $item) { ?>


    <div class="">
        <div class="result_search flex p-1">
            <img src="../../image/<?php echo $item["productImage"] ?>" alt="" class="w-[75px]">
            <div class="">
                <p class="text-xs"> <?php echo $item["productName"] ?></p>
            </div>
        </div>
    </div>

<?php }



?>