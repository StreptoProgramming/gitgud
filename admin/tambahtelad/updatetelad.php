<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data yang di kirim dari form
$namasiswa =$_POST['namasiswa'];
$kelas= $_POST['kelas'];
$status=$_POST['status'];
date_default_timezone_set("Asia/Bangkok");
$tanggal=date("Y-m-d");

// update data ke database
mysqli_query($conn,"update absensi set status='$status' where namasiswa='$namasiswa' and kelas='$kelas' and tanggal='$tanggal' ");

// mengalihkan halaman kembali ke index.php
header("location:../halamantelad.php");
?>