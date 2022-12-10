<?php
require_once "../../model/connect.php";
function deleteUser($userId){
    $query = "DELETE FROM `users` WHERE `userId`='$userId'";
    connect($query);
}