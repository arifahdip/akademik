<?php include 'header.php'; ?>
    <?php
    session_start();
    include '../konek.php';
    include 'cek.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <br>
                <a href="mahasiswa.php">Kembali</a>
                <br>
                <?php
                include "../konek.php";
                $id = $_GET['id'];
                $query_mysql = mysql_query("SELECT * FROM mahasiswa WHERE id='$id'") or die(mysql_error());
                $nomor = 1;
                while ($data = mysql_fetch_array($query_mysql)) {
                ?>
                <h2 class="intro-text text-center">Input Nilai MAhasiswa <?php echo $data['nama']?></h2>
                <form action="tambahnilai.php" method="post">
                <table class="table">
                <div class="form-group">
                    <tr>
                        <td></td>
                        <td><input type="hidden" name="id" value="<?php echo $data['id'] ?>"></td>
                    </tr>

                    <tr>
                        <td>Nama Mahasiswa  </td>
                        <td><input type="text" class="form-control" name="nama" readonly value="<?php echo $data['nama'] ?>"></td>
                    </tr>

                    <tr>
                        <td>NIM</td>
                        <td><input type="text" class="form-control" name="nim" readonly value="<?php echo $data['nim']?>"></td>
                    </tr>

                    <tr>
                        <td>Kelas</td>
                        <td><input type="text" class="form-control" name="kelas" readonly value="<?php echo $data['kelas']?>"></td>
                    </tr>

                    <tr>
                        <td>Nilai Matematika</td>
                        <td><input type="text" name="mtk" class="form-control" placeholder="Input Nilai Matematika"></td>
                    </tr>

                    <tr>
                    <td>Nilai Bahasa Indonesia</td>
                    <td><input type="text" name="bindo" class="form-control" placeholder="Input Nilai Bahasa Indonesia"></td>
                    </tr>

                    <tr>
                        <td>Nilai Bahasa Inggris</td>
                        <td><input type="text" name="binggris" class="form-control" placeholder="Input Nilai Bahasa Inggris"></td>
                    </tr>

                    <tr>
                        <td>Nilai Pemrograman</td>
                        <td><input type="text" name="pemrograman" class="form-control" placeholder="Input Nilai Pemrograman"></td>
                    </tr>

                    <tr>
                        <td>Nilai Jaringab</td>
                        <td><input type="text" name="jaringan" class="form-control" placeholder="Input Nilai Jaringan"></td>
                    </tr>

                    <tr>
                        <td>Nilai Multimedia</td>
                        <td><input type="text" name="multimedia" class="form-control" placeholder="Input Nilai Multimedia"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" class="btn btn-info" value="Simpan"></td>
                    </tr>

                </table>
                
                </form>
             <?php   } ?>
                    </div>
                </div>
            </div>
    </div>