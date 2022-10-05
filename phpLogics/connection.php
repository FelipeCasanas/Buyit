<?php
    $my_link = new mysqli("localhost", "root", "", "data");

    if(!$my_link) {
        header("Location: error.php?cod=0");
    }
?>