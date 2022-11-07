<?php


/*


Code documentation:

The methods is ordered by categories and the categories separed by blocks:
1. User methods
2. Products methods
3. Other methods


Category 1 have the blocks in the next order:
1. validateCredentials()
2. getBasicUserData() and it methods: getAge(), getSex() and getCountry()
3. getAllUserData()
4. updateUserPersonalInfo()
5. createUserFavourites()
6. setUserFavourites()
7. createUserPreferences()
8. getUserPreferences()
9. setUserPreferences()
10. setUserRole()


Category 2 have the blocks in the next order:
1. searchProducts()
2. setRecomended()
3. setAds()
4. setProducts()
5. boughtProduct()


Category 2 have the blocks in the next order:
1. getErrorCode()


*/


//This validate if user crendentials is OK, this used in important windows how Home, account etc
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

//This methods seccion includes all necesary methods to update user personal information.

/*this is called from account.php and when this execute do a call the other three methods. getAge, getSex, getCountry; 
later this save the results in a array "personalInfo" and return that
*/
function getBasicUserData($birthDate, $usr_sex, $usr_country) {
    $age = getAge($birthDate);
    $usr_sex = getSex($usr_sex);
    $usr_country = getCountry($usr_country);

    $personalInfo[] = ['age' => $age,'sex' => $usr_sex,'country' => $usr_country];
    return $personalInfo;
}

//convert a date to years old
function getAge($birthDate) {
    $birth = new DateTime($birthDate);
    $now = new DateTime(date("Y-m-d"));
    $diference = $now->diff($birth);
    return $diference->format("%y");
}

//this get a parameter user sex, if it's f that's woman, if it's m that's man, else that's non binary
function getSex($usr_sex) {
    if($usr_sex == 'f') {
        $usr_sex = 'Mujer';
    } else if($usr_sex == 'm') {
        $usr_sex = 'Hombre';
    } else {
        $usr_sex = 'No binario';
    }
    return $usr_sex;
}

