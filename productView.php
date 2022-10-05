<?php
    session_start();
    require('phpLogics/connection.php');

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['product_id'] = $id;

        $sentence = "SELECT * FROM favourite WHERE user_id = '".$_SESSION['id']."' AND product_id = '".$id."';";
        $my_query = $my_link->query($sentence);

        if(!$my_query) {
            header("Location: error.php?cod=1");
        } else {
            
            if($my_query->num_rows > 0) {
                echo '<h6 class="favourite_process_state" id="addedToFavs">Añadido a favoritos</h6>';
            }

            $sentence = "SELECT * FROM product WHERE id = '".$id."';";
            $my_query = $my_link->query($sentence);

            $result = $my_query->fetch_array();

            $product_name = strtoupper($result['product_name']);
            $description = $result['description'];
            $product_condition = strtoupper($result['product_condition']);
            $price = $result['price'];
            $category = strtoupper($result['category']);
            $available_units = $result['available_units'];
            $sold = $result['sold'];
            $seller = strtoupper($result['seller']);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/productView.css">
    <link rel="icon" type="image-icon" href="img/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista previa</title>
</head>

<body>

    <!-- Header -->
    <header>

        <!-- Header background -->
        <div class="header_background">

            <!-- Buy it web title -->
            <h1>Buy it</h1>
            <a href="home.php" class="return_button">
                <p>Volver a inicio</p>
            </a>
        </div>

    </header>

    <div class="general_container">
        <div class="left_container">
            <div class="name_condition_container">
                <div class="product_name">
                    <p><?php echo $product_name; ?></p>
                </div>
                <div class="product_condition">
                    <p><?php echo $product_condition; ?></p>
                </div>
            </div>

            <form action="phpLogics/boughtProductInfo.php" method="post" class="actions_container">
                <div class="actions_left_container">

                    <div class="row">
                        <p>Elige opcion:</p>
                        <select name="variant" id="">
                            <option value="">Escoge</option>
                            <option value="o1">Opcion 1</option>
                            <option value="o2">Opcion 2</option>
                        </select>
                    </div>

                    <div class="row">
                        <p>Enviar a:</p>
                        <select name="sent_to" id="">
                            <option value=""></option>
                            <option value="AF">Afganistan</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">Somoa Americana</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Bielorrusia</option>
                            <option value="BE">Belgica</option>
                            <option value="BZ">Belice</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BO">Bolivia</option>
                            <option value="BW">Botsuana</option>
                            <option value="BR">Brazil</option>
                            <option value="BG">Bulgaria</option>
                            <option value="KH">Camboya</option>
                            <option value="CM">Camerún</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cabo Verde</option>
                            <option value="KY">Islas Caiman</option>
                            <option value="CF">R. Central Africa</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CD">Congo</option>
                            <option value="CR">Costa Rica</option>
                            <option value="HR">Croacia</option>
                            <option value="CU">Cuba</option>
                            <option value="CZ">Republica Checa</option>
                            <option value="DK">Dinamarca</option>
                            <option value="DO">Republica Dominicana</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egipto</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Guinea Ecuatorial</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Etiopia</option>
                            <option value="FI">Finlandia</option>
                            <option value="FR">Francia</option>
                            <option value="GF">Guyana Francesa</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Alemania</option>
                            <option value="GR">Grecia</option>
                            <option value="GT">Guatemala</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungaria</option>
                            <option value="IS">Islandia</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Irlanda</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italia</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japon</option>
                            <option value="KZ">Kazajistan</option>
                            <option value="KE">Kenia</option>
                            <option value="KR">Corea del Sur</option>
                            <option value="KW">Kuwait</option>
                            <option value="LT">Lituania</option>
                            <option value="LU">Luxemburgo</option>
                            <option value="MG">Madagascar</option>
                            <option value="MX">Mexico</option>
                            <option value="MC">Monaco</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Paises Bajos</option>
                            <option value="NI">Nicaragua</option>
                            <option value="PA">Panama</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PL">Polonia</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Rusia</option>
                            <option value="SA">Arabia Saudita</option>
                            <option value="SG">Singapur</option>
                            <option value="ES">España</option>
                            <option value="SE">Suecia</option>
                            <option value="CH">Suiza</option>
                            <option value="AE">Emiratos Arabes</option>
                            <option value="GB">Reino Unido</option>
                            <option value="US">Estados Unidos</option>
                            <option value="UY">Uruguay</option>
                            <option value="VE">Venezuela</option>
                            <option value="VN">Vietnam</option>
                        </select>
                    </div>

                    <div class="row">
                        <p>Direccion:</p>
                        <input type="text" name="address" placeholder="Ingresa tu direccion">
                    </div>

                </div>

                <div class="actions_right_container">

                    <div class="row" id="row1">
                        <p>Cantidad:</p>
                        <select name="quantity" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="more">Mas unidades</option>
                        </select>
                    </div>

                    <div class="row" id="row2">
                        <p>Ciudad</p>
                        <input type="text" name="city" placeholder="Ingresa ciudad">
                    </div>

                    <div class="row" id="row3">
                        <button type="submit" name="buy" value="1" class="buy_button">Comprar</button>
                    </div>

                </div>
            </form>

            <form action="phpLogics/boughtProductInfo.php" method="get" class="favourite_form" id="favouriteForm">
                <button type="submit" name="favourites" value="1" class="favourites_button">Favoritos</button>
            </form>

        </div>

        <div class="right_container">

            <div class="seller_container"><?php echo $seller; ?></div>
            <div class="img_container"><img src="img/products/box.png" alt="Foto del producto"></div>
            <div class="data_container">

                <div class="availability">Disponibles: <?php echo $available_units; ?></div>
                <div class="solds">Vendidos: <?php echo $sold; ?></div>
                <div class="price">$<?php echo number_format($price,2,',','.'); ?></div>
                <div class="category_container"><?php echo $category; ?></div>

            </div>

        </div>

    </div>

    <div class="description_reviews_container">
        <div class="description_container">
            <div class="description"><?php echo $description; ?></div>
        </div>

        <div class="reviews_container"></div>
    </div>

    <script src="javaScript/productView.js"></script>

</body>

</html>