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
          <h1 class="text-center mt-4">DATA WALI KELAS</h1>
        </div>
      </div>
    </div>
  </div>


  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">

          	<br/>
          	<br/>
          	<button class="btn btn-primary shadow" data-toggle="modal" data-target="#ModalTmbhDataA"><i class="fa fa-fw fa-plus"></i>Tambah Data</button>
          	<br/>
          	<br/>
            <table class="table table-bordered " id="myTable">
              <thead class="thead-primary">
                <tr>
                  <th class="table-primary align-items-center text-center justify-content-center" style="">ID Guru</th>
                  <th class="table-primary align-items-center justify-content-center text-center">Password</th>
                  <th class="table-primary align-items-center justify-content-center text-center">Nama</th>
                  <th class="table-primary align-items-center justify-content-center text-center">Kelas</th>
                  <th class="table-primary text-center justify-content-center align-items-center">Pilihan</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  include '../configasalam.php';
                  $data = mysqli_query($conn,"select * from wali ");
                  while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                  <th class="align-items-center justify-content-center text-center"><?php echo $d['nomorindukwali'] ?></th>
                  <td class="justify-content-center align-items-center text-center"><?php echo $d['password'] ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $d['namawali'] ?></td>
                  <td class="justify-content-center align-items-center text-center"><?php echo $d['kelas'] ?></td>
                  <td class="justify-content-center align-items-center text-center">
                    <div class="btn-group">
                      <button class="btn btn-success shadow" data-target="#ModalEditDataA<?php echo $d['nomorindukwali']; ?>" data-toggle="modal" >Edit</button> 
                    </div>
                  </td>
                </tr>
              </tbody>
              <?php } ?>
            </table>
            
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- TAMBAH DATA -->
  <div id="ModalTmbhDataA" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary" style="">
          <h4 class="modal-title">Tambah Data Guru</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>
        <form method="post" action="tambahguru/tambahaksiguru.php">
        <div class="modal-body">
          <div class="form-group">
            <label for="nama">Nomor Induk : </label>
            <input type="text" name="nomorindukwali" required="required" class="form-control bg-info" style="border:none">
          </div>

          <div class="form-group">
            <label for="nama">Password : </label>
            <input type="text" name="password" required="required" class="form-control bg-info" style="border:none">
          </div>

          <div class="form-group">
            <label for="nama">Nama Wali : </label>
            <input type="text" name="namawali" required="required" class="form-control bg-info" style="border:none">
          </div>

          <div class="form-group">
            <label for="nama">Kelas : </label>
            <input type="text" name="kelas"  class="form-control bg-info" style="border:none">
          </div>
        </div>
        <div class="modal-footer p-0 pb-3 pr-3">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      </div>
    </div>
  </div>
    <!-- Edit Data -->
  <?php 
    include '../configasalam.php';
    $asolole = mysqli_query($conn,"select * from wali");
    while($d = mysqli_fetch_array($asolole)){
  ?>
  <div id="ModalEditDataA<?php echo $d['nomorindukwali'];?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-primary" style="">
          <h4 class="modal-title">Edit Data Guru</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
        </div>

          <form method="post" action="tambahguru/updateguru.php">
        <input type="hidden" name="idlama" value="<?php echo $d['nomorindukwali'];?>">
        <div class="modal-body">
          <div class="form-group">
            <label for="nama">ID Wali : </label>
            <input type="text" name="nomorindukwalibaru" required="" class="form-control bg-info" style="border:none" value="<?php echo $d['nomorindukwali'];?>">
          </div>
          <div class="form-group">
            <label for="nama">Password : </label>
            <input type="text" name="password" required="" class="form-control bg-info" style="border:none" value="<?php echo $d['password'];?>">
          </div>
          <div class="form-group">
            <label for="nama">Nama: </label>
            <input type="text" name="namawali" required="" class="form-control bg-info" style="border:none" value="<?php echo $d['namawali'];?>">
          </div>
          <div class="form-group">
            <label for="nama">Kelas : </label>
            <input type="text" name="kelas" required="" class="form-control bg-info" style="border:none" value="<?php echo $d['kelas'];?>">
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

</body>

</html>