//convert a country code to it country name and return that
function getCountry($usr_country) {
    switch($usr_country) {
        case 'AF': $usr_country = 'Afganistan'; break;
        case 'AL': $usr_country = 'Albania'; break;
        case 'DZ': $usr_country = 'Algeria'; break;
        case 'AS': $usr_country = 'Somoa Americana'; break;
        case 'AD': $usr_country = 'Andorra'; break;
        case 'AO': $usr_country = 'Angola'; break;
        case 'AI': $usr_country = 'Anguila'; break;
        case 'AR': $usr_country = 'Argentina'; break;
        case 'AM': $usr_country = 'Armenia'; break;
        case 'AW': $usr_country = 'Aruba'; break;
        case 'AU': $usr_country = 'Australia'; break;
        case 'AT': $usr_country = 'Austria'; break;
        case 'AZ': $usr_country = 'Azerbaijan'; break;
        case 'BS': $usr_country = 'Bahamas'; break;
        case 'BH': $usr_country = 'Baréin'; break;
        case 'BD': $usr_country = 'Bangladesh'; break;
        case 'BB': $usr_country = 'Barbados'; break;
        case 'BY': $usr_country = 'Bielorrusia'; break;
        case 'BE': $usr_country = 'Belgica'; break;
        case 'BZ': $usr_country = 'Belice'; break;
        case 'BJ': $usr_country = 'Benin'; break;
        case 'BM': $usr_country = 'Bermuda'; break;
        case 'BT': $usr_country = 'Butan'; break;
        case 'BO': $usr_country = 'Bolivia'; break;
        case 'BA': $usr_country = 'Bosnia'; break;
        case 'BW': $usr_country = 'Botsuana'; break;
        case 'BR': $usr_country = 'Brazil'; break;
        case 'BG': $usr_country = 'Bulgaria'; break;
        case 'KH': $usr_country = 'Camboya'; break;
        case 'CM': $usr_country = 'Camerún'; break;
        case 'CA': $usr_country = 'Canada'; break;
        case 'CV': $usr_country = 'Cabo Verde'; break;
        case 'KY': $usr_country = 'Islas Caiman'; break;
        case 'CF': $usr_country = 'R. Central Africa'; break;
        case 'TD': $usr_country = 'Chad'; break;
        case 'CL': $usr_country = 'Chile'; break;
        case 'CN': $usr_country = 'China'; break;
        case 'CO': $usr_country = 'Colombia'; break;
        case 'KM': $usr_country = 'Comoros'; break;
        case 'CG': $usr_country = 'República Democrática del Congo'; break;
        case 'CR': $usr_country = 'Costa Rica'; break;
        case 'HR': $usr_country = 'Croacia'; break;
        case 'CU': $usr_country = 'Cuba'; break;
        case 'CZ': $usr_country = 'Republica Checa'; break;
        case 'DK': $usr_country = 'Dinamarca'; break;
        case 'DO': $usr_country = 'Republica Dominicana'; break;
        case 'EC': $usr_country = 'Ecuador'; break;
        case 'EG': $usr_country = 'Egipto'; break;
        case 'SV': $usr_country = 'El Salvador'; break;
        case 'GQ': $usr_country = 'Guinea Ecuatorial'; break;
        case 'EE': $usr_country = 'Estonia'; break;
        case 'ET': $usr_country = 'Etiopia'; break;
        case 'FI': $usr_country = 'Finlandia'; break;
        case 'FR': $usr_country = 'Francia'; break;
        case 'GF': $usr_country = 'Guyana Francesa'; break;
        case 'GE': $usr_country = 'Georgia'; break;
        case 'DE': $usr_country = 'Alemania'; break;
        case 'GR': $usr_country = 'Grecia'; break;
        case 'GT': $usr_country = 'Guatemala'; break;
        case 'HT': $usr_country = 'Haiti'; break;
        case 'HN': $usr_country = 'Honduras'; break;
        case 'HK': $usr_country = 'Hong Kong'; break;
        case 'HU': $usr_country = 'Hungary'; break;
        case 'IS': $usr_country = 'IceLand'; break;
        case 'IN': $usr_country = 'India'; break;
        case 'ID': $usr_country = 'Indonesia'; break;
        case 'IR': $usr_country = 'Iran'; break;
        case 'IQ': $usr_country = 'Iraq'; break;
        case 'IE': $usr_country = 'Irlanda'; break;
        case 'IL': $usr_country = 'Israel'; break;
        case 'IT': $usr_country = 'Italia'; break;
        case 'JM': $usr_country = 'Jamaica'; break;
        case 'JP': $usr_country = 'Japon'; break;
        case 'KZ': $usr_country = 'Kazajistan'; break;
        case 'KE': $usr_country = 'Kenia'; break;
        case 'KR': $usr_country = 'Corea del Sur'; break;
        case 'KW': $usr_country = 'Kuwait'; break;
        case 'LT': $usr_country = 'Lituania'; break;
        case 'LU': $usr_country = 'Luxemburgo'; break;
        case 'MG': $usr_country = 'Madagascar'; break;
        case 'MX': $usr_country = 'Mexico'; break;
        case 'MC': $usr_country = 'Monaco'; break;
        case 'NP': $usr_country = 'Nepal'; break;
        case 'NL': $usr_country = 'Paises Bajos'; break;
        case 'NI': $usr_country = 'Nicaragua'; break;
        case 'PA': $usr_country = 'Panama'; break;
        case 'PY': $usr_country = 'Paraguay'; break;
        case 'PE': $usr_country = 'Peru'; break;
        case 'PL': $usr_country = 'Polonia'; break;
        case 'PT': $usr_country = 'Portugal'; break;
        case 'PR': $usr_country = 'Puerto Rico'; break;
        case 'QA': $usr_country = 'Qatar'; break;
        case 'RO': $usr_country = 'Romania'; break;
        case 'RU': $usr_country = 'Rusia'; break;
        case 'SA': $usr_country = 'Arabia Saudita'; break;
        case 'SG': $usr_country = 'Singapur'; break;
        case 'ES': $usr_country = 'España'; break;
        case 'SE': $usr_country = 'Suecia'; break;
        case 'CH': $usr_country = 'Suiza'; break;
        case 'AE': $usr_country = 'Emiratos Arabes'; break;
        case 'GB': $usr_country = 'Reino Unido'; break;
        case 'US': $usr_country = 'Estados Unidos'; break;
        case 'UY': $usr_country = 'Uruguay'; break;
        case 'VE': $usr_country = 'Venezuela'; break;
        case 'VN': $usr_country = 'Vietnam'; break;
    }

    return $usr_country;
}

