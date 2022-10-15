<!-- HTML5 document -->
<!DOCTYPE html>

<!-- HTML element -->
<html lang="es">

<!-- head element -->

<head>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image-icon" href="img/favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy it</title>
</head>

<!-- Body element -->

<body id="body">

    <div class="pop-up_hidden" id="popUp">
        <div class="pop-up">
            <p class="pop-up_title" id="popUpTitle"></p>

            <div class="pop-up_description_container">
                <div class="pop-up_ad_container">
                    <img src="img/products/box.png" alt="">
                </div>
                <p class="pop-up_description" id="popUpDescription"></p>
            </div>

            <div class="pop-up_contact_info_container">
                <p class="pop-up_contact_info" id="popUpContactInfo"></p>
            </div>
            
            <div class="buttons_div" id="buttonsDiv"></div>
        </div>
    </div>

    <!-- Header -->
    <header>

        <!-- Header background -->
        <div class="header_background">

            <!-- Buy it web title -->
            <h1>Buy it</h1>

            <!-- SearchBar & LoginButton -->
            <form action="phpLogics/productQuery.php" method="get" class="search_form">
                <input class="search" id="searchBar" type="search" name="search" placeholder="Busca aqui"
                    list="options">
                <datalist id="options">
                    <option value="computador">Computador</option>
                    <option value="celular">Celular</option>
                    <option value="tablet">Tablet</option>
                    <option value="carro">Carro</option>
                    <option value="moto">Moto</option>
                    <option value="camion">Camion</option>
                </datalist>

                <a href="login.php" class="login_button">
                    <p>Ingresar</p>
                </a>

            </form>

        </div>

        <!-- Navegation bar -->
        <nav class="nav_background">

            <div>

                <ul class="list">

                    <li>
                        <!-- Categories -->
                        <p class="categories">
                            <a href="">Categorias</a>
                        </p>
                    </li>

                    <li>
                        <!-- but sold products -->
                        <p class="my_favs">
                            <a href="myFavs.php">Mis favoritos</a>
                        </p>
                    </li>

                    <li>
                        <!-- my favorites items -->
                        <p class="help">
                            <a href="support.php">Ayuda</a>
                        </p>
                    </li>

                    <li>
                        <!-- Help button -->
                        <p class="account">
                            <a href="account.php">Cuenta</a>
                        </p>
                    </li>

                    <button class="change_color_button" id="change_color_button"
                        onclick="changeColor()">Modo<br>oscuro</button>

                </ul>

            </div>

        </nav>

    </header>

    <!-- **************************************************************************** -->

    <!-- All content container (Recomended, ads, products) -->
    <div class="body_container">

        <!-- Recomendations and ads container -->
        <div class="recomendations_and_ads_container" id="recomendationsAndAdsContainer">

            <!-- Recomendations div -->
            <div class="recomended">

                <!-- Recomendations text background -->
                <div class="recomended_text_background">
                    <p id="recomended_text">Recomendado</p>
                </div>

                <div class="recomended_group">
                    <?php
                        require('phpLogics/connection.php');

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
                    ?>
                </div>
            </div>

            <!-- Ads div -->
            <div class="ads">

                <!-- Ads text background -->
                <div class="ads_text_background">
                    <p id="ads_textt">Anuncios</p>
                </div>

                <div class="ads_group">
                    <?php
                        require('phpLogics/connection.php');

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
                    ?>
                </div>
            </div>

        </div>

        <!-- Products div -->
        <div class="products">

            <!-- Products text background -->
            <div class="products_text_background">
                <p class="products_text" id="productsText">Productos</p>
            </div>

            <div class="product_list">

                <?php
                
                    require('phpLogics/connection.php');
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
                    $my_link->close();
                ?>

            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer>

        <!-- Footer background -->
        <!-- Here is footer information text(we, support, privacy, tyc) -->
        <div class="footer_text_container">

            <!-- Here you can know we a bit more -->
            <p>
                <a class="we" href="we.php">Nosotros</a>
            </p>

            <!-- With this you can contact with we -->
            <p href="">
                <a class="support" href="support.php">Soporte</a>
            </p>

            <!-- Here are the privacy terms. Read it ok, we dont want lawsuits -->
            <p>
                <a class="privacy" href="">Privacidad</a>
            </p>

            <!-- Here are terms and conditions. for second time, we DONT want lawsuits -->
            <p>
                <a class="tyc" href="t&c.php">T&C</a>
            </p>

        </div>

        <!-- Copyright and others bullshits :) -->
        <div class="copyright">
            <p>Copyright: Casañas Electronics INC</p>
        </div>

    </footer>

    <script src="javaScript/index.js"></script>

</body>

</html>