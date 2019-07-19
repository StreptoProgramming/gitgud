<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data yang di kirim dari form
$namakelas = $_POST['namakelas'];




// menginput data ke database
mysqli_query($conn,"insert into kelas(namakelas) values('$namakelas')");
 
// mengalihkan halaman kembali ke 
header("location:../halamankelas.php");



?>