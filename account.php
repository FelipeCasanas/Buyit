<?php 
    require('phpLogics/connection.php');
    session_start();
    $usr_id = $_SESSION['id'];

    if(!$usr_id) {
        echo 'Session no iniciada, volver al index';
        header('Location: phpLogics/error.php?cod=4');
    } else {
        $sentence = "SELECT * FROM my_user WHERE id = '".$usr_id."'";
        $my_query = $my_link->query($sentence);

        if(!$my_query) {
            header('Location: phpLogics/error.php?cod=1');
        } else {
            $result = $my_query->fetch_assoc();
            $usr_name = strtoupper($result['name']);
            $usr_last_name = strtoupper($result['last_name']);
            $birthDate = $result['birthday'];
            $age = getAge($birthDate);
            $usr_sex = $result['sex'];
            $usr_country = $result['country'];
            $usr_email = $result['email'];
        }
    }

    function getAge($birthDate) {
        $birth = new DateTime($birthDate);
        $now = new DateTime(date("Y-m-d"));
        $diference = $now->diff($birth);
        return $diference->format("%y");
    }

    if($usr_sex == 'f') {
        $usr_sex = 'Mujer';
    } else if($usr_sex == 'm') {
        $usr_sex = 'Hombre';
    } else {
        $usr_sex = 'No binario';
    }

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

    <div class="main_container">
        <div class="left_container">
            <div class="user_photo_container"><img class="user_photo" src="img/Profile.jpeg" alt="User photo"></div>
            <div class="personal_info_container">
                <div class="personal_data">
                    <p id="nameParagraph">Nombre: <?php echo $usr_name . ' ' . $usr_last_name; ?> </p>
                </div>
                <div class="personal_data">
                    <p id="yearsOldParagraph">Edad: <?php echo $age; ?> </p>
                </div>
                <div class="personal_data">
                    <p id="sexParagraph">Sexo: <?php echo $usr_sex; ?> </p>
                </div>
                <div class="personal_data">
                    <p id="countryParagraph">Pais: <?php echo $usr_country; ?> </p>
                </div>
                <div class="personal_data">
                    <p id="emailParagraph">Correo: <?php echo $usr_email; ?> </p>
                </div>
            </div>
        </div>

        <div class="right_container">
            <div class="friends_list">
                <h2 class="friends_list_title">Mis amigos</h2>
            </div>
            <div class="update_user_data">


                <form class="personal_info_updater" action="phpLogics/accountInfoUpdate.php" method="post">


                    <div class="info_places">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="nameInput">
                    </div>
                    <div class="info_places">
                        <label for="lastName">Apellido</label>
                        <input type="text" name="last_name" id="lastNameInput">
                    </div>
                    <div class="info_places">
                        <label for="yearsOld">Edad</label>
                        <input type="date" name="birthday" id="yearsOldInput">
                    </div>
                    <div class="info_places">
                        <label for="sex_selector">Sexo</label>
                        <select name="sex" id="sexSelector">
                            <option value="m">Hombre</option>
                            <option value="f">Mujer</option>
                            <option value="nb">No binario</option>
                        </select>
                    </div>
                    <div class="info_places">
                        <label for="country">Pais</label>
                        <select name="country" class="form-control" id="countrySelect">
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
                    <div class="info_places">
                        <label for="email">Correo</label>
                        <input type="text" name="email" id="emailInput">
                    </div>

                    <button class="right_button" onclick="">Establecer</button>
                </form>

                <button class="left_button" onClick="clearFields()">Limpiar</button>

                <div class="my_web_preferences"></div>
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