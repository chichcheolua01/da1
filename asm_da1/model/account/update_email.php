<?php
require_once "../../model/connect.php";

function updateEmail($email,$userId){
    $query_update = "UPDATE `users` SET `userEmail`='$email' WHERE userId=$userId";
    connect($query_update);
}