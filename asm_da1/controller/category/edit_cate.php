<?php
require_once "../../model/category/edit_cate.php";
require_once "../../model/category/categories.php";


if (isset($_POST['btnAdd'])) {
    $idcate = $_GET['categoryId'];
    $name = $_POST['txtName'];
    $type = $_POST['txtType'];
    $imageCate = $_FILES['txtImg']['name'];
    if ($imageCate == "") {
        editCateNoImg($name, $type, $idcate);
        header("Location:../../view/admin/index.php?act=categories");
    } else {
        editCate($name, $imageCate, $type, $idcate);
        move_uploaded_file($_FILES["txtImg"]["tmp_name"], "../image/" . $_FILES['txtImg']['name']);
        header("Location:../../view/admin/index.php?act=categories");
    }
}
$cateId = $_GET['categoryId'];
$cate = getCategoryId($cateId);
$idType = $cate['categoryTypeId'];
$categories_typeId = getCategoryTypeId($idType);
$categories_type = getCategoryType();

include '../../view/admin/category/edit_cate.php';
?>