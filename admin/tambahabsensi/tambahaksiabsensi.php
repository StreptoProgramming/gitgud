<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data yang di kirim dari form
$nama=$_POST['namasiswa'];
$status=$_POST['status'];
$kelas=$_POST['kelas'];
$tanggal=date("Y-m-d");


// update data ke database
mysqli_query($conn,"insert into absensi values('','$tanggal','$nama','$kelas','$status')");

// mengalihkan halaman kembali ke index.php
header("location:../halamanabsensi.php");
?>