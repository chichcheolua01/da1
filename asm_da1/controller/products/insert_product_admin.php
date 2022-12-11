<?php
require_once "../../model/products/insert_product_admin.php";

$products = getAllProducts();
if (isset($_POST['btnSearch'])) {
    $prodname = $_POST['txtName'];
    $products = searchPro($prodname);

}
if (isset($_GET['sort'])) {
    if ($_GET['sort'] == "asc") {
        $product_query = "SELECT * FROM products JOIN product_gender on products.productGenderId = product_gender.productGenderId ORDER BY `products`.`productPrice` ASC";
        $products = getAll($product_query);
    }
    if ($_GET['sort'] == "desc") {
        $product_query = "SELECT * FROM products JOIN product_gender on products.productGenderId = product_gender.productGenderId ORDER BY `products`.`productPrice` DESC";
        $products = getAll($product_query);
    }
}
foreach ($products as $key => $item): ?>
    <?php
    $categoryId = $item['categoryId'];
    $cate = getProductCateId($categoryId);
    $productGenderId = $item['productGenderId'];
    $gender = getProductGender($productGenderId);
    ?>
<?php endforeach;

include '../../view/admin/products/products.php';