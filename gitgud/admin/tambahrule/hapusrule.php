<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data id yang di kirim dari url
$idrule = $_GET['idrule'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from rule where idrule='$idrule'");
 
// mengalihkan halaman kembali ke index.php
header("location:../halamanrule.php");
 
?>