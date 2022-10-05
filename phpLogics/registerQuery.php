<?php
    require("connection.php");
    
    if(isset($_POST['name']) && isset($_POST['lastName']) && isset($_POST['email']) && isset($_POST['password'])) {
        $name = strtolower($_POST['name']);
        $last_name = strtolower($_POST['lastName']);
        $email = strtolower($_POST['email']);
        $password = $_POST['password'];

        $sentence = "SELECT * FROM `my_user` WHERE email = '".$email."'";
        $my_query = $my_link->query($sentence);

        if(!$my_query) {
            header("Location: error.php?cod=1");
        } else {
            if($my_query->num_rows == 1) {
                header("Location: error.php?cod=2");
            } else {
                $sentence = "INSERT INTO `my_user`() VALUES(null, null, '".$name."', '".$last_name."', null, null, null, '".$email."', md5('".$password."'));";
                $my_query = $my_link->query($sentence);
            }
        }
    }
    $my_link->close();
?>