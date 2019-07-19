<?php
$servername = 'localhost';
$dbname= 'dbabsenasalam';
$username= 'root';
$password= '';

$conn =mysqli_connect($servername,$username,$password,$dbname);
if(mysqli_connect_errno()){
	echo "koneksi ke database gagal : ". mysqli_connect_errno();
}