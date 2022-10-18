<?php
    require('phpLogics/connection.php');
    require('phpLogics/methods.php');
?>

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
                        setRecomended();
                        $my_link->close();
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
                        setAds();
                        $my_link->close();
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
                    setProducts();
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