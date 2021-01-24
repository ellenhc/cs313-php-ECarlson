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

        $productId = filter_input(INPUT_POST, 'productId', FILTER_SANITIZE_NUMBER_INT);

        //add product that matches productId to the 'cart'
        if (!isset($_SESSION['cart'][$productId])){
            $_SESSION['cart'][$productId] = 0;
        }
        $_SESSION['cart'][$productId] += 1;
        //print_r($_SESSION['cart']);

        // Calls a view where the data can be displayed
        include 'view/view-cart.php';

        break;

    case 'checkout':
        break;
    }
?>