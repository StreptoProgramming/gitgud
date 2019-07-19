<?php
include('./configasalam.php');
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * from siswa where username='".$username"' and password='".$password"'";
$hasil=mysqli_query($conn,$sql);

if (mysqli_num_rows($hasil)>0){
  session_start();
  $_SESSION['username']=$username;
  $_SESSION['status']='login';
  header('location: ./dashboard/dashboard_siswa.php');
} else {
  echo "Error: ".$sql . "<br>" . $conn->error;
  header("location: ./view_loginsiswa.php");
}