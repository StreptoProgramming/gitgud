<?php 
  session_start();
  $level=$_SESSION['level'];
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
  }
  if ($level=='wali') {

  }else{
    header('location: ../index.php');
  }

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta charset="viewport" content="width=device-width, initial-scale=1.0">
    <meta htpp-equiv="X-UA-Compatible" content="IE=Edge">

    <title> SMP_Assalam_Dashboard </title>

    <!-- Bootstraps CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Pure CSS -->
    <link rel="stylesheet" href="../css/dashboard.css">

    <!-- Css Only for admin Dashboard -->


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3> Sistem Manejemen Absensi</h3>
                <h3> SMP Assalam </h3>
            </div>

            <ul class="list-unstyled component">
                <p> Selamat Datang </p>
                <li class="active">
                    <a href="./dashboard_wali.php"> Dashboard </a>
                </li>
                <li>
                    <a href="./tanggalrekap.php"> Rekap </a>
                </li>
                <li>
                    <a href="./tanggalrekaphari.php"> Rekap Kelas</a>
                </li>
                <li>
                    <a href="./halamanabsensi.php"> Absensi </a>
                </li>

            </ul>

            <!-- Kolom download klw di contohnya mah -->

        </nav>

        <!-- Page Content on Wrapper / Holder -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
            

            </nav>

        </div>
    </div>

    <!-- Jquery  -->

    <!-- JS From Bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>