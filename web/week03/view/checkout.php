<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout | Ellen Carlson</title>
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
            <h2>Where's this order going?</h2>
            <form action="../index.php" method="post" class="checkout-form">
                <label for="fname">First name</label>
                <input type="text" id="fname" name="fname">
                <label for="lname">Last name</label>
                <input type="text" id="lname" name="lname">
                <label for="address">Address</label>
                <input type="text" id="address" name="address">
                <label for="city">City</label>
                <input type="text" id="city" name="city">
                <label for="state">State</label>
                <input type="text" id="state" name="state">
                <label for="zip">ZIP Code</label>
                <input type="text" id="zip" name="zip">
                <label for="phone">Phone</label>
                <input type="email" id="email" name="email">
                <input type="submit" class="btn-checkout" value="Purchase" />
                <input type="hidden" name="action" value="confirm">
            </form>
            <a href="/week03/view/view-cart.php" class="btn-checkout">Return to cart</a>
        </div>
    </main>

    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . '/week03/snippets/footer.php'; ?>
    </footer>
</body>

</html>