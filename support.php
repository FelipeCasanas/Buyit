<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/support.css">
    <link rel="icon" type="image-icon" href="img/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte</title>
</head>

<body>

    <!-- Header -->
    <header>

        <!-- Header background -->
        <div class="header_background">

            <!-- Buy it web title -->
            <h1 class="buyit_title">Buy it</h1>
            <a href="index.php" class="return_button">
                <p>Volver a inicio</p>
            </a>
        </div>

    </header>

    <div class="selector_container">

        <div class="h2_options">
            <h2>¿En que podemos ayudarte?</h2>
        </div>

        <div class="options_container">
            <button class="option1">
                <p>Error interfaz grafica</p>
            </button>

            <button class="option2">
                <p>Error de servidor</p>
            </button>

            <button class="option3">
                <p>Otro</p>
            </button>
        </div>

    </div>

    <div class="main_container">
        <div class="general_form_container">

            <div class="personal_info_left">

                <input type="text" id="user_name" placeholder="Ingresa tu nombre" autocomplete="name" required
                    autofocus>
                <input type="text" id="user_last_name" placeholder="Ingresa tu apellido" autocomplete="name" required>
                <input type="email" id="user_email" placeholder="Ingresa tu email" autocomplete="email" required>

                <div class="terms_conditions_container">
                    <input type="checkbox" id="data_treatment" name="data_treatment" required>
                    <p>Terminos y condiciones</p>
                </div>

            </div>

            <div class="personal_info_right">
                <textarea id="text_area" cols="50" rows="25" placeholder="   Cuentanos sobre tu problema"></textarea>
            </div>

            <div class="form_buttons_div">
                <button type="button" onclick="clearField()">Limpiar</button>
                <button type="button" onclick="getData()">Enviar</button>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer>

        <!-- Footer background -->
        <!-- Here is footer information text(we, support, privacy, tyc) -->
        <div class="footer_text_container">

            <!-- With this you can go to homepage -->
            <p href="">
                <a class="support" href="index.php">Inicio</a>
            </p>

            <!-- Here you can know we a bit more -->
            <p>
                <a class="we" href="we.php">Nosotros</a>
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

    <script src="javaScript/support.js"></script>

</body>

</html>