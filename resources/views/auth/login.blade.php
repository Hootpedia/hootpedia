<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        span.psw {
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
            span.psw {
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


<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

{{--
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Registration</button>
--}}

<! -- Login -->

<div id="id01" class="modal">

    <form class="modal-content animate" action="/login" method="POST">
        @csrf
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <a href="https://imgbb.com/"><img src="https://i.ibb.co/HY2p0yK/Hootpedia-logo-removebg-preview-1.png" alt="Hootpedia-logo-removebg-preview-1" border="0"></a>
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text {{@errors->has('uname') ? 'is-danger' : ''}}" placeholder="Enter Username" name="uname" required>
            @if ($errors->has('uname'))
                <p class="help is-danger">{{$errors->first('uname')}}</p>
            @endif

            <label for="psw"><b>Password</b></label>
            <input type="password {{@errors->has('psw') ? 'is-danger' : ''}}" placeholder="Enter Password" name="psw" required>
            @if ($errors->has('psw'))
                <p class="help is-danger">{{$errors->first('psw')}}</p>
            @endif

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#D9EFF7">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>

<! -- Registration -->
{{--

<div id="id02" class="modal">

    <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <a href="https://imgbb.com/"><img src="https://i.ibb.co/HY2p0yK/Hootpedia-logo-removebg-preview-1.png" alt="Hootpedia-logo-removebg-preview-1" border="0"></a>
        </div>

        <div class="container">
            <label for="uname"><b>Enter a Username:</b></label>
            <input type="text" placeholder="Username" name="uname" required>

            <label for="email"><b>Enter E-mail:</b></label>
            <input type="text" placeholder="E-mail" name="uname" required>

            <label for="psw"><b>Enter a Password:</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="confirm_psw"><b>Confirm Password:</b></label>
            <input type="password" placeholder="Confirm Password" name="psw" required>

            <button type="register">Register</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#D9EFF7">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
    </form>
</div>
--}}

<! -- Password validation -->

<script>
    document.querySelector('.register').onclick = function(){
        let password = document.querySelector('.psw').value,
            confirmPassword = document.querySelector('.confirm_psw').value;

        if(psw ==""){
            alert("Password field cannot be empty.");
        }
        else if(password != confirmPassword){
            alert("Password did not match. Please try again.");
            return false;
        }
    }

</script>


{{--
<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
--}}

<script>
    // Get the modal
    let modal = document.getElementById('id02');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>
