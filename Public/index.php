<!DOCTYPE html>	
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="example.css">
    </head>
    <body>
        <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Politeknik Negeri Semarang<span> (POLINES)</span></div>
		</div>
		<br>	
		<div class="login">
			<form action="logincek.php" method="POST" onSubmit="return validasi()">
				<input type="text" placeholder="username" name="username" id="username"><br>
				<input type="password" placeholder="password" name="password" id="password"><br>
				<input type="submit" value="Login" name="login"> 
				</form>
		</div>

    </body>
	<script type="text/javascript">
	function validasi(){
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (username !="" && password !="") {
			return true;
		} else{
			alert('Username dan Password harus diisi !');
			return false;
		}
	}
	</script>
</html>