function getAllUserData() {
    require('connection.php');
    $usr_id = $_SESSION['id'];
        $get_all_user_info_query = $my_link->query("SELECT * FROM my_user WHERE id = '".$usr_id."';");

        if(!$get_all_user_info_query) {
            header('Location: phpLogics/error.php?cod=1');
        } else {
            $result = $get_all_user_info_query->fetch_assoc();
            $usr_name = strtoupper($result['name']);
            $usr_last_name = strtoupper($result['last_name']);
            $birthDate = $result['birthday'];
            $age = getAge($birthDate);
            $usr_sex = $result['sex'];
            $usr_country = $result['country'];
            $usr_email = $result['email'];

            $personalInfo = getBasicUserData($birthDate, $usr_sex, $usr_country);
            $age = $personalInfo[0]['age'];
            $usr_sex = $personalInfo[0]['sex'];
            $usr_country = $personalInfo[0]['country'];  
            
            $fullData[] = [
                'user_name' => $usr_name,
                'user_last_name' => $usr_last_name,
                'birthDate' => $birthDate,
                'age' => $age,
                'user_sex' => $usr_sex,
                'user_country' => $usr_country,
                'user_email' => $usr_email
            ];

            return $fullData;
        }
}


/* ------------------------------------------------------------------------------------------------- */

//This method do account update operations to account.php using accountInfoUpdater.php 
function updateUserPersonalInfo() {
    require('connection.php');
    $usr_id = $_SESSION['id'];

    $my_query = $my_link->query("SELECT * FROM my_user WHERE id = '".$usr_id."';");
    $result = $my_query->fetch_assoc();

    // echo 'Nombre asignado';
    if(isset($_POST['name'])) {
        $ln = strtolower($_POST['name']);

        if(strlen($ln) > 0) {
            $my_link->query("UPDATE my_user SET name = '".$ln."' WHERE id = '".$usr_id."';");
        }
    }

    // echo 'Apellido asignado';
    if(isset($_POST['last_name'])) {
        $ln = strtolower($_POST['last_name']);

        if(strlen($ln) > 0) {
            $my_link->query("UPDATE my_user SET last_name = '".$ln."' WHERE id = '".$usr_id."';");
        }
    }

    // echo 'Sexo asignado';
    if(isset($_POST['birthday'])) {
        $ln = $_POST['birthday'];

        if(strlen($ln) > 0) {
            $my_link->query("UPDATE my_user SET birthday = '".$ln."' WHERE id = '".$usr_id."';");
        }
    }

    // echo 'Sexo asignado';
    if(isset($_POST['sex'])) {
        $ln = $_POST['sex'];

        if(strlen($ln) > 0) {
            $my_link->query("UPDATE my_user SET sex = '".$ln."' WHERE id = '".$usr_id."';");
        }
    }

    // echo 'Pais asignado';
    if(isset($_POST['country'])) {
        $ln = $_POST['country'];

        if(strlen($ln) > 0) {
             $my_link->query("UPDATE my_user SET country = '".$_POST['country']."' WHERE id = '".$usr_id."';");
        }
    }

    // echo 'Email asignado';
    if(isset($_POST['email'])) {
        $ln = strtolower($_POST['email']);

        if(strlen($ln) > 0) {
            $my_link->query("UPDATE my_user SET email = '".$ln."' WHERE id = '".$usr_id."';");
        }
    }   
    $my_link->close();
}


/* ------------------------------------------------------------------------------------------------- */

//This do a query to get user favourites using his/her user id and product id
function getUserFavourites() {
    require('connection.php');
    session_start(); 

    if(isset($_GET['id'])) {
        $usr_id = $_SESSION['id'];
        $product_id = $_GET['id'];
        
        $my_query = $my_link->query("SELECT id FROM favourite WHERE user_id = '".$usr_id."' AND product_id = '".$product_id."';");

        if(!$my_query) {
            header("Location: error.php?cod=1");
        } else {
            if($my_query->num_rows > 0) {
                $my_query = $my_link->query("DELETE FROM favourite WHERE user_id = '".$usr_id."' AND product_id = '".$product_id."';");

                if(!$my_query) {
                    header("Location: phpLogics/error.php?cod=7");
                } else {
                    echo '<h6 class="favourite_process_state">Favorito eliminado correctamente</h6>';
                }
            }
        }
    }
    $my_link->close();
}


/* ------------------------------------------------------------------------------------------------- */ 

