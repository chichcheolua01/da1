<?php
include '../model/connect.php';
if (isset($_POST['btnAdd'])) {
    $name = $_POST['txtName'];
    $price = $_POST['txtPrice'];
    $desc = $_POST['txtDesc'];
    $image = $_FILES['txtImg']['name'];
    $view = 0;
    $cate = $_POST['txtCate'];
    $gender = $_POST['txtGender'];
    $query = "INSERT INTO `products`(`productName`, `productImage`, `productPrice`, `productDesc`, `productView`, `categoryId`, `productGenderId`) VALUES ('$name','$image','$price','$desc','$view','$cate','$gender')";
    connect($query);
    move_uploaded_file($_FILES["txtImg"]["tmp_name"], "../image/" . $_FILES['txtImg']['name']);
    header("Location:../view/admin/index.php?act=products");
}
?>