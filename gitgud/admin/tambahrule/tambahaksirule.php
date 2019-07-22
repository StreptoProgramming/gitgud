<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data yang di kirim dari form
$keterangan=$_POST['keterangan'];
$tanggal=date('Y-m-d', strtotime($_POST['tanggal']));
$waktumulaimasuk=$_POST['waktumulaimasuk'];
$waktumulaikeluar=$_POST['waktumulaikeluar'];


// update data ke database
mysqli_query($conn,"insert into rule (keterangan, tanggal, waktumulaimasuk, waktumulaikeluar) values ('$keterangan','$tanggal', '$waktumulaimasuk','$waktumulaikeluar')");

// mengalihkan halaman kembali ke index.php
header("location:../halamanrule.php");
?>