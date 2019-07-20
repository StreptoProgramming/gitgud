<?php include '../configasalam.php'?>
<?php 
  session_start();
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
</head>
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
            <table class="table table-bordered " id="myTable">
              <thead class="thead-primary">
                <tr>
                  <th class="table-primary align-items-center text-center justify-content-center" style="">Nama</th>
                  <th class="table-primary align-items-center justify-content-center text-center">Kelas</th>
                  <th class="table-primary align-items-center justify-content-center text-center">Sakit</th>
                  <th class="table-primary align-items-center justify-content-center text-center">Izin</th>
                  <th class="table-primary align-items-center justify-content-center text-center">Alpha</th>
                  <th class="table-primary align-items-center justify-content-center text-center">Hadir</th>
                  <th class="table-primary align-items-center justify-content-center text-center">Terlambat</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  include '../configasalam.php';
                  $data = mysqli_query($conn,"select distinct namasiswa, kelas from absensi ");
                  while($d = mysqli_fetch_array($data)){
                    $nm=$d['namasiswa'];
                    $kls=$d['kelas'];
                    $jmlsakit=mysqli_query($conn,"select count(*) as aa from absensi where status='sakit' and namasiswa='$nm' and kelas='$kls' ");
                    $jmlsakit = mysqli_fetch_array($jmlsakit)['aa'];
                    $jmlizin=mysqli_query($conn,"select count(*) as bb from absensi where status='izin' and namasiswa='$nm' and kelas='$kls'");
                    $jmlizin = mysqli_fetch_array($jmlizin)['bb'];
                    $jmlalpha=mysqli_query($conn, "select count(*) as cc from absensi where status='alpha' and namasiswa='$nm' and kelas='$kls'");
                    $jmlalpha = mysqli_fetch_array($jmlalpha)['cc'];
                    $jmlhadir=mysqli_query($conn, "select count(*) as dd from absensi where status='hadir' and namasiswa='$nm' and kelas='$kls'");
                    $jmlhadir = mysqli_fetch_array($jmlhadir)['dd'];
                    $jmlterlambat=mysqli_query($conn, "select count(*) as ee from absensi where status='terlambat' and namasiswa='$nm' and kelas='$kls'");
                    $jmlterlambat = mysqli_fetch_array($jmlterlambat)['ee'];

                ?>
                <tr>
                  <th class="align-items-center justify-content-center text-center"><?php echo $d['namasiswa'] ?></th>
                  <td class="justify-content-center align-items-center text-center"><?php echo $d['kelas'] ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $jmlsakit ?></td>
                   <td class="justify-content-center align-items-center text-center"><?php echo $jmlizin ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $jmlalpha ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $jmlhadir ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $jmlterlambat ?></td>
                </tr>
              </tbody>
              <?php } ?>
            </table>
            
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