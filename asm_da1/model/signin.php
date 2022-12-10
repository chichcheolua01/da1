<?php
require_once "../../model/connect.php";
function getUserName($userName){
        $one_login = "SELECT * FROM users WHERE userName = '$userName'";
        $login_user = getOne($one_login);
        return $login_user;
    }
?>