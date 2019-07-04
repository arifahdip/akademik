<?php include 'header.php'; ?>

<div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <a href="mahasiswa.php">Kembali</a>
                <br>
                <br>


                <?php
                include "../konek.php";
                $id = $_GET['id'];
                $query_mysql = mysqli_query($connect , "SELECT * FROM mahasiswa where id='$id'");
                
                
                while($data = mysqli_fetch_array($query_mysql)){
                ?>
                  <h4>Data Mahasiswa <?php echo $data['nama'] ?></h4>
                  <table class="table">
                  <tr>
                  <td></td>
                  <td><img src="../admin/images/<?php echo $data['foto'];?>" widht="150" height="150"></td>
                  </tr>
                  <tr>
                    <td>Nama Mahasiswa  </td>
                    <td> <? echo $data['nama']?></td>
                </tr>
                
                <tr>
                    <td>NIM</td>
                    <td><?php echo $data['nim']?></td>
                </tr>
                
                <tr>
                    <td>Kelas</td>
                    <td><?php echo $data['kelas']?></td>
                </tr>
                
                <tr>
                    <td>Jurusan</td>
                    <td><?php echo $data['jurusan']?></td>
                </tr>
                
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td><?php echo $data['tempatlahir']?>, <?echo $data['tanggallahir']?></td>
                </tr>
                
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><?php echo $data['jenkel']?></td>
                </tr>

                <tr>
                    <td>Agama</td>
                    <td><?php echo $data['agama']?></td>
                </tr>

                <tr>
                    <td>Alamat</td>
                    <td><?php echo $data['alamat']?></td>
                </tr>
                
                <tr>
                    <td>telepon</td>
                    <td><?php echo $data['telepon']?></td>
                </tr>
            </table>
            <?php   } ?>
            <br>
            <h6>Password</h6>
                
                <?php
                include "../konek.php";
                $id = $_GET['id'];
                $query_mysql = mysqli_query($connect , "SELECT * FROM login where id='$id'");
                
                
                while($dat = mysqli_fetch_array($query_mysql)) {
                ?>
                <table class="table">
                <td><?php echo $dat['password']?></td>
                </table>
                <?php   } ?>
                </div>
            </div>
        </div>
</div>