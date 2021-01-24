<?php
// Start the session
session_start();
?><!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart | Ellen Carlson</title>
    <link rel="stylesheet" href="../scss/styles.css">
    <script src="https://kit.fontawesome.com/0a5e9baade.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/week03/snippets/navbar.php'; ?>
        </nav>
    </header>

    <main>
        <div class="product-container">
        <?php
            require $_SERVER['DOCUMENT_ROOT'] . 'week03/products.php';
            foreach($products as $productId => $item){
                $card = '<div class="product-card">';
                $card .= "<img src='$item[image]'>\n";
                $card .= "<h4>$item[name]</h4>\n";
                $card .= "<h5>$item[subtitle]</h5>\n";
                $card .= '<div class="add-to-cart">';
                $card .= '<form action="../index.php" method="post"> 
                <input type="submit" class="button" value="Add to cart" />
                <input type="hidden" name="productId" value="'.$productId.'">
                <input type="hidden" name="action" value="add-to-cart">
                </form>';
                $card .= '<p class="price">Price</p>';
                $card .= '</div>';
                $card .= '</div>';
                echo $card;
            }
        ?>
        </div>
    </main>

    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/week03/snippets/footer.php'; ?>
    </footer>
</body>

</html>