<?php
include 'konek.php';
session_start();


$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query ($connect, "select * from login where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek >0){
    $data = mysqli_fetch_assoc($login);
    if($data['type']=="admin") {
        $_SESSION['username'] = $username;
        $_SESSION['type'] = "admin";
        header("location:admin/index.php?pesan=login sebagai admin");
    }
    elseif($data['type']=="siswa"){
        $_SESSION['username'] = $username;
        $_SESSION['type'] = "siswa";
        header("location:student/index.php?pesan=login sebagai siswa");
    }
    else{
        header("location:index.php?pesan=bukanadminatausiswa");
    }
} else {
    header("location:index.php?pesan=gagal");
}
?>