<?php

//This validate if user crendentials is OK
function validateCredentials() {
    require('connection.php');
    session_start(); 
    $usr_id = $_SESSION['id'];
    
    if(!$usr_id) {
        echo 'Session no iniciada, volver al index';
        header('Location: phpLogics/error.php?cod=4');
    } else {
        return true;
    }
}


/* ------------------------------------------------------------------------------------------------- */
//This do a query to get user favourites using his/her user id and product id
function getUserFavourites() {
    require('connection.php');
    session_start(); 

    if(isset($_GET['id'])) {
        $usr_id = $_SESSION['id'];
        $product_id = $_GET['id'];
        
        $sentence = "SELECT id FROM favourite WHERE user_id = '".$usr_id."' AND product_id = '".$product_id."';";
        $my_query = $my_link->query($sentence);

        if(!$my_query) {
            header("Location: error.php?cod=1");
        } else {
            if($my_query->num_rows > 0) {
                $sentence = "DELETE FROM favourite WHERE user_id = '".$usr_id."' AND product_id = '".$product_id."';";
                $my_query = $my_link->query($sentence);

                if(!$my_query) {
                    header("Location: phpLogics/error.php?cod=7");
                } else {
                    echo '<h6 class="favourite_process_state">Favorito eliminado correctamente</h6>';
                }
            }
        }
    }
}


