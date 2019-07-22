<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<h3>EDIT DATA SISWA</h3>
 
	<?php
	include '../../configasalam.php';
	$nis = $_GET['nis'];
	$data = mysqli_query($conn,"select * from siswa where nis='$nis'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="updatesiswa.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="nis" value="<?php echo $d['nis']; ?>">
						<input type="text" name="nama" value="<?php echo $d['namasiswa']; ?>">
						<input type="text" name="kelas" value="<?php echo $d['kelas']; ?>">
					</td>
				</tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 	<a href="../index.php">KEMBALI</a>
</body>
</html>