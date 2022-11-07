<?php
    require("connection.php");
    require('methods.php');
    
    if(isset($_POST['name']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password'])) {
        $name = strtolower($_POST['name']);
        $last_name = strtolower($_POST['lastName']);
        $email = strtolower($_POST['email']);
        $password = $_POST['password'];

        $my_query = $my_link->query("SELECT * FROM `my_user` WHERE `email` = '".$email."';");

        if(!$my_query) {
            header("Location: error.php?cod=1");
        } else {
            if($my_query->num_rows == 1) {
                header("Location: error.php?cod=2");
            } else {
                session_start();
                $my_link->query("INSERT INTO my_user(`name`, `last_name`, `email`, `my_password`) VALUES ('".$name."', '".$last_name."', '".$email."', md5('".$password."'));");
                $my_query = $my_link->query("SELECT * FROM my_user WHERE `email` = '".$email."';");
                $result = $my_query->fetch_array();
                $_SESSION['id'] = $result['id'];
                $_SESSION['name'] = strtoupper($result['name']);
                $_SESSION['last_name'] = strtoupper($result['last_name']);
                $_SESSION['sex'] = $result['sex'];
                createUserPreferences();
            }
        }
    }
    $my_link->close();
?>