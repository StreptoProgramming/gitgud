<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data yang di kirim dari form
$noinduk =$_POST['nomorinduksiswa'];
$password=$_POST['password'];
$nama = $_POST['namasiswa'];
$kelas = $_POST['kelas'];
$uid = $_POST['uid'];



// menginput data ke database
mysqli_query($conn,"insert into siswa(nomorinduksiswa,password,namasiswa,kelas,uid) values('$noinduk', '$password','$nama','$kelas','$uid')");
 
// mengalihkan halaman kembali ke 
header("location:../halamansiswa.php?namakelas=".$kelas);



?>