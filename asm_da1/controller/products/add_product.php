<?php
require_once "../../model/products/insert_product_admin.php";
require_once "../../model/products/add_product.php";
$categories = getAllProCate();
$gender = getAllProGender();

if (isset($_POST['btnAdd'])) {
    $name = $_POST['txtName'];
    $price = $_POST['txtPrice'];
    $desc = $_POST['txtDesc'];
    $image = $_FILES['txtImg']['name'];
    $view = 0;
    $cate = $_POST['txtCate'];
    $gender = $_POST['txtGender'];
    addProduct($name, $image, $price, $desc, $view, $cate, $gender);
    move_uploaded_file($_FILES["txtImg"]["tmp_name"], "../image/" . $_FILES['txtImg']['name']);
    header("Location: ../../view/admin/index.php?act=products");
}
include '../../view/admin/products/add_product.php';
?>