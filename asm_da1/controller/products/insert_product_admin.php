<?php
require_once "../../model/products/insert_product_admin.php";

$products = getAllProducts();
foreach ($products as $key => $item): ?>
    <?php
    $categoryId = $item['categoryId'];
    $cate = getProductCateId($categoryId);
    $productGenderId = $item['productGenderId'];
    $gender = getProductGender($productGenderId);
    ?>
<?php endforeach;

include '../../view/admin/products/products.php';