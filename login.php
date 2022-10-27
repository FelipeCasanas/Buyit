<!-- HTML5 document -->
<!DOCTYPE html>

<!-- HTML element -->
<html lang="es">

<!-- head element -->

<head>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image-icon" href="img/favicon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de ingreso</title>
</head>

<!-- Body element -->

<body id="body">

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

    <!-- **************************************************************************** -->

    <div class="main_container">
        <div class="login_container">
            <div class="user_icon_container">
                <div class="user_icon_background" id="userIconBackground">
                    <div class="user_icon_head" id="userIconHead"></div>
                    <div class="user_icon_body" id="userIconBody"></div>
                </div>
            </div>


            <form action="phpLogics/loginQuery.php" method="post">

                <div class="inputs_container">

                    <div class="input_div">
                        <p><label for="emailInput" id="emailInputLabel">Ingrese email</label></p>
                        <input type="text" name="email" id="emailInput" required>
                    </div>

                    <div class="input_div">
                        <p><label for="passwordInput" id="passwordInputLabel">Ingrese contraseña</label></p>
                        <input type="password" name="password" id="passwordInput" required>
                    </div>

                </div>

                <div class="buttons_container">
                    <a href="register.php"><input type="button" class="register_button" id="registerButton"
                            value="Registrarme"></a>
                    <input type="submit" class="login_button" id="loginButton" value="Iniciar">
                </div>

            </form>

        </div>

        <div class="utilities_container">
            <div class="utilities">

                <button class="utilities_buttons" id="">.</button>
                <button class="utilities_buttons" id="">.</button>
                <button class="utilities_buttons" id="">.</button>
                <button class="utilities_buttons" id="">.</button>
                <button class="utilities_buttons" id="lightAndDarkMode">LDM</button>
                <button class="utilities_buttons" id="settings">STGS</button>
            </div>
        </div>

        <!-- **************************************************************************** -->

        <!-- Footer -->
        <footer>

            <!-- Footer background -->
            <div class="footer_background">
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

            </div>

        </footer>

        <script src="javaScript/login.js"></script>

</body>

</html>