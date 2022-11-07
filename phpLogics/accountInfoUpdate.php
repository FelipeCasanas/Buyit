<?php
    require('connection.php');
    require('methods.php');
    $isLogged = validateCredentials();

    if($isLogged == true) {
        updateUserPersonalInfo();
        header('Location: ../account.php');
        $my_link->close();
    }
?>