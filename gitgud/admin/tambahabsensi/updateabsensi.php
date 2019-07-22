<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data yang di kirim dari form
$idabsensi=$_POST['idabsensi'];
$status=$_POST['status'];
$kelas=$_POST['kelas'];


// update data ke database
mysqli_query($conn,"update absensi set status='$status' , kelas='$kelas' where idabsensi='$idabsensi'");

// mengalihkan halaman kembali ke index.php
header("location:../halamanabsensi.php");
?>