<!DOCTYPE html>
<html lang="en">
<!--
    Created by:                Corey Rogers
    Date submitted:
    Assignment:                Final Portfolio Project
-->

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corey's Portfolio</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="icon" type="image/png" href="images/open-book.png">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="80">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Corey Rogers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Portfolio Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#bio">Bio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="305/Resume/index.html" target="_blank">Resume</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.linkedin.com/in/corey-rogers-6419b5198/" target="_blank">LinkedIn Profile</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Additional Projects
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="305/guestbook/guestbook.html">Guestbook</a>
                    <a class="dropdown-item" href="305/guestbook/guestbookAdmin.php">Admin Page</a>
                </div>
            </li>


        </ul>
    </div>
</nav>

<div id="main" class="container pt-3">

    <div class="jumbotron mt-5">
        <h1 class="display-3 font-weight-bold text-primary text-uppercase">Corey Rogers</h1>
        <p class="text-dark">Currently pursuing a Bachelor's of Applied Science in
            Software Development at Green River College.  I created this site so people can learn more about me
            and see examples of some of the projects I'm currently working on.</p>
        <hr class="my-4">
        <p>Please let me know that you visited by
            <a class="text-primary" href="https://chrogers.greenriverdev.com/305/guestbook/guestbook.html">signing my guestbook</a>!</p>
    </div> <!-- end jumbotron div -->
    <div class="mb-3">
        <h2 class="h2 text-primary font-weight-bold pt-3" id="bio">Bio</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="images/rogersProfile.jpg" class="rounded-circle img-fluid mb-3" alt="Corey Rogers">
            </div>
            <div class="col-md-8 align-self-center">
                <p>I'm studying software development as part of a career change to pursue my long-held interest
                    in technology. I believe that technology has the potential to greatly improve many aspects of our
                    lives and to help us address some of our biggest global challenges. I spent the last nine years
                    building a successful law firm in Seattle, and I was constantly amazed by the advancements that
                    technology brought to the legal industry and to the wider business world during that time.
                    I'm excited to have the opportunity to study more about computer science and eventually
                    work as a software engineer. </p>
            </div>

        </div>
    </div>  <!-- end bio div -->
    <hr>
    <div>
        <h2 class="h2 text-primary font-weight-bold mb-4 pt-4" id="portfolio">Portfolio</h2>
        <h3 class="mb-3">Current Web Development Project</h3>
        <hr>
        <div class="row mb-3 mt-3 pt-3"> <!-- Row 1 -->
            <div class="col-md-4 align-self-center">
                <p>I am working as part of an Agile/Scrum team to develop a responsive, database-driven web
                    application for a professional leadership coaching and consulting business. </p>
            </div>
            <div class="col-md-8">
                <img src="images/daysideMain.jpg" class="rounded img-fluid mb-3 border border-dark"
                     alt="Project main page photo">
            </div>

        </div> <!-- end row div -->
        <hr>

        <div class="row mb-3 mt-3 pt-3"> <!-- Row 2 -->
            <div class="col-md-8">
                <img src="images/daysideContactForm.jpg" class="rounded img-fluid mb-3 border border-dark"
                     alt="Contact Form photo">
            </div>
            <div class="col-md-4 align-self-center">
                <p>This web application allows new clients to contact the business through a web form.</p>
            </div>
        </div> <!-- end row div -->
        <hr>

        <div class="row mb-3 mt-3 pt-3">
            <div class="col-md-4 align-self-center">
                <p>A password-protected admin page allows the client to easily update the information that is
                    displayed on his website.
                </p>
            </div>
            <div class="col-md-8">
                <img src="images/daysideLogin.jpg" class="rounded img-fluid mb-3 border border-dark"
                     alt="Login Page photo">
            </div>

        </div> <!-- end row div -->
        <hr>

        <div class="row mb-3 mt-3 pt-3">
            <div class="col-md-8">
                <img src="images/daysideContacts.jpg" class="rounded img-fluid mb-3 border border-dark"
                     alt="Contacts Page photo">
            </div>
            <div class="col-md-4 align-self-center">
                <p>Our client can also view and manage all contacts and send
                    listserv emails through the admin section of his website.
                </p>
            </div>

        </div> <!-- end row div -->
        <hr>

        <div class="row mb-3 mt-3 pt-3">
            <div class="col-md-4 align-self-center">
                <p>My specific contributions to the project include creating webpages and forms using Bootstrap
                    and producing code for inline and server-side validation for web forms using JavaScript and PHP.
                    I also created MySQL database tables to store content and used PHP and SQL to update
                    the database and construct website elements from database content using PHP.
                </p>
            </div>
            <div class="col-md-8">
                <img src="images/daysideTestimonials.jpg" class="rounded img-fluid mb-3 border border-dark"
                     alt="Testimonials Page photo">
            </div>

        </div> <!-- end row div -->
        <hr>

    </div>  <!-- end portfolio div -->
</div> <!-- end main div -->
<footer class="mt-5 py-4">
    <div class="float-right p-5">
        <a href="305/guestbook/guestbookAdmin.php">
            Admin
        </a>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="scripts/portfolio.js"></script>

</body>
</html>