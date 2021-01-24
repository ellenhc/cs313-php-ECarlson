<?php
//This is the Controller

// Create or access a Session
session_start();

//require
require $_SERVER['DOCUMENT_ROOT'] . '/week03/products.php';

//check if cart exists or not
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array(); //if it doesn't exist, create it
}

// Check for any "action" name - value pairs in the GET or POST
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

// Control structure to act based on the value of the $action variable
switch ($action){
    case 'add-to-cart':
        // Filter and store the data
        $productId = filter_input(INPUT_POST, 'productId', FILTER_SANITIZE_NUMBER_INT);

        //add product that matches productId to the 'cart'
        if (!isset($_SESSION['cart'][$productId])){
            $_SESSION['cart'][$productId] = 0;
        }
        $_SESSION['cart'][$productId] += 1;

        // Calls a view where the data can be displayed
        header("Location: /week03/view/view-cart.php");
        exit;
        break;

    case 'confirm':
        // Filter and store the data
        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
        $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
        $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
        $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        //stores shipping info in a variable that can be used
        $_SESSION['shipping_address'] = array("fname" => $fname, "lname" => $lname, "address" => $address, "city" => $city, "state" => $state, "zip" => $zip, "email" => $email);

        // Calls a view where the data can be displayed
        header("Location: /week03/view/confirmation.php");
        exit;
        break;

    default:
         'view/browse.php';
         break;
    }
