<?php include 'header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <h2 class="intro-text text-center">Input Data Baru</h2>
                <br>
                <a href="mahasiswa.php">kembali</a>
                <br>
                <form action="tambah_act.php" method="post" enctype='multipart/form-data'>
                <br>
                <div class="form-group">
                    <label>Foto Mahasiswa</label>
                    <input type="file" name="foto" id="foto">
                </div>
                <div class="form-group">
                
                    <label>Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" placeholder="Input Nama Mahasiswa">
                </div>
                <div class="form-group">
                    <label>Nomor Induk Mahasiswa</label>
                    <input type="text" name="nim" class="form-control" placeholder="Input NIM">
                </div>
                <div class="form-group">
                    <label>Kelas</label>
                    <select name="kelas" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" placeholder="Input Jurusan">
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="tempatlahir" class="form-control" placeholder="Input Tempat Lahir">
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label> 
                    <input type="text" name="tanggallahir" class="form-control" placeholder="Input Tanggal Lahir">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label> <select name="jenkel" class="form-control">
                    <option value="Laki - Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Agama</label> <select name="agama" class="form-control">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Input Alamat Mahasiswa">
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" placeholder="Input Telepon Mahasiswa">
                </div>
                <div class="form-group">
                    <input type="hidden" name="password" class="form-control" value="12345">
                </div>
                <div class="form-group">
                    <input type="hidden" name="type" class="form-control" value="siswa">
                </div>
                <div class="modal-footer">
                <a href="mahasiswa.php" class="btn btn-default"> <h8> Batal </h8> </a>
                <input type="submit" class="btn btn-primary" value="Simpan" name="simpan">
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
