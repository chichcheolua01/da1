<?php
    require_once "../../model/receipts/receipts.php";
    $receiptsList = getAllReceicpts();
    include '../../view/admin/receipts/receipts.php';
