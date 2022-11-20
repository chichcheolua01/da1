<?php
include '../../model/connect.php';

$category_query = "SELECT * FROM categories";
$categories = getAll($category_query);
if (isset($_POST['btnAdd'])) {
    $name = $_POST['txtName'];
    $price = $_POST['txtPrice'];
    $desc = $_POST['txtDesc'];
    $image = $_FILES['txtImg']['name'];
    $view = $_POST['txtView'];
    $cate = $_POST['txtCate'];
    $gender = $_POST['txtGender'];
    $query = "INSERT INTO `products`(`productName`, `productImage`, `productPrice`, `productDesc`, `productView`, `categoryId`, `productGenderId`) VALUES ('$name','$image','$price','$desc','$view','$cate','$gender')";
    connect($query);
    move_uploaded_file($_FILES["txtImg"]["tmp_name"], "../../image/" . $_FILES['txtImg']['name']);
    header("Location: ./add.php");
}
?>
<a href="signup.php">Đăng ký</a>
<form action="" method="POST" enctype="multipart/form-data">
    <label for="">Name</label>
    <br><input type="text" name="txtName" id="">
    <br>
    <label for="">Img</label>
    <br><input type="file" name="txtImg" id="">
    <br>
    <label for="">Price</label>
    <br><input type="number" name="txtPrice" id="">
    <br>
    <label for="">Desc</label>
    <br><input type="text" name="txtDesc" id="">
    <br>
    <label for="">productView</label>
    <br><input type="number" name="txtView" id="">
    <br>
    <label for="">cateId</label>
    <br>
    <select name="txtCate" id="">
        <?php foreach ($categories as $key => $item): ?>
        <option value="<?php echo $item['categoryId'] ?>">
            <?php echo $item['categoryName'] ?>
        </option>
        <?php endforeach ?>
    </select>
    <br>
    <label for="">Gender</label>
    <br><input type="text" name="txtGender" id="">
    <br>
    <button name="btnAdd">Add</button>
</form>