<?php include '../configasalam.php'?>
<?php 
  session_start();
  $level=$_SESSION['level'];
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
  }else{
    header('location: ../index.php');
  }
  ?>
 

        <!-- Content -->
        <div id="content">

        <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center mt-4">LOG RFID</h1>
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
                <tr class="bg-success">
                  <th class="table-primary align-items-center text-center justify-content-center bg-success">Nama Siswa</th>
                  <th class="table-primary align-items-center justify-content-center text-center bg-success">Kelas</th>
                  <th class="table-primary align-items-center justify-content-center text-center bg-success">Tanggal</th>
                  <th class="table-primary align-items-center justify-content-center text-center bg-success">Waktu</th>
                  <th class="table-primary align-items-center justify-content-center text-center bg-success">UID</th>
                  <th class="table-primary text-center justify-content-center align-items-center bg-success">Pilihan</th>
                </tr>
              </thead>
              <!-- <tbody> -->
                <?php 
                  include '../configasalam.php';
                  $data = mysqli_query($conn,"select * from log ");
                  while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                  <th class="align-items-center justify-content-center text-center"><?php echo $d['namasiswa'] ?></th>
                  <td class="justify-content-center align-items-center text-center"><?php echo $d['kelas'] ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $d['tanggal'] ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $d['waktu'] ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $d['uid'] ?></td>
                  <td class="justify-content-center align-items-center text-center">
                    <div class="btn-group">
                      <button class="btn btn-success shadow" data-target="#ModalEditDataA<?php echo $d['idlog']; ?>" data-toggle="modal" >Sambungkan</button> 
                    </div>
                  </td>
                </tr>
        <!--       </tbody> -->
              <?php } ?>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>


        </div>

        <!-- Content Goes Here -->

 

  </div>
  </body>
    <!-- Edit Data -->
  <?php 
    include '../configasalam.php';
    $asolole = mysqli_query($conn,"select * from log");
    while($d = mysqli_fetch_array($asolole)){
  ?>
  <div id="ModalEditDataA<?php echo $d['idlog'];?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary" style="">
          <h4 class="modal-title">Sambungkan Data</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>

          <form method="post" action="tambahlog/updatelog.php">
        <input type="hidden" name="uid" value="<?php echo $d['uid'];?>">
        <div class="modal-body">
          <div class="form-group">
            <label>Nama : </label>
            <select name="namasiswa" required="required">
            <?php 
                    include '../configasalam.php';
                    $data = mysqli_query($conn,"select * from siswa");
                    while($d = mysqli_fetch_array($data)) {?>
                      <option value="<?php echo $d['namasiswa']?>"><?php echo $d['namasiswa']?></option>
                    <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Kelas : </label>
            <select name="kelas" required="required">
            <?php 
                    include '../configasalam.php';
                    $data = mysqli_query($conn,"select * from kelas");
                    while($d = mysqli_fetch_array($data)) {?>
                      <option value="<?php echo $d['namakelas']?>"><?php echo $d['namakelas']?></option>
                    <?php } ?>
            </select>
          </div>
        </div>
        <div class="modal-footer p-0 pb-3 pr-3">
          <input type="submit" class="btn btn-primary" value="Submit">
        </div>
        </form>
      </div>
    </div>
  </div>

   
<?php } ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>



</html>