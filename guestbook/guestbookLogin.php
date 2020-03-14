<?php
/**
 *  File name & path: https://chrogers.greenriverdev.com/305/guestbook/guestbookLogin.php
 *  Author: Corey Rogers
 *  Date: 03/03/2020
 *  Description: login page for guestbook application
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start session
session_start();

// Initialize error flag
$err = false;
$username = "";

//If the form has been submitted
if(!empty($_POST)) {
    // Get username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    //echo $username . ", " . $password;

    require("/home/chrogers/guestbookCredentials.php");

    if ($username == $user && $password == $pass) {

        // Store username in the session array
        $_SESSION['username'] = $username;

        // Redirect to guestbookAdmin.php
        $page = "guestbookAdmin.php";
        header("location: $page");
    } else {
        // Set error flag to true
        $err = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<!--
    Created by:                Corey Rogers
    Date submitted:            03/03/2020
    Assignment:                Guestbook login page
-->
<head>
    <meta charset="UTF-8">
    <title>Guestbook Login</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/guestbookLogin.css">
    <link rel="icon" type="image/png" href="images/open-book.png">

</head>
<body>
<div id="main" class="container pt-3 pb-3">
    <div class="jumbotron">

        <h1 class="h1">Guestbook Login Page</h1>
    </div>

    <nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-between mb-0">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="https://chrogers.greenriverdev.com">Portfolio Home</a></li>
            <li class="breadcrumb-item"><a href="guestbook.html">Guestbook Home</a></li>
            <li class="breadcrumb-item active">Login</li>
        </ol>
    </nav>

    <hr>

    <form action="#" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $username;?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" >

            <?php
            if ($err) {
                echo '<span class="err">Incorrect login</span><br>';
            }
            ?>
        </div>


        <button type="submit" class="btn btn-primary">Login</button>
    </form>

</div>
<footer id="adminFooter" class="mt-5 py-4">
    <div class="text-center">Icon made by <a href="https://www.flaticon.com/authors/xnimrodx" title="xnimrodx">xnimrodx</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></div>

</footer>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>