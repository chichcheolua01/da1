<?php
require_once "../../model/category/categories.php";
$categories = getCategories();
include '../../view/admin/category/categories.php';
?>