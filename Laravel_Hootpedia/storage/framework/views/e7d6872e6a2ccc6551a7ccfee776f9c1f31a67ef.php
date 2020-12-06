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


<?php echo $__env->make('includes.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<?php /**PATH C:\Users\durew\hootpedia\Laravel_Hootpedia\resources\views/profile.blade.php ENDPATH**/ ?>