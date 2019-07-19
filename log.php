<?php
include('./configasalam.php');
if(isset($_POST['uid'])){
	$uid=$_POST['uid'];
    include '../configasalam.php';
    $asolole = mysqli_query($conn,"select * from siswa where uid='$uid'");
	$cek=mysqli_num_rows($asolole);
	if($cek > 0 ){
	 	$d = mysqli_fetch_array($asolole);
	 	$namasiswa= $d['namasiswa'];
	 	$kelas=$d['kelas'];
	 	$tanggal=date("Y-m-d");
	 	$waktu=time('H:i:s');
		$insert= "insert into log values('','$namasiswa','$kelas','$tanggal','$waktu','uid')";
		mysqli_query($conn, $insert);
		$carirule=mysqli_query($conn,"select * from rule where tanggal='$tanggal' ");
		$adakahrule=mysqli_num_rows($carirule);
		if($adakahrule>0){
			$r=mysqli_fetch_array($adakahrule);
			if($r['keterangan']=='libur'){

			}
			else {
				$handlesalin=mysqli_query($conn, "select * from absensi where namasiswa='$namasiswa' and tanggal='$tanggal'and kelas='$kelas'");
				$hitunghandle=mysqli_num_rows($handlesalin);
				if($hitunghandle<=0){
					$wktmasuk=strtotime($r['waktumulaimasuk']);
					$wktkeluar=strtotime($r['waktumulaikeluar']);
					$timed=strtotime($waktu);
					if ($timed>$wktkeluar && $timed<$wktkeluar) {
					$status='hadir';
					}else {
					$status='terlambat';

				}
				$apsen=mysqli_query($conn,"insert into absensi ('','$tanggal','$namasiswa','$status')");
				}


			}
		}
	 }
}
?>
