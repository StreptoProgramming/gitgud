<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data id yang di kirim dari url
$nomorindukwali = $_GET['nomorindukwali'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from wali where nomorindukwali='$nomorindukwali'");
 
// mengalihkan halaman kembali ke index.php
header("location:../halamanguru.php");
 
?>