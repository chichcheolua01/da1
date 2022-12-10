<?php
    require_once "../../model/receipts/receipts.php";
    $id = $_GET['receiptId'];
deleteReceipts($id);
header("location:../../view/admin/index.php?act=receipts");
