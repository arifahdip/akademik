<?php include 'header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <h2 class="intro-text text-center">Data Mahasiswa</h2>

                <br>

                <table border="1" class="table">
                <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Nilai MTK</th>
                <th>Nilai B.Indo</th>
                <th>Nilai B.Inggris</th>
                <th>Nilai Pemrograman</th>
                <th>Nilai Jaringan</th>
                <th>Nilai Multimed</th>
                <td>Jumlah</td>
                <td>Rata - Rata</td>
                <th>Opsi</th>
                </tr>
                <?php
                include "../konek.php";
                $query_mysql = mysqli_query($connect ,"SELECT * FROM nilaimhs");
                $nomor = 1;
                while($data = mysqli_fetch_array($query_mysql)){
                    ?>
                    <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['nim']; ?></td>
                    <td><?php echo $data['kelas']; ?></td>
                    <td><?php echo $data['mtk']; ?></td>
                    <td><?php echo $data['bindo']; ?></td>
                    <td><?php echo $data['binggris']; ?></td>
                    <td><?php echo $data['pemrograman']; ?></td>
                    <td><?php echo $data['jaringan']; ?></td>
                    <td><?php echo $data['multimedia']; ?></td>
                    <td><?php echo $data['total']; ?></td>
                    <td><?php echo $data['rerata']; ?>
                    </td>
                    <td>
                    <a href="editnilai.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                    </td>
                    </tr>
            <?php    } ?>
              
                </table>
                </div>
            </div>
        </div>

    </div>