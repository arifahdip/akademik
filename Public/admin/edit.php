<?php include 'header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <br>
                <a href="mahasiswa.php">Kembali</a>

                <br>
                
                <div class="col-lg-12">
                <h3>Edit Data</h3>

                <?php
                include "../konek.php";
                $id = $_GET['id'];
                $query_mysql = mysqli_query($connect , "SELECT * FROM mahasiswa WHERE id='$id'");
                $nomor = 1;
                while ($data = mysqli_fetch_array($query_mysql)) {
                ?>
                <form action="update.php" method="post" enctype='multipart/form-data'>
                <table class="table">
                    <div class="form-group">
                <tr>
                    <td>Foto Mahasiswa</td>
                    <td><img src="images/<?php echo $data['foto'];?>" widht="150" height="150">
                    <input type="file" name="foto" id="foto" value=></td>
                    
                </tr>
                <tr>
                    <td>Nama Mahasiswa  </td>
                    <td>
                        <input type="hidden" name="password" value="<?php echo $data['password']?>">
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>" >
                    </td>
                </tr>

                <tr>
                <td>NIM</td>
                <td><input type="text" class="form-control" name="nim" value="<?php echo $data['nim']?>"></td>
                </tr>

                <tr>
                <td>Kelas</td>
                <td>
                    <select name="kelas" class="form-control">
                    <option value="<?php echo $data['kelas']?>"><?php echo $data['kelas']?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    </select>
                </td>
                </tr>

                <tr>
                <td>Jurusan</td>
                <td><input type="text" class="form-control" name="jurusan" value="<?php echo $data['jurusan']?>"></td>
                </tr>

                 <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" class="form-control" name="tempatlahir" value="<?php echo $data['tempatlahir']?>"></td>
                </tr>

                <tr>
                <td>Tanggal Lahir</td>
                <td><input type="text" class="form-control" name="tanggallahir" value="<?php echo $data['tanggallahir']?>"></td>
                </tr>

                <tr>
                <td>Jenis Kelamin </td> 
                <td> 
                    <select class="form-control" name="jenkel">
                    <option value="<?php echo $data['jenkel']?>"><?php echo $data['jenkel']?></option>
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select>
                    </td>
                </tr>
                
                <tr>
                <td>Agama </td> 
                <td> 
                    <select class="form-control" name="agama">
                    <option value="<?php echo $data['agama']?>"><?php echo $data['agama']?></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                    </select>
                    </td>
                </tr>

                <tr>
                <td>Alamat</td>
                <td><input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat']?>"></td>
                </tr>

                <tr>
                <td>telepon</td>
                <td><input type="text" class="form-control" name="telepon" value="<?php echo $data['telepon']?>"></td>
                </tr>

                <tr>
                <td></td>
                <td><input type="submit" value="simpan" name="simpan" id="simpan" class="btn btn-primary"></td>
                </tr>
                </div>
                </table>
                </form>
             <?php   } ?>
                    </div>
                </div>
            </div>
    </div>