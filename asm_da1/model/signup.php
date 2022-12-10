<?php
require_once "../../model/connect.php";
function getOneUser($userName){
        $user_query = "SELECT `userName` FROM `users` WHERE `userName`='$userName'";
        $users = getAll($user_query);
        return $users;
    }
    function addUser($userName, $userPassword, $userEmail, $userFullname, $userAccess, $userImage){
        $query = "INSERT INTO users( `userName`, `userPassword`, `userEmail`, `userFullname`, `userAccess`, `userImage`) VALUES ('$userName','$userPassword','$userEmail','$userFullname','$userAccess','$userImage')";
        connect($query);
    }
?>