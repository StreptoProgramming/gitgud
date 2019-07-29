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

  <!-- Sidebar Holder -->
<?php
  if ($level=='admin') {
    include './sidebaradmin.php';
  }elseif ($level=='piket') {
    include './sidebarpiket.php';
  }elseif ($level=='wali') {
    include'./sidebarwali.php';
  }elseif ($level=='siswa') {
    include './sidebarsiswa.php';
  }
?>
    <div id="content">

   <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center mt-4">RENTANG WAKTU</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
	        <form method="post" action="./halamanrekap.php">
	        <div class="modal-body">
	          <div class="form-group">
	            <label for="nama">Dari Tanggal: </label>
	            <input type="date" name="daritanggal" required="required" class="form-control bg-info" style="border:none">
	          </div>
	          <div class="form-group">
	            <label for="nama">Sampai Tanggal: </label>
	            <input type="date" name="sampaitanggal" required="required" class="form-control bg-info" style="border:none">
	          </div>
	          <div class="footer p-0 pb-3 pr-3">
	            <button type="submit" class="btn btn-primary">Submit</button>
	          </div>
	        </div>
	        </form>
	    </div>
	  </div>
	</div>
</div>
</div>
</div>
</body>





