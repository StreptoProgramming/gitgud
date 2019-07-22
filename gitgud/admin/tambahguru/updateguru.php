<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data yang di kirim dari form
$induklama=$_POST['idlama'];
$induk=$_POST['nomorindukwalibaru'];
$password=$_POST['password'];
$nama = $_POST['namawali'];
$kelas = $_POST['kelas'];


// update data ke database
mysqli_query($conn,"update wali set nomorindukwali='$induk', password='$password', namawali='$nama' ,kelas='$kelas' where nomorindukwali='$induklama'");

// mengalihkan halaman kembali ke index.php
header("location:../halamanguru.php");
?>