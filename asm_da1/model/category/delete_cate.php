    <?php
    require_once "../../model/connect.php";
    function deleteCate($categoryId)
    {
        $query = "DELETE FROM `categories` WHERE `categoryId`='$categoryId'";
        connect($query);
    }