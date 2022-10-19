<?php
    require('connection.php');
    require('methods.php');
    
    if(isset($_GET['cod'])) {
        $messages = getErrorCode($_GET['cod']);
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
        <p> <?php echo $messages[0]['m1'] ?> <span id="spanLabel"></span> <?php echo $messages[0]['m2'] ?> </p>
    </div>

    <button class="go_back_button" id="getURL">
        <p>Volver</p>
    </button>

    <script src="../javaScript/error.js"></script>
</body>

</html>