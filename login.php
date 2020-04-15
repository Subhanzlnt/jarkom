<?php
	include"koneksi.php";
	
	$err = '';
	if(isset($_POST['login']) && $_POST['login'] == "LOGIN"){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = mysqli_real_escape_string($koneksi, $password);
		$query = "select password from pengguna where username = '$username' ";

		$result = mysqli_query($koneksi, $query);
		$result = mysqli_fetch_assoc($result)['password'];
			if(password_verify($password,$result)){
			session_start();
			
			$_SESSION['username'] = $username;
			$_SESSION['login'] = true;
			header('location:index.php');
			
		}
		else{
			echo "<script>alert('Username atau Password Salah!!!')</script>";
		}
	}
?>

<form action="" method="post">
	<label>login</label><br>
	<input type="text" name="username" placeholder="username"><br>
	<input type="password" name="password" placeholder="password"><br>
	<input type="submit" name="login" value="LOGIN">
	<a href="registrasi.php">Belum punya Akun?</a>
	
</form>
	<a href="index.php">Beranda</a>