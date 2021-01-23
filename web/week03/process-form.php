<?php 
// Create or access a Session
session_start();
// Check for any "action" name - value pairs in the GET or POST
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

switch ($action){
    case 'week3-team':
        // Filter and store the data
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $majors = filter_input(INPUT_POST, 'majors', FILTER_SANITIZE_STRING);
        $comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
}
?><html>
    <body>
        <p>Name: <?php echo $name?></p>
    </body>
</html>