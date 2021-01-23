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
            <?php require $_SERVER['DOCUMENT_ROOT'] . 'week03/snippets/navbar.php'; ?>
        </nav>
    </header>

    <main>
        <div class="product-container">
            <div class="product-card">
                <img src="../images/bar-soap.jpg" alt="stack of 3 bar soaps">
                <h4>Product name</h4>
                <h5>Product subtitle</h5>
                <a href="#" class="add-to-cart">
                    <p>Add to cart</p>
                    <p class="price">Price</p>
                </a>
            </div>
            <div class="product-card">
                <img src="../images/body-oil.jpg" alt="bottle of coconut body oil">
                <h4>Coconut Oil</h4>
                <h5>hydrating body oil</h5>
                <a href="#" class="add-to-cart">
                    <p>Add to cart</p>
                    <p class="price">Price</p>
                </a>
            </div>
            <div class="product-card">
                <img src="../images/eyeshadow.jpg" alt="pot of pink eyeshadow">
                <h4>Product name</h4>
                <h5>vibrant powdered eyeshadow</h5>
                <a href="#" class="add-to-cart">
                    <p>Add to cart</p>
                    <p class="price">Price</p>
                </a>
            </div>
            <div class="product-card">
                <img src="../images/hand-sanitizer.jpg" alt="pump bottle of hand sanitizer">
                <h4>Product name</h4>
                <h5>soothing aloe + sanitization</h5>
                <a href="#" class="add-to-cart">
                    <p>Add to cart</p>
                    <p class="price">Price</p>
                </a>
            </div>
            <div class="product-card">
                <img src="../images/hand-soap.jpg" alt="pump bottle of hand soap">
                <h4>Product name</h4>
                <h5>Product subtitle</h5>
                <a href="#" class="add-to-cart">
                    <p>Add to cart</p>
                    <p class="price">Price</p>
                </a>
            </div>
            <div class="product-card">
                <img src="../images/lipstick.jpg" alt="red Clinique lipstick">
                <h4>Product name</h4>
                <h5>Product subtitle</h5>
                <a href="#" class="add-to-cart">
                    <p>Add to cart</p>
                    <p class="price">Price</p>
                </a>
            </div>
        </div>
    </main>

    <footer>
        <?php require $_SERVER['DOCUMENT_ROOT'] . 'week03/snippets/footer.php'; ?>
    </footer>
</body>

</html>