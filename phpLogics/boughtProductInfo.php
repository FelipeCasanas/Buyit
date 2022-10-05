<?php

    require('connection.php');

    session_start();
    $usr_id = $_SESSION['id'];
    $product_id = $_SESSION['product_id'];

    if($usr_id == 0) {
        header("Location: error.php?cod=4");
    } else {
        if(isset($_GET['favourites'])) {

            $sentence = "SELECT * FROM favourite WHERE user_id = '".$usr_id."' AND product_id = '".$product_id."';";
            $my_query = $my_link->query($sentence);
    
            if($my_query->num_rows > 0) {
                header("Location: error.php?cod=6");
            } else {
                $sentence = "INSERT INTO favourite(user_id, product_id) VALUES ('".$usr_id."', '".$product_id."');";
                $my_query = $my_link->query($sentence);
    
                if(!$my_query) {
                    header("Location: error.php?cod=1");
                } else {
                    header("Location: ../productView.php?id=$product_id");
                }
            }
        }
    
        if(isset($_POST['variant']) && isset($_POST['sent_to']) && isset($_POST['address']) && isset($_POST['quantity']) && isset($_POST['city'])) {
            echo $_POST['variant'].$_POST['sent_to'].$_POST['address'].$_POST['quantity'].$_POST['city'];
        }
    }

?>