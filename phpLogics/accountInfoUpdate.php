<?php
    require('connection.php');
    require('methods.php');
    $isLogged = validateCredentials();

    if($isLogged == true) {
        updateUserPersonalInfo();
        echo "Actualizado correctamente";
        $my_link->close();
    }
?>