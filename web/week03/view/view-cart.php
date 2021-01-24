<?php require $_SERVER['DOCUMENT_ROOT'] . 'week03/products.php';
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View Cart | Ellen Carlson</title>
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
        <div class="cart-container">
            <?php
            if (!isset($_SESSION['cart'])) {
                $msg = "Your cart is empty.";
                echo $msg;
            } else {
                $subtotal = 0;
                foreach ($_SESSION['cart'] as $productId => $count) {
                    //convert item's price to an int and add it to the subtotal
                    $item = $products[$productId];
                    $itemCount = (int)$count;
                    $itemPrice = (int)$item['price'];
                    $itemTotal = $itemCount * $itemPrice;
                    $card = '<div class="cart-card">';
                    $card .= "<h4>$count x $item[name]</h4>";
                    $card .= "<h54>$$itemTotal</h5>";
                    $card .= "<img src='$item[image]'>";
                    $card .= '</div>';
                    $card .= '<hr>';
                    echo $card;
                    $subtotal += $itemTotal;
                }
                $checkoutForm = '<div class="subtotal">';
                $checkoutForm .= "<h4>Subtotal $$subtotal'</h4></div>";
                $checkoutForm .= '<form action="../index.php" method="post">';
                $checkoutForm .= '<input type="submit" class="btn-checkout" value="Checkout" />';
                $checkoutForm .= '<input type="hidden" name="action" value="checkout"></form>';
                echo $checkoutForm;
            }
            ?>
        </div>
    </main>

    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/week03/snippets/footer.php'; ?>
    </footer>
</body>

</html>