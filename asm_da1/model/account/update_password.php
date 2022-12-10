<?php
require_once "../../model/connect.php";
function updatePassword($new_password,$userId )
{
    $query_update = "UPDATE `users` SET `userPassword`='$new_password' WHERE userId=$userId";
    connect($query_update);
}