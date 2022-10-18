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
            <a href="../home.php" class="return_button">
                <p>Volver a inicio</p>
            </a>
        </div>

    </header>

    <section id="mainList">

        <?php
        $isLogged = validateCredentials();

        if($isLogged == true) {
            if(isset($_GET['search'])) {
                $product = $_GET['search'];
                
                $sentence = "SELECT * FROM product WHERE product_name LIKE '%".$product."%';";
                $my_query = $my_link->query($sentence);
        
                if(!$my_query) {
                    header('Location: error.php?cod=1');
                } else {
        
                    $total_results = $my_query->num_rows;
                    echo '
                        <div class="total_products_container">
                            <p id="totalSlots">Numero de resultados: ' . $total_results . '</p>
                        </div>';
        
                    while($result = $my_query->fetch_array()) {
                        $product_name = strtoupper($result['product_name']);
                        $description = $result['description'];
                        $product_condition = strtoupper($result['product_condition']);
                        $price = $result['price'];
                        $available_units = $result['available_units'];
                        $sold = $result['sold'];
                        $seller = strtoupper($result['seller']);
                        $warranty = $result['warranty'];
                        $favourites = $result['favourites'];
        
                        echo '<div class="product_container" id="productContainer">
                        
                        <div class="img_container">
                            <img src="../img/products/box.png" alt="product image">
                        </div>
            
                        <div class="info_and_interaction_container">
            
                            <div class="info_container">
                                <div class="name_info_container">
                                    <p>' . $product_name . '</p>
                                </div>
                                <div class="condition_info_container">
                                    <p>' . $product_condition . '</p>
                                </div>
                                <div class="description_info_container">
                                    <p>' . $description . '</p>
                                </div>
                            </div>
            
                            <div class="interaction_container">
            
                                <div class="AyS_container">
                                    <p class="interaction_p">Disponibles: ' . $available_units . '</p>
                                    <p class="interaction_p_right">Vendido: ' . $sold . '</p>
                                </div>
            
                                <div class="price_container">
                                    <p class="price">$' . number_format($price,2,',','.') . '</p>
                                </div>
            
                                <div class="buttons_container">
                                    <button class="buy_button">Comprar</button>
                                    <button class="fav_button">Favoritos</button>
                                </div>
            
                                <div class="seller_container">
                                    <p class="seller">' . $seller . '</p>
                                </div>
            
                            </div>
            
                        </div>
            
                    </div>
                ';
                    }
                }
        
            }
        }

        
    $my_link->close();
?>

    </section>

    <script src="../javaScript/productQuery.js"></script>
</body>

</html>