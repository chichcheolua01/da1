<?php
require_once "../../model/connect.php";
function getAllReceicpts()
{
    $query = "SELECT * FROM receipts";
    $receiptsList = getAll($query);
    return $receiptsList;
}
function getReceiptsId($receiptsId)
{
    $query = "SELECT *  
    FROM cart where receiptId = $receiptsId";
    $receiptId = getAll($query);
    return $receiptId;
}
function updateStatus($status, $receiptId)
{
    $query = "UPDATE `receipts` SET `status`='$status' WHERE `receiptId`='$receiptId'";
    connect($query);
}
function deleteReceipts($id)
{
    $query = "DELETE FROM `receipts` WHERE `receiptId`='$id'";
    $sql = "DELETE FROM `cart` WHERE `receiptId`='$id'";
    connect($query);
    connect($sql);
}
