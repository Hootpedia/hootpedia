<html lang="en">
<head>
<?php //include 'header.php'; ?>
    <title>Hootpedia</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="" type="image/gif" sizes="16x16">

    <!-- Bootstrap & Core CSS, Font -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&family=Noto+Serif:wght@400;700&display=swap" rel="stylesheet">

    <!--- font-family: 'Merriweather', serif; --->
    <!--font-family: 'Noto Serif', serif;-->

</head>

<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-md bg-light navbar-light sticky-top shadow-sm px-5">
    <a class="navbar-brand" href="index.html">
        <div class="d-flex">
            <img src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png" width="100">
            <h2 class="pl-3 pt-4" style="font-family: Noto Serif, serif; font-weight: bold; ">Hootpedia</h2>
        </div>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse flex-grow-0 ml-auto mr-1" id="collapsibleNavbar">
        <ul class="navbar-nav text-right">
            <li class="nav-item">
                <a class="nav-link font-weight-bold text-dark" href="#">LOGIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bold text-dark" href="#">SIGN UP</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <!-- Testing Positioning for sidebar content-->
    <div class="row" style="height:100%;">
        <div class="col-md-9 text-center">
            <!--Article Example-->
            <h1 class="pt-5">Articles/Discussions</h1>
            <div class="d-inline">
                <p>Article blocks go here.</p>

                <!-- Cards for user Discussions -->
                <div class="card mx-auto d-flex justify-content-center shadow" style="width: 60%; min-width:25rem;">
                    <h2 class="border border-top-0 border-left-0 border-right-0 py-2">Topic</h2>
                    <div class="card-body row text-left">
                        <div class="col-3 text-center p-1">
                            <img class="img-fluid border rounded-circle" src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png" style="max-width:100px; height:auto;">
                        </div>
                        <div class="col-9">
                            <h5 class="card-title">Subject title</h5>
                            <p class="small text-secondary">Author Name</p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-sm btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Responsive Sidebar, Defaults to bottom on Small Screens -->
        <div class="col-md-3 bg-light p-3">
            <p>sidebar content</p>
            <form class="form-inline d-flex justify-content-left md-form form-sm mt-0">
                <i class="fas fa-search" aria-hidden="true"></i>
                <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
            </form>

        </div>
    </div>

</div>

<!-- Footer -->
<footer class="bg-dark text-light shadow-lg" style="height:200px;">
    <div class="container text-center p-5">
        <p>This is a test footer.</p>
    </div>
</footer>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>


</html>