/* ------------------------------------------------------------------------------------------------- */
//
function boughtProduct() {
    require('connection.php');

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

/* ------------------------------------------------------------------------------------------------- */
//

function updateUserPersonalInfo() {
    require('connection.php');
    $usr_id = $_SESSION['id'];

    $sentence = "SELECT * FROM my_user WHERE id = '".$usr_id."'";
    $my_query = $my_link->query($sentence);
    $result = $my_query->fetch_assoc();

    // echo 'Nombre asignado';
    if(isset($_POST['name'])) {
        $ln = strtolower($_POST['name']);

        if(strlen($ln) > 0) {
            $update_sentence = "UPDATE my_user SET name = '".$ln."' WHERE id = '".$usr_id."'";
            $my_link->query($update_sentence);
        }
    }

    // echo 'Apellido asignado';
    if(isset($_POST['last_name'])) {
        $ln = strtolower($_POST['last_name']);

        if(strlen($ln) > 0) {
            $update_sentence = "UPDATE my_user SET last_name = '".$ln."' WHERE id = '".$usr_id."'";
            $my_link->query($update_sentence);
        }
    }

    // echo 'Sexo asignado';
    if(isset($_POST['birthday'])) {
        $ln = $_POST['birthday'];

        if(strlen($ln) > 0) {
            $update_sentence = "UPDATE my_user SET birthday = '".$ln."' WHERE id = '".$usr_id."'";
            $my_link->query($update_sentence);
        }
    }

    // echo 'Sexo asignado';
    if(isset($_POST['sex'])) {
        $ln = $_POST['sex'];

        if(strlen($ln) > 0) {
            $update_sentence = "UPDATE my_user SET sex = '".$ln."' WHERE id = '".$usr_id."'";
            $my_link->query($update_sentence);
        }
    }

    // echo 'Pais asignado';
    if(isset($_POST['country'])) {
        $ln = $_POST['country'];

        if(strlen($ln) > 0) {
            $update_sentence = "UPDATE my_user SET country = '".$_POST['country']."' WHERE id = '".$usr_id."'";
             $my_link->query($update_sentence);
        }
    }

    // echo 'Email asignado';
    if(isset($_POST['email'])) {
        $ln = strtolower($_POST['email']);

        if(strlen($ln) > 0) {
            $update_sentence = "UPDATE my_user SET email = '".$ln."' WHERE id = '".$usr_id."'";
            $my_link->query($update_sentence);
        }
    }   
}

/* ------------------------------------------------------------------------------------------------- */ 
//Index and home page PHP methods to show Recomended products, Ads and Products

    function setRecomended() {
        require('connection.php');
        $my_query = $my_link->query("SELECT * FROM product WHERE exposed = 1;");

        if(!$my_query) {
            header("Location: error.php?cod=1");
        } else {
            $i = 1;
            while($result = $my_query->fetch_array()) {
                $product_id = $result['id'];
                $product_name = $result['product_name'];
                $description = $result['description'];
                $contact_info = $result['product_condition'];
                $operation = 0;

                echo '<div class="recomended_Square">
                        <img src="img/products/box.png" alt="" onclick="showAd('.$i.', '.$operation.', '.$product_id.')">
                        <p class="sponsor_title" id="recomendedTitle'.$i.'">'.$product_name.'</p>
                        <p class="sponsor_description" id="recomendedDescription'.$i.'">'.$description.'</p>
                        <p class="sponsor_contact_info" id="recomendedContactInfo'.$i.'">'.$contact_info.'</p>
                        </div>';
                $i++;
            }
        }
    }

    function setAds() {
        require('connection.php');
        $my_query = $my_link->query("SELECT * FROM ad WHERE active = 1;");

        if(!$my_query) {
            header("Location: error.php?cod=1");
        } else {
            $i = 1;
            while($result = $my_query->fetch_array()) {
                $title = $result['title'];
                $description = $result['description'];
                $contact_info = $result['contact_info'];
                $redirect_to = $result['redirect_to'];
                $operation = 1;

                echo '<div class="ad_Square">
                        <img src="img/products/box.png" alt="" onclick="showAd('.$i.', '.$operation.',`'.$redirect_to.'`)">
                        <p class="sponsor_title" id="sponsorTitle'.$i.'">'.$title.'</p>
                        <p class="sponsor_description" id="sponsorDescription'.$i.'">'.$description.'</p>
                        <p class="sponsor_contact_info" id="sponsorContactInfo'.$i.'">'.$contact_info.'</p>
                        </div>';
                $i++;
            }
        }
    }

    function setProducts() {
        require('connection.php');
        $sentence = "SELECT * FROM product ORDER BY sold DESC LIMIT 50;";
        $my_query = $my_link->query($sentence);

        if(!$my_query) {
            header("Location: error.php?cod=1");
        } else {
            while($result = $my_query->fetch_array()) {
                $id = $result['id'];
                $product_name = strtoupper($result['product_name']);
                $product_condition = strtoupper($result['product_condition']);
                $price = $result['price'];

                echo '<div class="product">

                <div class="product_image_container">
                    <img src="img/products/box.png" alt="imagen de prueba">
                </div>
        
                <div class="product_price_title">
                <p class="product_price">$' . number_format($price,2,',','.') . '</p>
                    <p class="product_name">' . $product_name . '</p>
                </div>
        
                <div class="product_see_button">
                    <a href="productView.php?id='.$id.'">Ver</a>
                </div>
        
                </div>';
            }
        }
    }


/* ------------------------------------------------------------------------------------------------- */ 



/* ------------------------------------------------------------------------------------------------- */ 

//This function get the products the user liked and set that in myFavs page
function setFavProducts() {
    require('connection.php');
    $usr_id = $_SESSION['id'];

    $sentence = "SELECT product_id FROM favourite WHERE user_id = '".$usr_id."';";
    $my_query = $my_link->query($sentence);

    if(!$my_query) {
        header("Location: error.php?cod=1");
    } else {
        while($result = $my_query->fetch_array()) {

            $sentence2 = "SELECT * FROM product WHERE id = '".$result['product_id']."'";
            $product_info_query = $my_link->query($sentence2);

            if(!$product_info_query) {
                header('Location: phpLogics/error.php?cod=5');
            } else {
                while($product_info = $product_info_query->fetch_array()) {
                    $product_name = strtoupper($product_info['product_name']);
                    echo '<div class="product">
    
                    <div class="product_img_container"><img src="img/products/box.png" alt="Foto del favorito"></div>
    
                        <div class="product_info_container">
                            <div class="product_name_container"><a href="productView.php?id='.$product_info['id'].'" class="product_name">'.$product_name.'</a></div>
                            <div class="description_container"><p class="product_description">'.$product_info['description'].'</p></div>
                        </div>

                        <form action="myFavs.php" class="actions_container" method="get">
                            <p class="product_condition">'.strtoupper($product_info['product_condition']).'</p>
                            <p class="product_price">$'.number_format($product_info['price'],2,',','.').'</p>

                            <div>
                                <a href="myFavs.php?id='.$product_info['id'].'">Eliminar</a>
                            </div>

                        </form>
                    </div>';
                }
            }
        }
    }
}


?>