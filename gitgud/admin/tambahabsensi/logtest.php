<?php
include('./configasalam.php');
if(isset($_POST['uid'])){
	$uid=$_POST['uid'];
	$insert=mysqli_connect($conn, "insert into log (uid) values('$uid')" );
	}
}
?>