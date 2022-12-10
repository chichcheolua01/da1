<?php
require_once "../../model/category/add_cate.php";
require_once "../../model/category/categories.php";

if (isset($_POST['btnAdd'])) {
    $name = $_POST['txtName'];
    $type = $_POST['txtType'];
    $imageCate = $_FILES['txtImg']['name'];
    addCate($name, $imageCate, $type);
    move_uploaded_file($_FILES["txtImg"]["tmp_name"], "../image/" . $_FILES['txtImg']['name']);
    header("Location: ../../view/admin/index.php?act=categories");
}
$categories_type = getCategoryType();
include '../../view/admin/category/add_cate.php';
?>