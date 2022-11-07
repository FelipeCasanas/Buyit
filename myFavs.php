<?php
    require('phpLogics/connection.php');
    require('phpLogics/methods.php');

    getUserFavourites();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="css/myFavs.css">
    <link rel="icon" type="image-icon" href="img/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis favoritos</title>
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

    <main>

        <div class="main_div">
            <div class="sub_container">
                <div class="img_container"><img src="img/Profile.jpeg" alt="Profile photo"></div>

                <div class="names_container">
                    <p class="name">
                        <?php $usr = $_SESSION['name']; $usr_last_name = $_SESSION['last_name'];  if(!$usr) {header('Location: phpLogics/error.php?cod=4'); } else { echo $usr . ' ' . $usr_last_name; } ?>
                    </p>
                </div>
            </div>
            <h2>Mis favoritos</h2>
        </div>

        <div class="principal_content_container">

            <div class="left_div">
                <h3>Favoritos</h3>

                <div id="left_div_general_container">

                    <!-- <div class="downArrowContainer"><img src="img/downArrow.png" alt=""></div> -->

                    <?php
                        setUserFavourites();
                        $my_link->close();
                    ?>

                </div>

            </div>

            <div class="right_div">

                <div class="top_right_div">
                    <p>¿Que favorito deseas buscar?</p>
                    <input type="text" name="" id="to_search" placeholder="Buscalo aqui">

                    <div>
                        <input type="button" id="clear_button" value="Limpiar">
                        <input type="button" id="search_button" value="Buscar">
                    </div>

                </div>

                <div class="middle_right_div">
                    <p>Ordenar por:</p>

                    <select name="order_by_list" id="order_by_list">
                        <option value="precio_ascendente">Precio ascendente</option>
                        <option value="precio_descendente">Precio descendente</option>
                        <option value="listado_mas_reciente">Listado mas reciente</option>
                        <option value="listado_mas_antiguo">Listado mas antiguo</option>
                    </select>

                    <div class="checkbox_container">
                        <input type="checkbox" name="free_shipping" id="free_shipping_checkbox">
                        <label for="free_shipping" id="free_shipping_label">Envio gratis</label>

                        <input type="checkbox" name="warranty_checkbox" id="warranty_checkbox">
                        <label for="warranty_checkbox" id="warranty_label">Garantia</label>
                    </div>

                </div>

                <div class="bottom_right_div">

                </div>
            </div>

        </div>

    </main>

    <!-- Footer -->
    <footer>

        <!-- Footer background -->
        <!-- Here is footer information text(we, support, privacy, tyc) -->
        <div class="footer_text_container">

            <!-- Here you can know we a bit more -->
            <p>
                <a class="home" href="home.php">Inicio</a>
            </p>

            <!-- Here are We page, check it now -->
            <p>
                <a class="tyc" href="we.php">Nosotros</a>
            </p>

            <!-- With this you can contact with we -->
            <p href="">
                <a class="support" href="support.php">Soporte</a>
            </p>

            <!-- Here are the privacy terms. Read it ok, we dont want lawsuits -->
            <p>
                <a class="privacy" href="">Privacidad</a>
            </p>

        </div>

        <!-- Copyright and others bullshits :) -->
        <div class="copyright">
            <p>Copyright: Casañas Electronics INC</p>
        </div>

    </footer>

</body>

</html>