//This function get the products the user liked and show that in myFavs.php page
function setUserFavourites() {
    require('connection.php');
    $usr_id = $_SESSION['id'];

    $my_query = $my_link->query("SELECT product_id FROM favourite WHERE user_id = '".$usr_id."';");

    if(!$my_query) {
        header("Location: error.php?cod=1");
    } else {
        while($result = $my_query->fetch_array()) {

            $product_info_query = $my_link->query("SELECT * FROM product WHERE id = '".$result['product_id']."'");

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
    $my_link->close();
}


/* ------------------------------------------------------------------------------------------------- */

function createUserPreferences() {
    require('connection.php');
    $my_link->query("INSERT INTO `user_preferences`(`id`, `admin`, `dark_mode`, `language`, `recomendations`) VALUES ('".$_SESSION['id']."', '0', '0', '0', '0');");
    header("Location: ../home.php");
}

function getUserPreferences() {
    require('connection.php');
    $my_query = $my_link->query("SELECT * FROM user_preferences WHERE id = '".$_SESSION['id']."';");

    if(!$my_query) {
        header("Location: error.php?cod=1");
    } else {
        $result = $my_query->fetch_array();
        echo "
        <div class=preferences_checkbox>
            <p id=darkModeCheckboxStatus>'".$result['dark_mode']."'</p>
            <p id=languageCheckboxStatus>'".$result['language']."'</p>
            <p id=recomendationsCheckboxStatus>'".$result['recomendations']."'</p>
        </div>
        ";
    }
}

function setUserPreferences() {
    require('connection.php');

    if(isset($_POST['dark_mode'])) {
        $my_query = $my_link->query("SELECT dark_mode FROM user_preferences WHERE id = '".$_SESSION['id']."';");
        $result = $my_query->fetch_array();

        if($result['dark_mode'] == '1') {
            $my_query = $my_link->query("UPDATE user_preferences SET dark_mode = 0 WHERE id = '".$_SESSION['id']."';");
        } else {
            $my_query = $my_link->query("UPDATE user_preferences SET dark_mode = 1 WHERE id = '".$_SESSION['id']."';");
        }
    }

    if(isset($_POST['language'])) {
        $my_query = $my_link->query("UPDATE user_preferences SET language = 1 WHERE id = '".$_SESSION['id']."';");
    }

    if(isset($_POST['receive_recomendations'])) {
        $my_query = $my_link->query("UPDATE user_preferences SET receive_recomendations = 1 WHERE id = '".$_SESSION['id']."';");
    }
}


/* ------------------------------------------------------------------------------------------------- */

function setUserRole() {
    require('connection.php');
    $usr_id = $_SESSION['id'];
    $user_role_query = $my_link->query("SELECT `admin` FROM `user_preferences` WHERE id = '".$usr_id."';");

    if(!$user_role_query) {
        header('Location: phpLogics/error.php?cod=1');
    } else {
        $user_role_result = $user_role_query->fetch_array();
        if($user_role_result['admin'] == '1') {
            echo '
            <div class="admin_window">
                <div class="admin_product_zone">
                    <p>ACCIONES DE PRODUCTO</p>
                    <button class="admin_product_button" id="">AÑADIR</button>
                    <button class="admin_product_button" id="">ELIMINAR</button>
                    <button class="admin_product_button" id="">EDITAR</button>
                </div>
                <div class="admin_user_zone">
                    <div class="admin_user_actions">
                        <button class="admin_user_button" id="createUserButton"><img src="img/createUser.png"
                            alt=""></button>
                        <button class="admin_user_button" id="deleteUserButton"><img src="img/deleteUser.png"
                            alt=""></button>
                        <button class="admin_user_button" id="updateUserButton"><img src="img/editUser.png"
                            alt=""></button>
                        <button class="admin_user_button" id="setAdminUserButton"><img src="img/assignAdmin.png"
                            alt=""></button>
                    </div>
                </div>
            </div>';
        } else {
            echo '
            <div class="favourite_stores">
                <div class="favourite_store_card">
                    <img class="favourite_store_img" src="img/luxuryMall.jpg" alt="">
                    <p class="favourite_store_paragrapf">Marca</p>
                </div>
            </div>';
        }
    }
}

/* ------------------------------------------------------------------------------------------------- */



/* ------------------------------------------------------------------------------------------------- */


//this function search coincidences in product table and print that in screen
function searchProducts() {
    require('connection.php');
    $product = $_GET['search'];
                
    $my_query = $my_link->query("SELECT * FROM product WHERE product_name LIKE '%".$product."%';");
    if(!$my_query) {
        header('Location: error.php?cod=1');
    } else {
        $total_results = $my_query->num_rows;
        echo '
            <div class="total_products_container">
                <p id="totalSlots">Numero de resultados: ' . $total_results . '</p>
            </div>';
        while($result = $my_query->fetch_array()) {
            $product_name = strtoupper($result['product_name']);
            $description = $result['description'];
            $product_condition = strtoupper($result['product_condition']);
            $price = $result['price'];
            $available_units = $result['available_units'];
            $sold = $result['sold'];
            $seller = strtoupper($result['seller']);
            $warranty = $result['warranty'];
            $favourites = $result['favourites'];
            echo '<div class="product_container" id="productContainer">
            
            <div class="img_container">
                <img src="../img/products/box.png" alt="product image">
            </div>

            <div class="info_and_interaction_container">

                <div class="info_container">
                    <div class="name_info_container">
                        <p>' . $product_name . '</p>
                    </div>
                    <div class="condition_info_container">
                        <p>' . $product_condition . '</p>
                    </div>
                    <div class="description_info_container">
                        <p>' . $description . '</p>
                    </div>
                </div>

                <div class="interaction_container">

                    <div class="AyS_container">
                        <p class="interaction_p">Disponibles: ' . $available_units . '</p>
                        <p class="interaction_p_right">Vendido: ' . $sold . '</p>
                    </div>

                    <div class="price_container">
                        <p class="price">$' . number_format($price,2,',','.') . '</p>
                    </div>

                    <div class="buttons_container">
                        <button class="buy_button">Comprar</button>
                        <button class="fav_button">Favoritos</button>
                    </div>

                    <div class="seller_container">
                        <p class="seller">' . $seller . '</p>
                    </div>

                </div>

            </div>

        </div>
    ';
        }
    }
    $my_link->close();
}


/* ------------------------------------------------------------------------------------------------- */

//Index and home page PHP methods to show Recomended products, Ads and Products

//Method to print recomended products in Index an Home page
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
                    <img src="img/products/box.png" alt="" onclick="showPopUp('.$i.', '.$operation.', '.$product_id.')">
                    <p class="sponsor_title" id="recomendedTitle'.$i.'">'.$product_name.'</p>
                    <p class="sponsor_description" id="recomendedDescription'.$i.'">'.$description.'</p>
                    <p class="sponsor_contact_info" id="recomendedContactInfo'.$i.'">'.$contact_info.'</p>
                    </div>';
            $i++;
        }
    }
    $my_link->close();
}


