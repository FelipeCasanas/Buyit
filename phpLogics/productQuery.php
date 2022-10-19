<?php
    require('connection.php');
    require('methods.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image-icon" href="../img/favicon.png">
    <link rel="stylesheet" href="../css/productQuery.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
</head>

<body>
    <!-- Header -->
    <header>

        <!-- Header background -->
        <div class="header_background">

            <!-- Buy it web title -->
            <h1>Buy it</h1>

            <?php
                session_start(); 
                $usr_id = $_SESSION['id'];

                if($usr_id == null) {
                    echo '<a href="../index.php" class="return_button">
                    <p>Volver a inicio</p>
                    </a>';
                } else {
                    echo '<a href="../home.php" class="return_button">
                    <p>Volver a inicio</p>
                    </a>';
                }
            ?>
        </div>

    </header>

    <section id="mainList">

        <?php
            if(isset($_GET['search'])) {
                searchProducts();
            }

            $my_link->close();
        ?>

    </section>

    <script src="../javaScript/productQuery.js"></script>
</body>

</html>