<!DOCTYPE html>
<html>

<head>
    <title> Absensi_SMP_Assalam </title>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS Pure -->
    <link rel="stylesheet" type="text/css" href="css/loginform.css">

</head>

<body>
    <section>
        <div class="login-box">
            <h1> Login Here </h1>
            <div>
                <input type="button" name="button_1" value="Login Siswa" onClick="<?php header("Location: /view_loginsiswa.php"); ?>">
                <input type="button" name="button_2" value="Login Wali Kelas" onClick="<?php header("Location: /view_loginwali.php"); ?>">
                <input type="button" name="button_3" value="Login Piket" onClick="<?php header("Location: /view_loginpiket.php"); ?>">
                <input type="button" name="button_1" value="Login Admin" onClick="<?php header("Location: /view_loginadmin.php"); ?>">

            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>