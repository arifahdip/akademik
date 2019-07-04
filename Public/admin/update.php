<?php
include '../konek.php';
$id = $_POST['id'];
$nim =  $_POST['nim'];
$nama =  $_POST['nama'];
$kelas =  $_POST['kelas'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir =  $_POST['tanggallahir'];
$jenkel = $_POST['jenkel'];
$agama = $_POST['agama'];
$jurusan =  $_POST['jurusan'];
$alamat =  $_POST['alamat'];
$telepon =  $_POST['telepon'];

$simpan = $_POST['simpan'];

if ($simpan){
    if(!empty($_FILES ['foto'] ['name'])){
        $foto = $_FILES ['foto'] ['name'];
        $lokasifile = $_FILES ['foto'] ['tmp_name'];
        $acak= rand(1,99);
        $fotobaru= $acak.$foto;
        $direktori = "images/".$fotobaru;

        $u=mysqli_query($connect , "select * from mahasiswa where id='$id'");
        $data=mysqli_fetch_array($u);
        unlink("images/".$data['foto']);
        $cek = move_uploaded_file($_FILES ['foto'] ['tmp_name'], $direktori);

        if($cek){
            mysqli_query($connect , "UPDATE nilaimhs SET nama='$nama', nim='$nim', kelas='$kelas' WHERE id='$id'");
            mysqli_query($connect ,"UPDATE login SET nama='$nama', username='$nim' WHERE id='$id'");
            mysqli_query($connect , "UPDATE mahasiswa SET foto='$fotobaru' , nim='$nim', nama='$nama', kelas='$kelas', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir' , jenkel='$jenkel' , agama='$agama' , jurusan='$jurusan', alamat='$alamat', telepon='$telepon' WHERE id='$id'");
            header("location:mahasiswa.php?pesan=foto+ditambahkan");
        } 
    }
    elseif(empty($_FILES['foto']['name'])) {
        mysqli_query($connect ,"UPDATE nilaimhs SET nama='$nama', nim='$nim', kelas='$kelas' WHERE id='$id'");
        mysqli_query($connect ,"UPDATE login SET nama='$nama', username='$nim' WHERE id='$id'");
        mysqli_query($connect ,"UPDATE mahasiswa SET nim='$nim', nama='$nama', kelas='$kelas', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir' , jenkel='$jenkel' , agama='$agama' , jurusan='$jurusan', alamat='$alamat', telepon='$telepon' WHERE id='$id'");
        header("location:mahasiswa.php?pesan=update+tanpa+foto");
    }
}

?>