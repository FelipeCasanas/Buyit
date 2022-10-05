<?php
    require('connection.php');

    if(isset($_POST['email']) && isset($_POST['password'])) {
        $email = strtolower($_POST['email']);
        $password = $_POST['password'];

        $sentence = "SELECT * FROM `my_user` WHERE email = '".$email."' AND my_password = md5('".$password."')";
        $my_query = $my_link->query($sentence);

        if(!$my_query) {
            header("Location: error.php?cod=1");
        } else {
            
            if($my_query->num_rows == 0) {
                header("Location: error.php?cod=3");
            } else {
                session_start();
                $usr_info = $my_query->fetch_assoc();
                $_SESSION['id'] = $usr_info['id'];
                $_SESSION['name'] = strtoupper($usr_info['name']);
                $_SESSION['last_name'] = strtoupper($usr_info['last_name']);
                $_SESSION['sex'] = $usr_info['sex'];
                header("Location: ../home.php");
            }
        }
    }
    $my_link->close();
?>