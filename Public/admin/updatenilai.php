<?php
include '../konek.php';
$id = $_POST['id'];
$nim =  $_POST['nim'];
$nama =  $_POST['nama'];
$kelas =  $_POST['kelas'];
$mtk = $_POST['mtk'];
$bindo =  $_POST['bindo'];
$binggris =  $_POST['binggris'];
$pemrograman =  $_POST['pemrograman'];
$jaringan =  $_POST['jaringan'];
$multimedia = $_POST['multimedia'];
$total = $mtk+$bindo+$binggris+$pemrograman+$jaringan+$multimedia;
$rata = $total/6;
$rerata = number_format($rata);

mysqli_query($connect , "UPDATE nilaimhs SET nim='$nim', nama='$nama', kelas='$kelas', mtk='$mtk', bindo='$bindo' , binggris='$binggris', pemrograman='$pemrograman', jaringan='$jaringan', multimedia='$multimedia', total='$total', rerata='$rerata' WHERE id='$id'");
header("location:datanilai.php?pesan=ditambahkan");

?>
