<?php
include '../konek.php';
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
$password = $_POST['password'];
$type = $_POST['type'];

$simpan = $_POST['simpan'];

if ($simpan){

    $c = mysqli_query($connect , "select * from mahasiswa where nim='$nim'");
    $dat = mysqli_num_rows($c);

    if($dat>0){
        header("location:tambah.php?pesan=nim+sudah+ada");
    }
    else{
        $foto = $_FILES ['foto'] ['name'];
        $lokasifile = $_FILES ['foto'] ['tmp_name'];
        $acak = rand(1,99);
        $fotobaru= $acak.$foto;
        $direktori = "images/".$fotobaru;

        if(isset($_FILES ['foto'] ['tmp_name'])){
            $cek = move_uploaded_file($_FILES ['foto'] ['tmp_name'], $direktori);
    
            if($cek){
                mysqli_query($connect , "INSERT INTO nilaimhs VALUES ('', '$nim' , '$nama', '$kelas', '', '', '', '', '', '' , '', '' )");
                mysqli_query($connect , "INSERT INTO login VALUES ('', '$nama', '$nim' , '$password', '$type')") ;
                mysqli_query($connect , "INSERT INTO mahasiswa VALUES ('', '$fotobaru' , '$nim', '$nama', '$kelas', '$tempatlahir', '$tanggallahir' , '$jenkel' , '$agama' , '$jurusan', '$alamat', '$telepon')");
                header("location:mahasiswa.php?pesan=foto+ditambahkan");
            } else {
                echo"gagal diupload";
            }
        }
    }
}
?>