/* ------------------------------------------------------------------------------------------------- */

//Method to print paid ads in Index an Home page
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
                    <img src="img/products/box.png" alt="" onclick="showPopUp('.$i.', '.$operation.',`'.$redirect_to.'`)">
                    <p class="sponsor_title" id="sponsorTitle'.$i.'">'.$title.'</p>
                    <p class="sponsor_description" id="sponsorDescription'.$i.'">'.$description.'</p>
                    <p class="sponsor_contact_info" id="sponsorContactInfo'.$i.'">'.$contact_info.'</p>
                    </div>';
            $i++;
        }
    }
    $my_link->close();
}


/* ------------------------------------------------------------------------------------------------- */
    
//Method to print products in Index an Home page
function setProducts() {
    require('connection.php');
    $my_query = $my_link->query("SELECT * FROM product ORDER BY sold DESC LIMIT 50;");
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
    $my_link->close();
}


/* ------------------------------------------------------------------------------------------------- */

//TO DOCUMENT LATER******
function boughtProduct() {
    require('connection.php');

    if(isset($_GET['favourites'])) {
        $my_query = $my_link->query("SELECT * FROM favourite WHERE user_id = '".$usr_id."' AND product_id = '".$product_id."';");
    
        if($my_query->num_rows > 0) {
            header("Location: error.php?cod=6");
        } else {
            $my_query = $my_link->query("INSERT INTO favourite(user_id, product_id) VALUES ('".$usr_id."', '".$product_id."');");
    
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
    $my_link->close();
}


/* ------------------------------------------------------------------------------------------------- */




/* ------------------------------------------------------------------------------------------------- */


//Get a error code in it parameters an define what's the error, later return the error message
function getErrorCode($error_code) {
    switch($error_code) {

        case 0:
            $message = 'Error al conectar con la base de datos';
            $message_two = "";
        break;
        
        case 1:
            $message = 'Error al obtener informacion con la base de datos';
            $message_two = "";
        break;

        case 2:
            $message = 'El usuario ya existe, por lo cual no se puede volver a crear';
            $message_two = "";
        break;

        case 3:
            $message = 'El usuario';
            $message_two = 'existe, revise que haya digitado bien sus datos';
        break;

        case 4:
            $message = 'Sesión no iniciada';
            $message_two = "";
        break;

        case 5:
            $message = 'No se pudo convertir el codigo de producto';
            $message_two = "";
        break;

        case 6:
            $message = 'El producto ya se añadio a favoritos';
            $message_two = "";
        break;

        case 7:
            $message = 'El producto no se pudo eliminar de favoritos';
            $message_two = "";
        break;

        default:
            $message = 'Error desconocido, por favor contacte al servicio tecnico';
            $message_two = "";
        break;
    }

    $messages[] = ['m1' => $message, 'm2' => $message_two];
    return $messages;
}

?>