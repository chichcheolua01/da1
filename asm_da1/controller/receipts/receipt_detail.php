<?php
    require_once "../../model/receipts/receipts.php";
    $receiptsId = $_GET['receiptId'];
    $receiptId = getReceiptsId($receiptsId);
    include '../../view/admin/receipts/receipt_detail.php';
