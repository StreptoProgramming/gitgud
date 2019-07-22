<?php 
// koneksi database
include '../../configasalam.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];


// update data ke database
mysqli_query($conn,"insert into user (username, password, status) values ('$username', '$password','$status')");

// mengalihkan halaman kembali ke index.php
header("location:../halamanuser.php");
?>