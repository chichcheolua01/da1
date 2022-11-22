<?php
include '../model/connect.php';
$id = $_GET['productId'];
if (isset($_POST['btnUpdate'])) {
    $name = $_POST['txtName'];
    $price = $_POST['txtPrice'];
    $desc = $_POST['txtDesc'];
    $image = $_FILES['txtImg']['name'];
    $view = 0;
    $cate = $_POST['txtCate'];
    $gender = $_POST['txtGender'];
    if ($image == "") {
        $query = "UPDATE `products` SET `productName`='$name',`productPrice`='$price',`productDesc`='$desc',`categoryId`='$cate',`productGenderId`='$gender' WHERE `productId`='$id'";
        connect($query);
        echo $image, $id;
        move_uploaded_file($_FILES["txtImg"]["tmp_name"], "../image/" . $_FILES['txtImg']['name']);
        header("Location:/da1/asm_da1/view/admin/index.php?act=products");
    } else {
        $query = "UPDATE `products` SET `productName`='$name',`productImage`='$image',`productPrice`='$price',`productDesc`='$desc',`categoryId`='$cate',`productGenderId`='$gender' WHERE `productId`='$id'";
        connect($query);
        move_uploaded_file($_FILES["txtImg"]["tmp_name"], "../image/" . $_FILES['txtImg']['name']);
        header("Location:/da1/asm_da1/view/admin/index.php?act=products");
    }
}
?>