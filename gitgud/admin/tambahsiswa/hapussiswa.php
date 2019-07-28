<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data id yang di kirim dari url
$nomorinduksiswa = $_GET['nomorinduksiswa'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from siswa where nomorinduksiswa='$nomorinduksiswa'");
 
// mengalihkan halaman kembali ke index.php
header("location:../halamankelas.php");
 
?>