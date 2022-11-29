<?php
include '../model/connect.php';
if (isset($_POST['btnAdd'])) {
    $name = $_POST['txtName'];
    $type = $_POST['txtType'];
    $imageCate = $_FILES['txtImg']['name'];
    echo $name . "-" . $type . "-" . $imageCate;
    $query = "INSERT INTO `categories`( `categoryName`, `categoryImage`, `categoryTypeId`) VALUES ('$name','$imageCate','$type')";
    connect($query);
    move_uploaded_file($_FILES["txtImg"]["tmp_name"], "../image/" . $_FILES['txtImg']['name']);
    header("Location:/da1/asm_da1/view/admin/index.php?act=categories");
}
?>