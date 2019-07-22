<?php
include('./configasalam.php');
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * from wali where nomorindukwali='$username' and password='$password'";
$hasil=mysqli_query($conn,$sql);
$d = mysqli_fetch_array($hasil);
$kelas=$d['kelas'];

if (mysqli_num_rows($hasil)>0){
  session_start();
  $_SESSION['username']=$username;
  $_SESSION['status']='login';
  $_SESSION['level']='wali';
  $_SESSION['kelas']=$kelas;
  $_SESSION['dashboard']='./dashboard_admin.php';
  header('location: ./admin/dashboard_wali.php');
} else {
  echo "Error: ".$sql . "<br>" . $conn->error;
  header("location: ./view_loginwali.php");
}