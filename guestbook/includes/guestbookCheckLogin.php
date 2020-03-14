<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//See if the user is logged in
session_start();

//If not logged in
if (!isset($_SESSION['username'])) {
    //Store current location
    $_SESSION['page'] = $_SERVER['SCRIPT_URI'];

    // Redirect to login page
    header("location: guestbookLogin.php");
}