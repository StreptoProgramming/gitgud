<?php include '../configasalam.php'?>
<?php 
  session_start();
  $level=$_SESSION['level'];
  $tglawal=$_POST['daritanggal'];
  $tglakhir=$_POST['sampaitanggal'];
  $_SESSION['tgalawal']=$tglawal;
  $_SESSION['tgalakhir']=$tglakhir;
  if($_SESSION['status']!="login"){
    header("location:../index.php?pesan=belum_login");
  }
  ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../now-ui-kit.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

  
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
<?php
  if ($level=='admin') {
    include './sidebaradmin.php';
  }elseif ($level=='piket') {
    include './sidebarpiket.php';
  }elseif ($level=='wali') {
    include'./sidebarwali.php';
  }elseif ($level=='siswa') {
    header('location: ../index.php');
  }
?>


   <!-- Page Content on Wrapper / Holder -->
   <div id="content">
   <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center mt-4">Rekap</h1>
        </div>
      </div>
    </div>
  </div>


  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <?php echo "Dari : ".$tglawal."  Sampai : ".$tglakhir ?>

            <table class="table table-bordered " id="myTable">
            
            <a href="rekap/exportrekapkelas.php"><button class="btn btn-primary shadow"><i class="fa fa-fw fa-plus"></i>Download Excel</button></a>
              <thead class="thead-primary">
                <tr class="bg-success">
                  <th class="table-primary align-items-center justify-content-center text-center bg-success">Kelas</th>
                  <th class="table-primary align-items-center justify-content-center text-center bg-success">Sakit</th>
                  <th class="table-primary align-items-center justify-content-center text-center bg-success">Izin</th>
                  <th class="table-primary align-items-center justify-content-center text-center bg-success">Alpha</th>
                  <th class="table-primary align-items-center justify-content-center text-center bg-success">Hadir</th>
                  <th class="table-primary align-items-center justify-content-center text-center bg-success">Terlambat</th>
                  <th class="table-primary align-items-center justify-content-center text-center bg-success">Total Pelanggaran</th>
                  <th class="table-primary align-items-center justify-content-center text-center bg-success">%</th>
                </tr>
              </thead>
              <!-- <tbody> -->
                <?php 
                  include '../configasalam.php';
                  if ($level=='admin' || $level=='piket') {
                  $data = mysqli_query($conn,"select distinct kelas from absensi where tanggal between '$tglawal' and '$tglakhir' ");            
                  }elseif($level=='wali'){
                    $kelas=$_SESSION['kelas'];
                    $data = mysqli_query($conn,"select distinct kelas from absensi where kelas='$kelas' and tanggal between '$tglawal' and '$tglakhir'  ");
                  }
                  while($d = mysqli_fetch_array($data)){
                    $kls=$d['kelas'];
                    $jmlsakit=mysqli_query($conn,"select count(*) as aa from absensi where status='sakit' and kelas='$kls' and tanggal between '$tglawal' and '$tglakhir' ");
                    $jmlsakit = mysqli_fetch_array($jmlsakit)['aa'];
                    $jmlizin=mysqli_query($conn,"select count(*) as bb from absensi where status='izin' and kelas='$kls' and tanggal between '$tglawal' and '$tglakhir'");
                    $jmlizin = mysqli_fetch_array($jmlizin)['bb'];
                    $jmlalpha=mysqli_query($conn, "select count(*) as cc from absensi where status='alpha' and kelas='$kls' and tanggal between '$tglawal' and '$tglakhir'");
                    $jmlalpha = mysqli_fetch_array($jmlalpha)['cc'];
                    $jmlhadir=mysqli_query($conn, "select count(*) as dd from absensi where status='hadir' and kelas='$kls' and tanggal between '$tglawal' and '$tglakhir'");
                    $jmlhadir = mysqli_fetch_array($jmlhadir)['dd'];
                    $jmlterlambat=mysqli_query($conn, "select count(*) as ee from absensi where status='terlambat' and kelas='$kls' and tanggal between '$tglawal' and '$tglakhir'");
                    $jmlterlambat = mysqli_fetch_array($jmlterlambat)['ee'];
                    $sumall=(int)$jmlhadir+(int)$jmlterlambat+(int)$jmlalpha+(int)$jmlizin+(int)$jmlsakit;
                    $persen=((int)$jmlhadir)*100/(int)$sumall;
                    $sumpelanggar=(int)$jmlterlambat+(int)$jmlalpha+(int)$jmlizin+(int)$jmlsakit;
                    $persenlanggar=100-(int)$persen;

                ?>
                <tr>
                  <td class="justify-content-center align-items-center text-center"><?php echo $d['kelas'] ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $jmlsakit ?></td>
                   <td class="justify-content-center align-items-center text-center"><?php echo $jmlizin ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $jmlalpha ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $jmlhadir ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $jmlterlambat ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $sumpelanggar ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $persenlanggar."%" ?></td>
                </tr>
             <!--  </tbody> -->
              <?php } ?>
            </table>
            
          </div>
        </div>
      </div>
    </div>
   </div>

  
  </div>


  </div>

   
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

</body>

</html>