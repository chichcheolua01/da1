<?php
ob_start();
session_start();
include '../../model/connect.php';
$product_query = "SELECT * FROM products";
$products = getAll($product_query);
$category_query = "SELECT * FROM categories";
$categories = getAll($category_query);
$gender_query = "SELECT * FROM product_gender";
$gender = getAll($gender_query);
$user_query = "SELECT * FROM users";
$users = getAll($user_query);
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
                        include './products/products.php';
                        break;
                    case 'edit_product':
                        include './products/edit_product.php';
                        break;
                    case 'add_product':
                        include './products/add_product.php';
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
</body>

</html>