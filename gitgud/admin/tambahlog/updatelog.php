<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data yang di kirim dari form
$uid=$_POST['uid'];
$namasiswa=$_POST['namasiswa'];
$kelas=$_POST['kelas'];


// update data ke database
mysqli_query($conn,"update log set namasiswa='$namasiswa', kelas='$kelas' where uid='$uid'");

mysqli_query($conn,"update siswa set uid='$uid' where namasiswa='$namasiswa' and kelas='$kelas'");
// mengalihkan halaman kembali ke index.php
header("location:../halamanlog.php");
?>