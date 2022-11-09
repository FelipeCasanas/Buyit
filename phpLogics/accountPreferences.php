<?php 
    require('connection.php');
    require('methods.php');
    $isLogged = validateCredentials();

    if($isLogged == true) {
        $my_link->query("UPDATE user_preferences SET dark_mode = 0 WHERE id = '".$_SESSION['id']."';");
        $my_link->query("UPDATE user_preferences SET `recomendations` = 0 WHERE id = '".$_SESSION['id']."';");

        if(isset($_GET['dark_mode'])) {
            $my_query = $my_link->query("UPDATE user_preferences SET dark_mode = 1 WHERE id = '".$_SESSION['id']."';");
        }
        if(isset($_GET['language'])) {
            if($_GET['language'] == 'es') {
                $my_link->query("UPDATE user_preferences SET `language` = 'es' WHERE id = '".$_SESSION['id']."';");
            } else if($_GET['language'] == 'en') {
                $my_link->query("UPDATE `user_preferences` SET `language`= 'en' WHERE `id` = '".$_SESSION['id']."';");
            }
        }
        if(isset($_GET['receive_recomendations'])) {
            $my_query = $my_link->query("UPDATE user_preferences SET `recomendations` = 1 WHERE id = '".$_SESSION['id']."';");
        }
        header('Location: ../account.php');
        $my_link->close();
    }
?>