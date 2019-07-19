<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data yang di kirim dari form
$namakelas = $_POST['namakelasbaru'];
$idkelas = $_POST['idkelas'];

// update data ke database
mysqli_query($conn,"update kelas set namakelas='$namakelas'  where namakelas='$idkelas'");

// mengalihkan halaman kembali ke index.php
header("location:../halamankelas.php");
?>