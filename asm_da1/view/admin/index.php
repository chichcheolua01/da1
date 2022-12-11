<?php
ob_start();
session_start();
if (!isset($_SESSION['userName'])) {
    header("Location: ../user/index.php?act=");
}
include '../../model/connect.php';
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
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
                        include  '../../controller/overview.php';
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
                    case 'add_user_admin':
                        include  '../../controller/account/add_user_admin.php';
                        break;
                    case 'delete_user':
                        include  '../../controller/account/delete_user.php';
                        break;
                    case 'delete_cate':
                        include  '../../controller/category/delete_cate.php';
                        break;
                    case 'receipts':
                        include  '../../controller/receipts/receipts.php';
                        break;
                    case 'receipt_detail':
                        include  '../../controller/receipts/receipt_detail.php';
                        break;
                    case 'delete_receipts':
                        include  '../../controller/receipts/delete_receipts.php';
                        break;
                    case 'update_status':
                        include  '../../controller/receipts/update_status.php';
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