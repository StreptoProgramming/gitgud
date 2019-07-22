<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data yang di kirim dari form
$idrule=$_POST['idrule'];
$keterangan=$_POST['keterangan'];
$tanggal=date('Y-m-d', strtotime($_POST['tanggal']));
$waktumulaimasuk=$_POST['waktumulaimasuk'];
$waktumulaikeluar=$_POST['waktumulaikeluar'];


// update data ke database
mysqli_query($conn,"update rule set keterangan='$keterangan', tanggal='$tanggal', waktumulaimasuk='$waktumulaimasuk', waktumulaikeluar='$waktumulaikeluar' where idrule='$idrule'");

// mengalihkan halaman kembali ke index.php
header("location:../halamanrule.php");
?>