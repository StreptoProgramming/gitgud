<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$noinduk =$_POST['nomorinduksiswa'];
$password=$_POST['password'];
$nama = $_POST['namasiswa'];
$kelas = $_POST['kelas'];
$uid = $_POST['uid'];
$kelaslama = $_POST['kelaslama'];
// update data ke database
mysqli_query($conn,"update siswa set nomorinduksiswa='$noinduk', password='$password', namasiswa='$nama' ,kelas ='$kelas',uid='$uid' where nomorinduksiswa='$id'");

// mengalihkan halaman kembali ke index.php
header("location:../halamansiswa.php?namakelas=".$kelaslama);
?>