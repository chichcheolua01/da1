<?php
    include "../model/connect.php";
    $query = "SELECT * FROM users";
    $users = getAll($query);
    var_dump($users);

    
?>