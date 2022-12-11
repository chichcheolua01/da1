<?php
    require_once "../../model/receipts/receipts.php";
    echo ('a');
if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
    $receiptsList = getReceiptsUserId($userId);
    $receiptStatus = getStatus($userId);
}
include '../../view/user/account/receipts.php';
