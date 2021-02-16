<?php 
// Create or access a Session
session_start();

require_once 'week07/library/connections.php';
require_once 'week07/model.php';

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

switch ($action) {
    case 'Register':
        // Filter and store the data
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $userPassword = filter_input(INPUT_POST, 'userPassword', FILTER_SANITIZE_STRING);

        // Uses password_hash() function to hash the password
        $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

        // Send the user data to the model
        $regOutcome = registerUser($username, $hashedPassword);

        if ($regOutcome === 1) {
            //$message = "<p class='notice'>Thanks for registering. Please use your email and password to login.</p>";
            header('Location: week07/index.php?action=login'); // After inserting the user, redirect to the sign-in page
            exit;
        } else {
            //$message = "<p class='notice'>Rregistration failed. Please try again.</p>";
            include 'week07/view/register.php';
            exit;
        }
        case 'register':
            include 'week07/view/register.php';
            break;
        case 'Login':
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $userPassword = filter_input(INPUT_POST, 'userPassword', FILTER_SANITIZE_STRING);

            // Get the user's data from the database
            $userData = getUser($username);

            // Use password_verify() function and compare against the hash in the database
            $hashCheck = password_verify($userPassword, $userData['userPassword']);
            
            // If an incorrect password is entered, stay on this page
            if(!$hashCheck){
                $message = 'Invalid username or password. Please try again.';
                include 'week07/view/login.php';
                exit;
            }
            // If a correct username/password is entered, save the userId to the session and redirect to the welcome page
            $_SESSION['loggedin'] = TRUE;
            array_pop($userData); // removes the user's password from the array BEFORE storing in the session
            $_SESSION['userData'] = $userData; // saves the user data in the session
            include 'week07/view/welcome.php';
            exit;
        case 'login':
            include 'week07/view/login.php';
            break;
        default:
            include 'week07/view/register.php';
            break;
    }
?>