<head>
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
{{--<nav class="navbar navbar-expand-md bg-light navbar-light sticky-top shadow-sm px-5">
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
            <li class="nav-item active">
                <a class="nav-link" href="#">Html <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Fundamentals</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Java</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">C++</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">C#</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Python</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">SQL</a>
            </li>
        </ul>
        <ul class="navbar-nav text-right">
            <li class="nav-item">
                <a class="nav-link font-weight-bold text-dark" href="#">LOGIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bold text-dark" href="#">SIGN UP</a>
            </li>
        </ul>
    </div>
</nav>--}}

@include('includes.navigation')

<html lang ="en">
<form>
    <br>
    <p>Profile picture Preview</p>
    <input type="image" src="https://cdn.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" alt="Submit" style="float:inherit" width="250" height="250">
    <br><br>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname">
    <br>
    <form>
        <br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Female</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Male</label><br><br>
        <label for="fname">Age:</label><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="fname">School:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <br><label for="fname">Bio:</label><br>

        <input type="text" id="fname" name="fname"><br>
        <br><input type="submit" value="Submit">
        <br><br>
    </form>
