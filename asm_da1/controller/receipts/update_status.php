<?php
    require_once "../../model/receipts/receipts.php";
    $receiptsId = $_GET['receiptId'];
    $status = $_POST['status'];
    updateStatus($status, $receiptsId);
    header("Location: ../../view/admin/index.php?act=receipts");

