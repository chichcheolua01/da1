<?php
require_once "../../model/category/delete_cate.php";
$categoryId = $_GET['categoryId'];
deleteCate($categoryId);
header("Location:../../view/admin/index.php?act=categories");
?>