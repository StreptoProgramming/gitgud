<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data yang di kirim dari form
$induk=$_POST['nomorindukwali'];
$password=$_POST['password'];
$nama = $_POST['namawali'];
$kelas = $_POST['kelas'];

// menginput data ke database
mysqli_query($conn,"insert into wali (nomorindukwali,password,namawali,kelas) values( '$induk','$password', '$nama','$kelas')");
 
// mengalihkan halaman kembali ke 
header("location:../halamanguru.php");



?>