<?php 
include('../configasalam.php');
$asolole = mysqli_query($conn,"select * from siswa");
while($d = mysqli_fetch_array($asolole)){
	date_default_timezone_set("Asia/Bangkok");
	$tanggal=date("Y-m-d");
	$nama=$d['namasiswa'];
	$kelas=$d['kelas'];
	mysqli_query($conn,"insert into absensi values('','$tanggal','$nama','$kelas','belumtap')");
}
header("location:./halamantelad.php");
?>