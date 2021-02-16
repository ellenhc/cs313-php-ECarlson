<?php
if (!$_SESSION['loggedin']) {
    //if not logged in, send to sign-up page
    header('Location: /index.php?action=register');
    exit;
}
?><!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Team Activity | Week07</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Welcome</h1>
    <?php 
    if (isset($message)) {
        echo "<b>$message</b>";
    }
    echo "<p>Welcome $_SESSION[userData][username]</p>";
    ?>
</body>

</html>