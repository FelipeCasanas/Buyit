<?php
    require('connection.php');
    require('methods.php');
    $isLogged = validateCredentials();

    if($isLogged == true) {
        boughtProduct();
        $my_link->close();
    }
?>