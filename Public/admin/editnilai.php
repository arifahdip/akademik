<?php include 'header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="box">
            <br>
                <a href="datanilai.php">Kembali</a>
                <br>

                
                <?php
                include "../konek.php";
                $id = $_GET['id'];
                $query_mysql = mysqli_query($connect , "SELECT * FROM nilaimhs WHERE id='$id'");
                $nomor = 1;
                while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <h3>Edit Data <?php echo $data['nama']?></h3>
                <div class="col-md-5 col-md-offset-3">
                <form action="updatenilai.php" method="post">
                <table class="table">
                    <div class="form-group">
                <tr>
                    <td></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input type="hidden" name="nama" value="<?php echo $data['nama'] ?>" >
                        <input type="hidden" name="nim" value="<?php echo $data['nim']?>">
                        <input type="hidden" name="kelas" value="<?php echo $data['kelas']?>">
                    </td>
                </tr>

                <tr>
                <td>Nilai Matematika</td>
                <td><input type="text" class="form-control" name="mtk" value="<?php echo $data['mtk']?>"></td>
                </tr>

                 <tr>
                <td>Nilai Bahasa Indonesia</td>
                <td><input type="text" class="form-control" name="bindo" value="<?php echo $data['bindo']?>"></td>
                </tr>

                <tr>
                <td>Nilai Bahasa Inggris</td>
                <td><input type="text" class="form-control" name="binggris" value="<?php echo $data['binggris']?>"></td>
                </tr>

                <tr>
                <td>Nilai Pemrograman</td>
                <td><input type="text" class="form-control" name="pemrograman" value="<?php echo $data['pemrograman']?>"></td>
                </tr>

                <tr>
                <td>Nilai Jaringan</td>
                <td><input type="text" class="form-control" name="jaringan" value="<?php echo $data['jaringan']?>"></td>
                </tr>

                <tr>
                <td>Nilai Multimedia</td>
                <td><input type="text" class="form-control" name="multimedia" value="<?php echo $data['multimedia']?>"></td>
                </tr>

                <tr>
                <td></td>
                <td><input type="submit" value="simpan" class="btn btn-primary"></td>
                </tr>
                </div>
                </table>
                </form>
             <?php   } ?>
                    </div>
                </div>
            </div>
    </div>