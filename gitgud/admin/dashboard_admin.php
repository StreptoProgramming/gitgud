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
        <!-- Sidebar Holder -->
          <nav id="sidebar">
    <div class="sidebar-header">
      <h3> Sistem Manejemen Absensi</h3>
      <h3> SMP Assalam </h3>
    </div>

    <ul class="list-unstyled component">
      <p> Selamat Datang </p>
      <li class="active">
        <a href="./dashboard_admin.php"> Dashboard </a>
      </li>
      <li>
        <a href="./tanggalrekap.php"> Rekap </a>
      </li>
      <li>
        <a href="./halamanabsensi.php"> Absensi </a>
      </li>
      <li>
        <a href="./halamanlog.php"> Log RFID </a>
      </li>
      <li>
        <a href="./halamankelas.php"> Kelas </a>
      </li>
      <li>
        <a href="./halamanguru.php"> Guru </a>
      </li>
      <li>
        <a href="./halamanrule.php"> Peraturan Jam </a>
      </li>
    </ul>

            <!-- Kolom download klw di contohnya mah -->

  </nav>

        <!-- Page Content on Wrapper / Holder -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-4 col-lg-3 col-xlg-4">
                            <div class="card card-hover">
                                <div class="box text-center">
                                    <a href="./dashboard_admin.php" class="btn btn-info btn-lag">
                                        <h1><i class="fa fa-th-list"></i></h1>
                                        <h6><span> Dashboard </span></h6>
                                    </a>

                                </div>
                            </div>

                        </div>

                        <!-- Column -->
                        <div class="col-md-4 col-lg-3 col-xlg-4">
                            <div class="card card-hover">
                                <div class="box text-center">
                                    <a href="./tanggalrekap.php" class="btn btn-danger btn-lag text-white">
                                        <h1><i class="fa fa-archive"></i></h1>
                                        <h6><span> Rekap Absensi </span></h6>
                                    </a>

                                </div>
                            </div>

                        </div>
                       <!-- Column -->
                        <div class="col-md-4 col-lg-3 col-xlg-4">
                            <div class="card card-hover">
                                <div class="box text-center">
                                    <a href="./halamanabsensi.php" class="btn btn-warning btn-lag text-white">
                                        <h1><i class="fa fa-clipboard"></i></h1>
                                        <h6><span> Jurnal Absensi </span></h6>
                                    </a>

                                </div>
                            </div>

                        </div>

                        <!-- Column -->
                        <div class="col-md-4 col-lg-3 col-xlg-4">
                            <div class="card card-hover">
                                <div class="box text-center">
                                    <a href="./halamanabsensi.php" class="btn btn-success btn-lag text-white">
                                        <h1><i class="fa fa-address-card"></i></h1>
                                        <h6><span> Log RFID </span></h6>
                                    </a>

                                </div>
                            </div>

                        </div>



                    </div>

                    <!-- 2nd row -->
                    <div class="row row2">
                        
                        <div class="col-md-4 col-lg-5 col-xlg-4">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <a href="./halamanabsensi.php" class="btn btn-lag text-white" style="background: #673ab7;">
                                        <h1><i class="fa fa-clock"></i></h1>
                                        <h6><span>  Peraturan Jam </span></h6>
                                    </a>

                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-lg-3 col-xlg-4">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <a href="./halamanabsensi.php" class="btn btn-lag text-white" style="background: #795548;">
                                        <h1><i class="fa fa-female"></i></h1>
                                        <h6><span> Guru </span></h6>
                                    </a>

                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-lg-3 col-xlg-4">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <a href="./halamanabsensi.php" class="btn  btn-lag text-white"style="background: #546e7a" >
                                        <h1><i class="	fa fa-graduation-cap"></i></h1>
                                        <h6><span> Kelas </span></h6>
                                    </a>

                                </div>
                            </div>

                        </div>

                    </div>


                </div>

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

</html