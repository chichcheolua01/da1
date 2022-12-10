<?php
require_once "../../model/connect.php";
function getUser($userId )
{
    $query = "SELECT * FROM `users` WHERE userId=$userId";
    $user = getOne($query);
    return $user;
}
function getAllUser(){
    $query = "SELECT * FROM users";
    $users = getAll($query);
    return $users;
}
