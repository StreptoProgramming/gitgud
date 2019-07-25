<?php
include('./configasalam.php');
if(isset($_POST['uid'])){
	date_default_timezone_set("Asia/Bangkok");
	$uid=$_POST['uid'];
    $cariuid = mysqli_query($conn,"select * from siswa where uid='$uid'");
	$cek=mysqli_num_rows($cariuid);
	$tanggal=date("Y-m-d");
	$waktu=date("H:i:s");
	if ($cek>0) {
	 	$d = mysqli_fetch_array($cariuid);
	 	$namasiswa= $d['namasiswa'];
	 	$kelas=$d['kelas'];
		mysqli_query($conn, "insert into log values('','$namasiswa','$kelas','$tanggal','$waktu','$uid') ");
		$carirule=mysqli_query($conn,"select * from rule where tanggal='$tanggal' ");
		if(mysqli_num_rows($carirule)>0){
			$r=mysqli_fetch_array($carirule);
			if($r['keterangan']=='libur'){

			}
			else {
				$handlesalin=mysqli_query($conn, "select * from absensi where namasiswa='$namasiswa' and tanggal='$tanggal'and kelas='$kelas'");
				if(mysqli_num_rows($handlesalin)<=0){
					$wktmasuk=strtotime($r['waktumulaimasuk']);
					$wktkeluar=strtotime($r['waktumulaikeluar']);
					$timed=strtotime($waktu);
					$wktkeluar1= DateTime::createFromFormat('H:i:s', $wktkeluar);
					$wktmasuk1= DateTime::createFromFormat('H:i:s', $wktmasuk);
					$timed1= DateTime::createFromFormat('H:i:s', $timed);
					mysqli_query($conn,"insert into absensi(namasiswa,kelas,status) values ('$wktmasuk1','$wktkeluar1','$timed1')");
					if ($timed1>$wktkeluar1 && $timed1<$wktkeluar1) {
						mysqli_query($conn,"insert into absensi(tanggal,namasiswa,kelas,status) values ('$tanggal','$namasiswa','$kelas','hadir')");
					}else {
						mysqli_query($conn,"insert into absensi(tanggal,namasiswa,kelas,status) values ('$tanggal','$namasiswa','$kelas','mokad')");

				}

				}
			}
		}else{
			$handlesalin=mysqli_query($conn, "select * from absensi where namasiswa='$namasiswa' and tanggal='$tanggal'and kelas='$kelas'");
			if(mysqli_num_rows($handlesalin)<=0){
				$waktosmasuk=strtotime("060000");
				$waktoskeluar=strtotime("220000");
				$waktos=strtotime($waktu);
				if ($waktos>$waktosmasuk && $waktos<$waktoskeluar)
				{
					mysqli_query($conn,"insert into absensi(tanggal,namasiswa,kelas,status) values ('$tanggal','$namasiswa','$kelas','hadir')");
				}else {
					mysqli_query($conn,"insert into absensi(tanggal,namasiswa,kelas,status) values ('$tanggal','$namasiswa','$kelas','terlambat')");
				}

			}
		}	
	}else{
		mysqli_query($conn, "insert into log values('','','','$tanggal','$waktu','$uid') ");
	}
	echo "berhasil bung";
}
?>