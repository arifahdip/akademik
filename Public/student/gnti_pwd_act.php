<?php
include '../konek.php';
$username = $_POST['username'];
$lama = $_POST['lama'];
$baru = $_POST['baru'];
$ulang = $_POST['ulang'];

$cek=mysqli_query($connect ,"select * from login where password='$lama' and username='$username'");
if(mysqli_num_rows($cek)==1){
	if($baru==$ulang){
		mysqli_query($connect , "update login set password='$baru' where username='$username'");
		header("location:gantipassword.php?pesan=oke");
	}else{
		header("location:gantipassword.php?pesan=tdksama");
	}
}else{
	header("location:gantipassword.php?pesan=gagal");
}

?>