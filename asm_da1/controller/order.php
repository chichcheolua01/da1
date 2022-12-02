<?php 

function taodonhang($email,$userName,$address,$phoneNumber,$province,$district,$commune,$dispatch_box,$date,$note,$userId){
    $query = "INSERT INTO receipts
    (
        email, 
        userName,
        address,
        phoneNumber,
        province, 
        district,
        commune, 
        dispatch_box,
        received_date, 
        note,
        userId )  VALUES(
            '$email'
            ,'$userName',
            '$address',
            '$phoneNumber',
            '$province',
            '$district',
            '$commune',
            '$dispatch_box',
            '$date',
            '$note',
            '$userId')  
    ";
        return id($query);
        
}
 function addtocart($orderId,$productId,$userId,$productName,$productPrice,$productImage){
    $query = "INSERT INTO cart
    (
        receiptId, 
        productId,
        userId,
        productName,
        productPrice, 
        productImage )  VALUES(
            '$orderId',
            '$productId',
            '$userId',
            '$productName',
            '$productPrice',
            '$productImage')  
    ";
        connect($query);

 }

?>