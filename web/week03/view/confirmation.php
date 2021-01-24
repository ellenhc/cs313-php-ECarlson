<?php 
require $_SERVER['DOCUMENT_ROOT'] . '/week03/products.php';
session_start();
?><!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmation | Ellen Carlson</title>
    <link rel="stylesheet" href="\week03\scss\styles.css">
    <script src="https://kit.fontawesome.com/0a5e9baade.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/week03/snippets/navbar.php'; ?>
        </nav>
    </header>

    <main>
        <div class="page-container">
            <h2>Confirmation</h2>
            <div>
                <h3>Shipping Address:</h3>
                <?php
                foreach($_SESSION['shipping_address'] as $key => $value){
                    //echo "$key: $value\n";
                    $p = "<p>$value</p>";
                    echo $p;
                }
                ?>
            </div>
            <div>
                <h3>Items:</h3>
                <?php
                    foreach ($_SESSION['cart'] as $productId => $count) {
                        $item = $products[$productId];
                        $card = '<div class="cart-card">';
                        $card .= "<h4>$count x $item[name]</h4>";
                        $card .= "<img src='$item[image]'>";
                        $card .= '</div>';
                        $card .= '<hr>';
                        echo $card;
                    }
                ?>
            </div>
        </div>
    </main>
    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/week03/snippets/footer.php'; ?>
    </footer>
</body>

</html>