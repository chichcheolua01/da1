<?php
session_start();
if (isset($_SESSION['userId'])) {
    echo $_SESSION['userId'];
    unset($_SESSION['userId']);
    header("Location: ../view/user/index.php?act=");
}
?>