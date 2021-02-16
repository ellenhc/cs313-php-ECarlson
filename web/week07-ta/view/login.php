<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Team Activity | Week07</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <h1>Log in</h1>
    <?php 
    if (isset($message)) {
        echo "<b>$message</b>";
    }
    else if (isset($_SESSION['message'])){
        echo "<b>$_SESSION[message]</b>";
    }
    ?>
</body>

</html>