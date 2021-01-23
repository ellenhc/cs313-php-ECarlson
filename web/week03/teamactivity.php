<html>
<body>

<form action="process-form.php" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" <?php if(isset($name)){echo "value='$name'";} ?>><br>
    <label for="email">Email</label>
    <input type="text" id="email" name="email" <?php if(isset($email)){echo "value='$email'";} ?>><br>

    <?php 
    $majors = array("CS" => "Computer Science", "WDD" => "Web Design & Development", "CIT" => "Computer Information Technology", "CE" => "Computer Engineering");

    foreach($majors as $abr => $value){
        echo "<input type='radio' id='$abr' name='major' value='$value'>
        <label for='$abr'>$value</label><br>";
    }
    ?>
    <label for="comments">Comments:</label>
    <textarea id="comments" name="comments"><?php if(isset($comments)){echo $comments;} ?></textarea><br>

    <?php 
    //<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
    //<label for="vehicle1"> I have a bike</label><br>
    ?>

<input type="submit" name="submit">
<input type="hidden" name="action" value="week3-team">
</form>

</body>
</html>