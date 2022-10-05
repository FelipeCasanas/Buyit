<?php

    require('connection.php');

    session_start();
    $usr_id = $_SESSION['id'];

    if(!$usr_id) {
        header('Location: error.php?cod=4');
    } else {
        $sentence = "SELECT * FROM my_user WHERE id = '".$usr_id."'";
        $my_query = $my_link->query($sentence);
        $result = $my_query->fetch_assoc();
        $my_link->close();

            // echo 'Nombre asignado';
            if(isset($_POST['name'])) {

                $ln = strtolower($_POST['name']);

                if(strlen($ln) > 0) {
                    $update_sentence = "UPDATE my_user SET name = '".$ln."' WHERE id = '".$usr_id."'";
                    $update_query = $my_link->query($update_sentence);
                    $my_link->close();
                }
            }

            // echo 'Apellido asignado';
            if(isset($_POST['last_name'])) {

                $ln = strtolower($_POST['last_name']);

                if(strlen($ln) > 0) {
                    $update_sentence = "UPDATE my_user SET last_name = '".$ln."' WHERE id = '".$usr_id."'";
                    $update_query = $my_link->query($update_sentence);
                    $my_link->close();
                }
            }

            // echo 'Sexo asignado';
            if(isset($_POST['birthday'])) {

                $ln = $_POST['birthday'];

                if(strlen($ln) > 0) {
                    $update_sentence = "UPDATE my_user SET birthday = '".$ln."' WHERE id = '".$usr_id."'";
                    $update_query = $my_link->query($update_sentence);
                    $my_link->close();
                }
            }

            // echo 'Sexo asignado';
            if(isset($_POST['sex'])) {

                $ln = $_POST['sex'];

                if(strlen($ln) > 0) {
                    $update_sentence = "UPDATE my_user SET sex = '".$ln."' WHERE id = '".$usr_id."'";
                    $update_query = $my_link->query($update_sentence);
                    $my_link->close();
                }
            }

            // echo 'Pais asignado';
            if(isset($_POST['country'])) {

                $ln = $_POST['country'];

                if(strlen($ln) > 0) {
                    $update_sentence = "UPDATE my_user SET country = '".$_POST['country']."' WHERE id = '".$usr_id."'";
                    $update_query = $my_link->query($update_sentence);
                    $my_link->close();
                }
            }

            // echo 'Email asignado';
            if(isset($_POST['email'])) {

                $ln = strtolower($_POST['email']);

                if(strlen($ln) > 0) {
                    $update_sentence = "UPDATE my_user SET email = '".$ln."' WHERE id = '".$usr_id."'";
                    $update_query = $my_link->query($update_sentence);
                    $my_link->close();
                }
            }
    }
?>