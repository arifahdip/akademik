<?php
include '../konek.php';
$id=$_GET['id'];
mysqli_query($connect , "DELETE FROM login WHERE id='$id'");
mysqli_query($connect , "DELETE FROM nilaimhs WHERE id='$id'");
mysqli_query($connect, "DELETE FROM mahasiswa WHERE id='$id'");
header("location:mahasiswa.php");
?>