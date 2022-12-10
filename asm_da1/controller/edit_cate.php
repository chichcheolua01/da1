<?php
include '../model/connect.php';
$idcate = $_GET['categoryId'];
if (isset($_POST['btnAdd'])) {
    $name = $_POST['txtName'];
    $type = $_POST['txtType'];
    $imageCate = $_FILES['txtImg']['name'];
    if ($imageCate == "") {
        $query = "UPDATE `categories` SET `categoryName`='$name',`categoryTypeId`='$type' WHERE `categoryId`='$idcate'";
        connect($query);
        header("Location:../view/admin/index.php?act=categories");
    } else {
        $query = "UPDATE `categories` SET `categoryName`='$name',`categoryImage`='$imageCate',`categoryTypeId`='$type' WHERE `categoryId`='$idcate'";
        connect($query);
        move_uploaded_file($_FILES["txtImg"]["tmp_name"], "../image/" . $_FILES['txtImg']['name']);
        header("Location:../view/admin/index.php?act=categories");
    }
}
?>