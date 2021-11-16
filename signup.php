<!DOCTYPE html>
<html>
<head>
	<title>E-Farma Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="daftar.php" method="POST">
            <label>Nama</label>
			<input type="text" name="nama" class="form_login" placeholder="Nama .." required="required">

			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required" id="myInput">
            <input type="checkbox" onclick="myFunction()">Show Password
            <br>
            <br>
            <br>
 
			<input type="submit" class="tombol_login" value="SIGN UP">
			<br>
			<br>
			
 
			<br/>
		</form>
		
	</div>
 
    <script>
        function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>