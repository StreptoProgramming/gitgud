<?php
include('./configasalam.php');
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * from siswa where nomorinduksiswa='$username' and password='$password'";
$hasil=mysqli_query($conn,$sql);
$d = mysqli_fetch_array($hasil);
$kelas=$d['kelas'];
$namasiswa=$d['namasiswa'];

if (mysqli_num_rows($hasil)>0){
  session_start();
  $_SESSION['username']=$username;
  $_SESSION['status']='login';
  $_SESSION['namasiswa']=$namasiswa;
  $_SESSION['level']='siswa';
  $_SESSION['kelas']=$kelas;
  $_SESSION['dashboard']='./dashboard_siswa.php';
  header('location: ./admin/dashboard_siswa.php');
} else {
  echo "Error: ".$sql . "<br>" . $conn->error;
  header("location: ./view_loginsiswa.php");
}