<?php
require_once "../../model/products/edit_product.php";
require_once "../../model/products/insert_product_admin.php";
    $id = $_GET['productId'];
    $product = getProductId($id);
    $categoryId = $product['categoryId'];
    $cate = getProductCateId($categoryId);
    $productGenderId = $product['productGenderId'];
    $genderId = getProductGender($productGenderId);
    $categories = getAllProCate();
    $gender = getAllProGender();



if (isset($_POST['btnUpdate'])) {
    $name = $_POST['txtName'];
    $price = $_POST['txtPrice'];
    $desc = $_POST['txtDesc'];
    $image = $_FILES['txtImg']['name'];
    $view = 0;
    $cate = $_POST['txtCate'];
    $gender = $_POST['txtGender'];
    if ($image == "") {
        editProductNoImg($name, $price, $desc, $cate, $gender, $id);
        move_uploaded_file($_FILES["txtImg"]["tmp_name"], "../image/" . $_FILES['txtImg']['name']);
        header("Location: ../../view/admin/index.php?act=products");
    } else {
        editProduct($name, $image, $price, $desc, $cate, $gender, $id);
        move_uploaded_file($_FILES["txtImg"]["tmp_name"], "../image/" . $_FILES['txtImg']['name']);
        header("Location: ../../view/admin/index.php?act=products");
    }
}

include '../../view/admin/products/edit_product.php';
?>