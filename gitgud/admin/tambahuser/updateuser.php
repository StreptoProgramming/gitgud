<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data yang di kirim dari form
$No = $_POST['No'];
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];


// update data ke database
mysqli_query($conn,"update user set username='$username' ,password ='$password', status='$status' where No=$No ");

// mengalihkan halaman kembali ke index.php
header("location:../halamanuser.php");
?>