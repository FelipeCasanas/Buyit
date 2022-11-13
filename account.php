<?php 
    require('phpLogics/connection.php');
    require('phpLogics/methods.php');
    $isLogged = validateCredentials();
 
    if($isLogged == true) {
        $fullData = getAllUserData();

        $result = adminActions();
    }

    $my_link->close();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="css/account.css">
    <link rel="icon" type="image-icon" href="img/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi cuenta</title>
</head>

<body>

    <div class="pop-up_background_no_display" id="createUserPopUp">
        <h2>CREAR USUARIO</h2>
        <form class="create_user_pop-up" action="account.php?action=create" method="post">
            <div class="pop-up_input_left_container"><input class="pop-up_input" type="number"
                    name="user_identification" placeholder="Ingrese su identificacion"><input class="pop-up_input"
                    type="date" name="birthday" placeholder="Ingrese su fecha de nacimiento"><input class="pop-up_input"
                    type="number" name="phone_number" placeholder="Ingrese su celular"><input class="pop-up_input"
                    type="text" name="address" placeholder="Ingrese su direccion"><input class="pop-up_input"
                    type="email" name="email" placeholder="Ingrese su correo">
                <div class="pop-up-button" id="goBack">VOLVER</div>
            </div>
            <div class="pop-up_input_right_container"><input class="pop-up_input" type="text" name="name"
                    placeholder="Ingrese su nombre"><input class="pop-up_input" type="text" name="last_name"
                    placeholder="Ingrese su apellido"><input class="pop-up_input" type="text" name="country"
                    placeholder="Ingrese su pais" disabled=""><select class="pop-up_input" name="sex" id="">
                    <option value="">Ingrese su sexo</option>
                    <option value="m">Hombre</option>
                    <option value="f">Mujer</option>
                    <option value="nb">No binario</option>
                </select><input class="pop-up_input" type="password" name="password"
                    placeholder="Ingrese su contraseña"><button class="pop-up-button">CREAR</button></div>
        </form>
    </div>

    <div class="pop-up_background_no_display" id="deleteUserPopUp">
        <h2>ELIMINAR USUARIO</h2>
        <form class="delete_user_pop-up" action="account.php?action=delete" method="post"><select class="pop-up_input"
                name="search_by" id="">
                <option value="">Buscar por:</option>
                <option value="search_by_user_id">Identificacion</option>
                <option value="search_by_cellphone_number">Numero celular</option>
                <option value="search_by_email">Correo</option>
            </select><input type="text" class="pop-up_input" name="search" placeholder="Busque aqui"><button
                class="pop-up-button">BUSCAR</button>
            <div class="pop-up-button" id="goBack">VOLVER</div>
        </form>
    </div>

    <div class="pop-up_background_no_display" id="updateUserPopUp">
        <h2>ACTUALIZAR USUARIO</h2>
        <form class="update_user_pop-up" action="account.php?action=update" method="post">
            <div class="pop-up_input_left_container"><input class="pop-up_input" type="number"
                    name="user_identification" placeholder="Ingrese su identificacion"><input class="pop-up_input"
                    type="date" name="birthday" placeholder="Ingrese su fecha de nacimiento"><input class="pop-up_input"
                    type="number" name="phone_number" placeholder="Ingrese su celular"><input class="pop-up_input"
                    type="text" name="address" placeholder="Ingrese su direccion"><input class="pop-up_input"
                    type="email" name="email" placeholder="Ingrese su correo">
                <div class="pop-up-button" id="goBack">VOLVER</div>
            </div>
            <div class="pop-up_input_right_container"><input class="pop-up_input" type="text" name="name"
                    placeholder="Ingrese su nombre"><input class="pop-up_input" type="text" name="last_name"
                    placeholder="Ingrese su apellido"><input class="pop-up_input" type="text" name="country"
                    placeholder="Ingrese su pais" disabled=""><select class="pop-up_input" name="sex" id="">
                    <option value="">Ingrese su sexo</option>
                    <option value="m">Hombre</option>
                    <option value="f">Mujer</option>
                    <option value="nb">No binario</option>
                </select><input class="pop-up_input" type="password" name="password"
                    placeholder="Ingrese su contraseña"><button class="pop-up-button">CREAR</button></div>
        </form>
    </div>

    <div class="pop-up_background_no_display" id="adminUserPopUp">
        <h2>ESTABLECER ADMIN</h2>
        <form class="admin_user_pop-up" action="account.php?action=setAdmin" method="post"><select class="pop-up_input"
                name="search_by" id="">
                <option value="">Buscar por:</option>
                <option value="search_by_user_id">Identificacion</option>
                <option value="search_by_cellphone_number">Numero celular</option>
                <option value="search_by_email">Correo</option>
            </select><input type="text" class="pop-up_input" name="search" placeholder="Busque aqui"><button
                class="pop-up-button">BUSCAR</button>
            <div class="pop-up-button" id="goBack">VOLVER</div>
        </form>
    </div>

    <!-- Header -->
    <header>

        <!-- Header background -->
        <div class="header_background">
            <!-- Header background -->
            <div class="header__background">
                <!-- Buy it web title -->
                <h1 class="header__h1">Buy it</h1>
                <a class="header__button button" href="home.php">
                    <p class="button__text">Volver a inicio</p>
                </a>
            </div>
        </div>

    </header>

    <div class="div">
        <div class="div__left-container left-container">
            <div class="div__user-photo-div">
                <img class="div__user-photo" src="img/ProfileIconWhite.png" alt="User photo">
            </div>
            <div class="left-container__personal-info-div">
                <div class="left-container__personal-data">
                    <p class="left-container__p" id="nameParagraph">Nombre:
                        <?php echo $fullData[0]['user_name'] . ' ' . $fullData[0]['user_last_name']; ?> </p>
                </div>
                <div class="left-container__personal-data">
                    <p class="left-container__p" id="yearsOldParagraph">Edad: <?php echo $fullData[0]['age']; ?> </p>
                </div>
                <div class="left-container__personal-data">
                    <p class="left-container__p" id="sexParagraph">Sexo: <?php echo $fullData[0]['user_sex']; ?> </p>
                </div>
                <div class="left-container__personal-data">
                    <p class="left-container__p" id="countryParagraph">Pais: <?php echo $fullData[0]['user_country']; ?>
                    </p>
                </div>
                <div class="left-container__personal-data">
                    <p class="left-container__p" id="emailParagraph">Correo: <?php echo $fullData[0]['user_email']; ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="div__right-container">

            <?php
                require('phpLogics/connection.php');
                setUserRole();
            ?>
            <div class="div__update-user-data update-user-data">


                <form class="update-user-data__info-updater" action="phpLogics/accountInfoUpdate.php" method="post">


                    <div class="update-user-data__info-places info-places">
                        <label class="info-places__label" for="name">Nombre</label>
                        <input class="info-places__input" type="text" name="name" id="nameInput">
                    </div>
                    <div class="update-user-data__info-places info-places">
                        <label class="info-places__label" for="lastName">Apellido</label>
                        <input class="info-places__input" type="text" name="last_name" id="lastNameInput">
                    </div>
                    <div class="update-user-data__info-places info-places">
                        <label class="info-places__label" for="yearsOld">Edad</label>
                        <input class="info-places__input" type="date" name="birthday" id="yearsOldInput">
                    </div>
                    <div class="update-user-data__info-places info-places">
                        <label class="info-places__label" for="sex_selector">Sexo</label>
                        <select class="info-places__select" name="sex" id="sexSelector">
                            <option value="m">Hombre</option>
                            <option value="f">Mujer</option>
                            <option value="nb">No binario</option>
                        </select>
                    </div>
                    <div class="update-user-data__info-places info-places">
                        <label class="info-places__label" for="country">Pais</label>
                        <select class="info-places__select" name="country" class="form-control" id="countrySelect">
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
                    <div class="update-user-data__info-places info-places">
                        <label class="info-places__label" for="email">Correo</label>
                        <input class="info-places__input" type="text" name="email" id="emailInput">
                    </div>

                    <div class="update-user-data__buttons-container buttons-container">
                        <button class="buttons-container__left-button" onClick="clearFields()">Limpiar</button>
                        <button class="buttons-container__right-button" onclick="">Establecer</button>
                    </div>
                </form>

                <form class="update-user-data__web-preferences web-preferences"
                    action="phpLogics/accountPreferences.php" method="get">

                    <?php
                        require('phpLogics/connection.php');
                        $my_query = $my_link->query("SELECT * FROM user_preferences WHERE id = '".$_SESSION['id']."';");

                        if(!$my_query) {
                        header("Location: error.php?cod=1");
                        } else {
                        $result = $my_query->fetch_array();
                            $dark_mode = $result['dark_mode'];
                            $language = $result['language'];
                            $recomendations = $result['recomendations'];
                        }
                    ?>

                    <div class="web-preferences__preferences preferences">
                        <label class="web-preferences__label" for="darkModeCheckbox">MODO OSCURO</label>
                        <?php 
                            if($dark_mode == "1") {
                                echo '<input type="checkbox" checked="" name="dark_mode" id="darkModeCheckbox">';
                            } else {
                                echo '<input type="checkbox" name="dark_mode" id="darkModeCheckbox">';
                            }
                        ?>
                    </div>

                    <div class="web-preferences__preferences preferences">
                        <label class="web-preferences__label" for="languageCheckbox">LENGUAJE</label>
                        <?php 
                            if($language == "es") {
                                echo '<select class="web-preferences__select" name="language" id=""><option value="es">Español</option><option value="en">Ingles</option></select>';
                            } else if($language == "en") {
                                echo '<select class="web-preferences__select" name="language" id=""><option value="en">Ingles</option><option value="es">Español</option></select>';
                            }
                        ?>
                    </div>

                    <div class="web-preferences__preferences preferences">
                        <label class="web-preferences__label"
                            for="receiveRecomendationsCheckbox">RECOMENDACIONES</label>
                        <?php 
                            if($recomendations == '1') {
                                echo '<input type="checkbox" checked="" name="receive_recomendations"
                                id="receiveRecomendationsCheckbox">';
                            } else {
                                echo '<input type="checkbox" name="receive_recomendations"
                                id="receiveRecomendationsCheckbox">';
                            }
                        ?>

                    </div>

                    <button class="web-preferences__button">Actualizar</button>
                </form>
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

    <script src="javaScript/account.js"></script>

</body>

</html>