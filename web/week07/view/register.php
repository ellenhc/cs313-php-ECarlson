<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Team Activity | Week07</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <h1>Create an account</h1>
    <?php 
    if (isset($message)) {
        echo "<b>$message</b>";
    }
    ?>
    <form action="index.php" method="post">
        <label for="username">Name</label>
        <input type="text" id="username" name="username" required>
        <p class='info'>Password must be at least 7 characters and contain a number.</p>
        <label for="userPassword">Password <?php if(isset($_SESSION['noMatch'])){echo $_SESSION['noMatch'];}?></label>
        <input type="password" id="userPassword" name="userPassword" required>
        <label for="confirmPassword">Confirm Password <?php if(isset($_SESSION['noMatch'])){echo $_SESSION['noMatch'];}?></label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        <input type="submit" name="submit" value="Register">
        <input type="hidden" name="action" value="Register">
        <p>Already have an account? <a href="index.php?action=login">Log in</a></p>
    </form>
</body>

</html>