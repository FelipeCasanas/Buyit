<?php
    require('phpLogics/connection.php');
    require('phpLogics/methods.php');
    $isLogged = validateCredentials();

    if($isLogged == true) {
        $usr_name = $_SESSION['name'];
        $usr_sex = $_SESSION['sex'];

        if($usr_sex == 'm') {
            $welcome = 'Bienvenido, ';
        } else if ($usr_sex == 'f') {
            $welcome = 'Bienvenida, ';
        } else {
            $welcome = 'Bienvenid@, ';
        }
    }

    if(isset($_POST['exit'])) {
        session_destroy();
    }
?>


<!-- HTML5 document -->
<!DOCTYPE html>

<!-- HTML element -->
<html lang="es">

<!-- head element -->

<head>
    <link rel="stylesheet" href="css/home.css">
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

            </form>

            <b class="user_welcome"><?php echo $welcome . $usr_name; ?></b>

            <form action="home.php" method="post" class="sign_out_form">
                <button name="exit" class="exit_button">Cerrar Sesión</button>
            </form>

        </div>

        <!-- Navegation bar -->
        <nav class="nav">

            <div class="nav__div">

                <ul class="nav__list list">

                    <li class="nav__li list">
                        <!-- Categories -->
                        <p class="list__p">
                            <a class="list__a" href="">Categorias</a>
                        </p>
                    </li>

                    <li class="nav__li list">
                        <!-- but sold products -->
                        <p class="list__p">
                            <a class="list__a" href="myFavs.php">Mis favoritos</a>
                        </p>
                    </li>

                    <li class="nav__li list">
                        <!-- my favorites items -->
                        <p class="list__p">
                            <a class="list__a" href="support.php">Ayuda</a>
                        </p>
                    </li>

                    <li class="nav__li list">
                        <!-- Help button -->
                        <p class="list__p">
                            <a class="list__a" href="account.php">Cuenta</a>
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
    <div class="main">

        <!-- Recomendations and ads container -->
        <div class="main__recomended-ads-div" id="recomendationsAndAdsContainer">

            <!-- Recomendations div -->
            <div class="main__recomended recomended">

                <!-- Recomendations text background -->
                <div class="recomended__recomended-text-background">
                    <p class="main__p" id="recomended_text">Recomendado</p>
                </div>

                <div class="recomended__group">
                    <?php
            setRecomended();
        ?>
                </div>
            </div>

            <!-- Ads div -->
            <div class="main__ads">

                <!-- Ads text background -->
                <div class="main__ads-text-background">
                    <p id="ads_textt">Anuncios</p>
                </div>

                <div class="ads__group">
                    <?php
            setAds();
        ?>
                </div>
            </div>

        </div>

        <!-- Products div -->
        <div class="products">

            <!-- Products text background -->
            <div class="products__text-background">
                <p class="products__text" id="productsText">Productos</p>
            </div>

            <div class="products__list">

                <?php
                    setProducts();
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

    <script src="javaScript/home.js"></script>

</body>

</html>