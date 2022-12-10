
    <?php
    require_once "../../model/connect.php";
    function addCate($name, $imageCate, $type)
    {
        $query = "INSERT INTO `categories`( `categoryName`, `categoryImage`, `categoryTypeId`) VALUES ('$name','$imageCate','$type')";
        connect($query);
    }
