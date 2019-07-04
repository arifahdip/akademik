<?php include 'header.php'; ?>

<div class="container">
        <div class="row">
            <div class="box">
                <div class="col-md-5 col-md-offset-3">
                <?php
                include "../konek.php";
                $username=$_SESSION['username'];
                $query_mysql = mysqli_query($connect ,"SELECT * FROM nilaimhs where nim='$username'");
                while($data = mysqli_fetch_array($query_mysql)){
                ?>
                <h4>Data Nilai <? echo $data['nama'] ?></h4>
                <table class="table">
                    <tr>
                        <td><h6>Mata Kuliah</h6></td>
                        <td><h6>Nilai</h6></td>
                    </tr>
                    <br>
                    <tr>
                        <td>Matematika</td>
                        <td><?php echo $data['mtk'] ?></td>
                    </tr>
                    <tr>
                        <td>Bahasa Indonesia</td>
                        <td><?php echo $data['bindo'] ?></td>
                    </tr>
                    <tr>
                        <td>Bahasa Inggris</td>
                        <td><?php echo $data['binggris'] ?></td>
                    </tr>
                    <tr>
                        <td>Pemrograman</td>
                        <td><?php echo $data['pemrograman'] ?></td>
                    </tr>
                    <tr>
                        <td>Jaringan</td>
                        <td><?php echo $data['jaringan'] ?></td>
                    </tr>
                    <tr>
                        <td>Multimedia</td>
                        <td><?php echo $data['multimedia'] ?></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td><?php echo $data['total'] ?></td>
                    </tr>
                    <tr>
                        <td>Rata - Rata</td>
                        <td><?php echo $data['rerata'] ?></td>
                    </tr>
                    
                </table>
                <?php   } ?>
                </div>
            </div>
        </div>
</div>