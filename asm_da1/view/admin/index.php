<?php
ob_start();
session_start();
include '../../model/connect.php';



if (isset($_POST['btnSearch'])) {
    $prodname = $_POST['txtName'];
    $product_query = "SELECT * FROM `products` WHERE `productName` LIKE '%$prodname%'";
    $products = getAll($product_query);
}
if (isset($_GET['sort'])) {
    if ($_GET['sort'] == "asc") {
        $product_query = "SELECT * FROM `products` ORDER BY `products`.`productPrice` ASC";
        $products = getAll($product_query);
    }
    if ($_GET['sort'] == "desc") {
        $product_query = "SELECT * FROM `products` ORDER BY `products`.`productPrice` DESC";
        $products = getAll($product_query);
    }
    if (isset($_POST['btnSearch'])) {
        $prodname = $_POST['txtName'];
        $product_query = "SELECT * FROM `products` WHERE `productName` LIKE '%$prodname%'";
        $products = getAll($product_query);
    }
}
if (!function_exists('currency_format')) {
    function currency_format($number, $suffix = 'đ')
    {
        if (!empty($number)) {
            return number_format($number, 0, ',', '.') . "{$suffix}";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="grid grid-cols-7 relative">
        <div>
            <div class="fixed">
                <?php
                include './side_menu.php';
                ?>
            </div>
        </div>
        <div class="col-span-6">
            <?php
            if (isset($_GET['act'])) {
                $act = $_GET['act'];
                switch ($act) {
                    case 'home':
                        include './content.php';
                        break;
                    case 'overview':
                        include './overview.php';
                        break;
                    case 'products':
                        include  '../../controller/products/insert_product_admin.php';
                        break;
                    case 'edit_product':
                        include  '../../controller/products/edit_product.php';
                        break;
                    case 'add_product':
                        include  '../../controller/products/add_product.php';
                        break;
                    case 'delete_product':
                        include  '../../controller/products/delete_product.php';
                        break;
                    case 'categories':
                        include  '../../controller/category/categories.php';
                        break;
                    case 'edit_cate':
                        include  '../../controller/category/edit_cate.php';
                        break;
                    case 'add_cate':
                        include  '../../controller/category/add_cate.php';
                        break;
                    case 'accounts':
                        include  '../../controller/account/insert_acc_admin.php';
                        break;
                    case 'delete_user':
                        include  '../../controller/account/delete_user.php';
                        break;
                    case 'delete_cate':
                        include  '../../controller/category/delete_cate.php';
                        break;
                    case 'receipts':
                        include './receipts/receipts.php';
                        break;
                    default:
                        include './content.php';
                        break;
                }
            } else {
                include './content.php';
            }
            ?>
        </div>
    </div>
    <script src="../../main/confirm_delete.js"></script>
    <script src="../../main/preview.js"></script>
    <script src="../../main/sort_product.js"></script>
    <script src="../../main/category.js"></script>
</body>

</html>