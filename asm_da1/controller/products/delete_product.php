<?php
require_once "../../model/products/delete_product.php";
$id = $_GET['productId'];
deleteProduct($id);
header("Location:../../view/admin/index.php?act=products");
?>