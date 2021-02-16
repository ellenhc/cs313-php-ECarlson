<?php 
// Create or access a Session
session_start();

require_once '../library/connections.php';
require_once 'model.php';

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

switch ($action) {
    default:
        break;
}