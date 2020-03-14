<?php


//Turn on error reporting
//ini_set('display_errors', 1);
//error_reporting(E_ALL);


?>

<!DOCTYPE html>
<html lang="en">
<!--
    Created by:                Corey Rogers
    Date submitted:            02/21/2020
    Assignment:                Guestbook Confirm page
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thank You</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/guestbook.css">
    <link rel="icon" type="image/png" href="images/open-book.png">

</head>
<body>
<div id="main" class="container p-3">
    <div class="jumbotron mb-0">

    <?php

    /*
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
    */

    /*
    array(11) {
      ["firstName"]=>
      string(5) "Corey"
      ["lastName"]=>
      string(6) "Rogers"
      ["email"]=>
      string(13) "test@test.com"
      ["jobTitle"]=>
      string(7) "Student"
      ["company"]=>
      string(3) "GRC"
      ["linkedIn"]=>
      string(12) "http.yes.com"
      ["howMet"]=>
      string(5) "Other"
      ["metOther"]=>
      string(4) "Test"
      ["message"]=>
      string(7) "Testing"
      ["addToList"]=>
      string(2) "on"
      ["format"]=>
      string(4) "Text"
    }
    */


    // Validate data - server side
    require ('validateGuestbookFunctions.php');

    $isValid = true;

    // check each requirement
    // first name required
    if (!validName($_POST['firstName'])) {
        echo "<p>Error: First name is required.</p>";
        $isValid = false;
    }

    // last name required
    if (!validName($_POST['lastName'])) {
        echo "<p>Error: Last name is required.</p>";
        $isValid = false;
    }

    // if mailing list checkbox is marked or email address is provided, then email must be valid
    if ((isset($_POST['addToList'])) || (!empty($_POST['email']))) {
        if (!validEmail($_POST['email'])) {
            echo "<p>Error: A valid email address is required.</p>";
            $isValid = false;
        }
    }

    // require "How we met" and make sure the selection is valid
    if ($_POST['howMet'] == "Please Select") {    // no selection made
        echo "<p>Error: 'How we met' is required.  Please select an answer.</p>";
            $isValid = false;
    }
    else {    // invalid selection
        if (!validHowMet($_POST['howMet'])) {
            echo "<p>Error: Invalid selection for 'How we met'!</p>";
            $isValid = false;
        }
    }

    // needs a check for validation for linkedIn address
    if (!validlinkedIn($_POST['linkedIn'])) {
        echo "<p>Error: LinkedIn address must be valid if provided (address must start with
                                    \"http\" and end with \".com\").</p>";
        $isValid = false;
    }


    // if valid, display a summary of the data
    if ($isValid) {

        // Connect to database
        require('/home/chrogers/db.php');

        // Get all user input and 'escape' it
        $firstName = mysqli_real_escape_string($cnxn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($cnxn, $_POST['lastName']);
        $email = mysqli_real_escape_string($cnxn, $_POST['email']);
        $jobTitle = mysqli_real_escape_string($cnxn, $_POST['jobTitle']);
        $company = mysqli_real_escape_string($cnxn, $_POST['company']);
        $linkedIn = mysqli_real_escape_string($cnxn, $_POST['linkedIn']);
        $howMet = mysqli_real_escape_string($cnxn, $_POST['howMet']);
        $metOther = mysqli_real_escape_string($cnxn, $_POST['metOther']);
        $message = mysqli_real_escape_string($cnxn, $_POST['message']);

        // mailing list checkbox
        if (isset($_POST['addToList'])) {
            $addToList = "Yes";
        }
        else {
            $addToList = "No";
        }

        // email format checkbox
        if (isset($_POST['format'])) {
            $format = mysqli_real_escape_string($cnxn, $_POST['format']);
        }
        else {
            $format = "None";
        }

        // Write an SQL statement
        $sql = "INSERT INTO guestBook (lastName, firstName, email, jobTitle, company, linkedIn, 
                howMet, metOther, message, mailingList, emailFormat) 
                VALUES ('$lastName', '$firstName', '$email', '$jobTitle', '$company', '$linkedIn', '$howMet', 
                '$metOther', '$message', '$addToList', '$format')";


        //echo $sql;
        //return;

        // Send the query to the database
        $result = mysqli_query($cnxn, $sql);

        // Print a confirmation
        /*
        if ($result){
            echo "Student inserted successfully!";
        }
        */

        //Display the form data

        // put confirmation message in HTML
        echo "<h1 class=\"display-4 text-center\">Thank you for signing my guestbook, $firstName!</h1>";

        // put navigation in HTML
        echo "<nav class=\"pt-5\" aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a class=\"text-dark\" href=\"guestbook.html\">Guestbook Home</a></li>
                    <li class=\"breadcrumb-item active\">Confirmation</li>
                </ol>
            </nav>
            <hr>";

        // list data
        echo "<p><strong>Name: </strong>$firstName $lastName</p>";
        echo "<p><strong>Email: </strong>$email</p>";
        echo "<p><strong>Job Title: </strong>$jobTitle</p>";
        echo "<p><strong>Company: </strong>$company</p>";
        echo "<p><strong>LinkedIn Address: </strong>$linkedIn</p>";
        echo "<p><strong>How did we meet?: </strong>$howMet</p>";

        $metOther = wordwrap($metOther, 100, "<br>\n", false);
        echo "<p><strong>If other (Please specify): </strong><br>";
        echo "$metOther</p>";

        $message = wordwrap($message, 100, "<br>\n", false);
        echo "<p><strong>Message: </strong><br>";
        echo "$message</p>";
        echo "<p><strong>Add to mailing list?: </strong>$addToList</p>";
        echo "<p><strong>Email format: </strong>$format</p>";
    }

    ?>

    </div>
</div>
<footer class="mt-5 py-4">
    <div class="text-center">Icon made by <a href="https://www.flaticon.com/authors/xnimrodx" title="xnimrodx">xnimrodx</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></div>
    <div class="float-right p-5">
        <a href="guestbookAdmin.php">
            Admin
        </a>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>