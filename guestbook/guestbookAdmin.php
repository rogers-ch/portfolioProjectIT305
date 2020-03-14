<?php
/**
 *  File name & path: https://chrogers.greenriverdev.com/305/guestbook/guestbookAdmin.php
 *  Author: Corey Rogers
 *  Date: 03/06/2020
 *  Description: Admin page for login application
 */

require('includes/guestbookCheckLogin.php');

?>
<!DOCTYPE html>
<html lang="en">
<!--
    Created by:                Corey Rogers
    Date submitted:            02/28/2020
    Assignment:                Guestbook admin page
-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/guestbookAdmin.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="icon" type="image/png" href="images/open-book.png">

</head>
<body id="adminBody">
<div id="main" class="container p-3">
    <div class="jumbotron mb-0">

        <h1>Guestbook Summary</h1>
    </div>
</div>
<div class="p-5">
    <nav aria-label="breadcrumb" class="breadcrumb d-flex justify-content-between mb-0">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="guestbook.html">Guestbook Home</a></li>
            <li class="breadcrumb-item active">Admin</li>
        </ol>
        <a class="btn btn-secondary my-auto" href="logout.php">Logout</a>

    </nav>
    <hr>
    <table id="guestbookTable">
        <thead>
        <tr>
            <th>Guest ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>LinkedIn Address</th>
            <th>How We Met</th>
            <th>Mailing List</th>
            <th>Date/Time Added (EST)</th>
        </tr>
        </thead>

        <?php

        //Connect to db
        require('/home/chrogers/db.php');

        // Define a query
        $sql = "SELECT * FROM guestBook";

        // Send the query to the db
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);

        // Process the result
        foreach ($result as $row) {
            //var_dump($row);

            $guest_id = $row['guest_id'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $email = $row['email'];
            $jobTitle = $row['jobTitle'];
            $company = $row['company'];
            $linkedIn = $row['linkedIn'];
            $howMet = $row['howMet'];
            $metOther = $row['metOther'];
            $message = $row['message'];
            $mailingList = $row['mailingList'];
            $emailFormat = $row['emailFormat'];
            $timestamp = $row['timestamp'];


            echo "<tr>
                        <td>$guest_id</td>
                        <td>$firstName</td>
                        <td>$lastName</td>
                        <td>$email</td>
                        <td>$linkedIn</td>
                        <td>$howMet</td>
                        <td>$mailingList</td>
                        <td>$timestamp</td>
                        
                 </tr>";

            /*  //The following fields were removed from the table for cleaner formatting on admin page

                        <td>$jobTitle</td>
                        <td>$company</td>
                        <td>";
            echo wordwrap($metOther, 20, "<br>\n", false);
            echo "</td>
                        <td>";
            echo wordwrap($message, 20, "<br>\n", false);
            echo "</td>
                        <td>$emailFormat</td>
                  </tr>";
            */

        }   // close foreach loop


        ?>
    </table>
</div>
<footer id="adminFooter" class="mt-5 py-4">
    <div class="text-center">Icon made by <a href="https://www.flaticon.com/authors/xnimrodx" title="xnimrodx">xnimrodx</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></div>

</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $('#guestbookTable').DataTable();
</script>

</body>
</html>