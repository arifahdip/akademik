<?php include 'header.php' ?>

<div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <?php 
                if(isset($_GET['pesan'])){
                    $pesan=$_GET['pesan'];
                    if($pesan=="gagal"){
                        echo "<div class='alert alert-danger'>Password Salah!!</div>";
                    }else if($pesan=="tdksama"){
                        echo "<div class='alert alert-warning'>Password tidak sesuai !!</div>";
                    }else if($pesan=="oke"){
                        echo "<div class='alert alert-success'>Password berhasil diganti.. </div>";
                    }
                }
                ?>

                <br/>
<div class="col-md-5 col-md-offset-3">
	<form action="gnti_pwd_act.php" method="post">
		<div class="form-group">
			<input name="username" type="hidden" value="<?php echo $_SESSION['username']; ?>">
		</div>
		<div class="form-group">
			<label>Password Lama</label>
			<input name="lama" type="password" class="form-control" placeholder="Password Lama ..">
		</div>
		<div class="form-group">
			<label>Password Baru</label>
			<input name="baru" type="password" class="form-control" placeholder="Password Baru ..">
		</div>
		<div class="form-group">
			<label>Ulangi Password</label>
			<input name="ulang" type="password" class="form-control" placeholder="Ulangi Password ..">
		</div>	
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info" value="Simpan">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>																	
	</form>
</div>

                </div>
            </div>
        </div>
</div>