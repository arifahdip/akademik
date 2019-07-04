<?php include 'header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <h2 class="intro-text text-center">Data Mahasiswa</h2>
                <br>

                <form action="tambah.php">
                <input type="submit" value="Tambah Data Baru" class="glyphicon glyphicon-plus">
                </form>
                <br>
                <table border="1" class="table">
                <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Opsi</th>
                </tr>


                <?php
                include "../konek.php";
                $query_mysql = mysqli_query($connect ,"SELECT * FROM mahasiswa");
                $nomor = 1;
                while($data = mysqli_fetch_array($query_mysql)){
                    ?>
                    <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><img src="images/<?php echo $data['foto'];?>" widht="80" height="80"></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['nim']; ?></td>
                    <td><?php echo $data['kelas']; ?></td>
                    <td><?php echo $data['jurusan']; ?></td>
                    <td>
                    <a href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Detail</a>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit  </a>
                    <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus.php?id=<?php echo $data['id']; ?>' }" class="btn btn-danger">Hapus</a>
                    </td>
                    </tr>
            <?php    } ?>
                </table>
                </div>
            </div>
        </div>
    </div>