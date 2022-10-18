<?php
    if(isset($_GET['cod'])) {
        $error_code = $_GET['cod'];

        switch($error_code) {
            
            case 0:
                $message = 'Error al conectar con la base de datos';
            break;
            
            case 1:
                $message = 'Error al obtener informacion con la base de datos';
            break;

            case 2:
                $message = 'El usuario ya existe, por lo cual no se puede volver a crear';
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
            break;

            case 6:
                $message = 'El producto ya se añadio a favoritos';
            break;

            case 7:
                $message = 'El producto no se pudo eliminar de favoritos';
            break;

            default:
                $message = 'Error desconocido, por favor contacte al servicio tecnico';
            break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/error.css">
    <link rel="icon" type="image-icon" href="../img/favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>

<body>

    <h1>Buy it</h1>

    <div class="error_container">
        <p> <?php echo $message ?> <span id="spanLabel"></span> <?php echo $message_two ?> </p>
    </div>

    <button class="go_back_button" id="getURL">
        <p>Volver</p>
    </button>

    <script src="../javaScript/error.js"></script>
</body>

</html>