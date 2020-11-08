<html lang="en">
<head>
    <?php //include 'header.php'; ?>
    <title>Hootpedia</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="" type="image/gif" sizes="16x16">

    <!-- Bootstrap & Core CSS, Font -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700&family=Noto+Serif:wght@400;700&display=swap"
        rel="stylesheet">

    <!--- font-family: 'Merriweather', serif; --->
    <!--font-family: 'Noto Serif', serif;-->
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            /* Full-width input fields */
            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            /* Set a style for all buttons */
            button {
                background-color: #0C9DD0;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
                width: auto;
                padding: 15px 20px;
                background-color: #f44336;
            }

            /* Center the image and position the close button */
            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
                position: relative;
            }

            img.avatar {
                width: 50%;
                border-radius: 50%;
            }

            .container {
                padding: 16px;
            }

            span.password {
                float: right;
                padding-top: 16px;
            }

            /* The Modal (background) */
            .modal {
                display: none; /* Hidden by default */
                position: fixed; /* Stay in place */
                z-index: 1; /* Sit on top */
                left: 0;
                top: 0;
                width: 100%; /* Full width */
                height: 100%; /* Full height */
                overflow: auto; /* Enable scroll if needed */
                background-color: rgb(0,0,0.5); /* Fallback color */
                background-color: rgba(0,0,0.5,0.4); /* Black w/ opacity */
                padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content {
                background-color: #D9EFF7;
                margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */
            .close {
                position: absolute;
                right: 25px;
                top: 0;
                color: #000;
                font-size: 35px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
                -webkit-animation: animatezoom 0.6s;
                animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom {
                from {
                    -webkit-transform: scale(0)
                }

                to {
                    -webkit-transform: scale(1)
                }
            }

            @keyframes animatezoom {
                from {
                    transform: scale(0)
                }

                to {
                    transform: scale(1)
                }
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.password {
                    display: block;
                    float: none;
                }

                .cancelbtn {
                    width: 100%;
                }
            }
        </style>

</head>

<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-md bg-light navbar-light sticky-top shadow-sm px-5">
    <a class="navbar-brand" href="index.html">
        <div class="d-flex">
            <img src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png"
                 width="100">
            <h2 class="pl-3 pt-4" style="font-family: Noto Serif, serif; font-weight: bold; ">Hootpedia</h2>
        </div>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>


        <div class="collapse navbar-collapse flex-grow-0 ml-auto mr-1" id="collapsibleNavbar">
            <ul class="navbar-nav text-right">
                @if(!auth()->check())
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
                <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Register</button>

                   {{-- <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark" href="{{\GuzzleHttp\Psr7\uri_for('/view/login')}}">LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark"
                       href="{{\GuzzleHttp\Psr7\uri_for('/view/register')}}">SIGN UP</a>
                    </li>--}}
                <!-- Login -->
                    <li class="nav-item">
                        <div id="id01" class="modal">

                            <form class="modal-content animate" action="/login" method="POST">
                                @csrf
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                    <a href="https://imgbb.com/"><img src="https://i.ibb.co/HY2p0yK/Hootpedia-logo-removebg-preview-1.png" alt="Hootpedia-logo-removebg-preview-1" border="0"></a>
                                </div>

                                <div class="container">
                                    <label for="email"><b>Email</b></label>
                                    <input type="text" placeholder="Enter Username" name="email" required>

                                    <label for="password"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="password" required>

                                    <button type="submit">Login</button>
                                    <label>
                                        <input type="checkbox" checked="checked" name="remember"> Remember me
                                    </label>
                                </div>

                                <div class="container" style="background-color:#D9EFF7">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                    <span class="password">Forgot <a href="#">password?</a></span>
                                </div>
                            </form>
                        </div>

                    </li>

                    <li class="nav-item">
                        <div id="id02" class="modal">

                            <form class="modal-content animate" action="/register" method="POST">
                                @csrf
                                <div class="container">
                                    <div class="imgcontainer">
                                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                                        <a href="https://imgbb.com/"><img src="https://i.ibb.co/HY2p0yK/Hootpedia-logo-removebg-preview-1.png" alt="Hootpedia-logo-removebg-preview-1" border="0"></a>
                                    </div>


                                        <label for="username"><b>Enter a Username:</b></label>
                                        <input type="text"  placeholder="Username" name="username" required>

                                        <label for="email"><b>Enter E-mail:</b></label>
                                        <input type="text" placeholder="E-mail" name="email" required>

                                        <label for="password"><b>Enter a Password:</b></label>
                                        <input type="password" placeholder="Enter Password" name="password" required>

                                    <label for="confirm_psw"><b>Confirm Password:</b></label>
                                    <input type="password" placeholder="Confirm Password" name="confirm_psw" required>

                                    <button type="submit">Register</button>
                                    <label>
                                        <input type="checkbox" checked="checked" name="remember"> Remember me
                                    </label>
                                </div>

                                <div class="container" style="background-color:#D9EFF7">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </li>
                       <! -- Password validation -->

                  {{--     <script>
                           //maybe use document.getElementById?
                           document.querySelector('.register').onclick = function(){
                               let password = document.querySelector('.psw').value();
                               let confirmPassword = document.querySelector('.confirm_psw').value();
                               console.log(password.value());

                               if(password ===""){
                                   alert("Password field cannot be empty.");
                               }
                               else if(password !== confirmPassword){
                                   alert("Password did not match. Please try again.");
                                   return false;
                               }
                           }

                       </script>--}}

            @elseif(auth()->check())
                    <ul>
                        <li class="nav-item">
                            <button>{{auth()->user()->name}}</button>
                        </li>
                        <li class="nav-item">
                            <a href="/logout">Logout</a>
                        </li>
                    </ul>
            @endif

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
                            <img class="img-fluid border rounded-circle"
                                 src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png"
                                 style="max-width:100px; height:auto;">
                        </div>
                        <div class="col-9">
                            <h5 class="card-title">Subject title</h5>
                            <p class="small text-secondary">Author Name</p>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
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
                <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                       aria-label="Search">
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
<script>
    // Get the modal
    const modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>


<script>
    // Get the modal
    var modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="js/bootstrap.min.js"></script>


</html>
