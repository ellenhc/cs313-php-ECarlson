<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Team Activity | Week07</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <label for="userPassword">Password</label>
        <input type="password" id="userPassword" name="userPassword" required>
        <input type="submit" name="submit" value="Register">
        <input type="hidden" name="action" value="Register">
    </form>
</body>

</html>