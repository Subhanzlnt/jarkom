<?php
	include 'koneksi.php';
	if(isset($_POST['register'])){
        $username   = $_POST['username'];
        $nama	   	= $_POST['nama'];
    $password	= $_POST['password'];

    $password = password_hash($password,PASSWORD_DEFAULT);
		$multiuser	= $_POST['multiuser'];
        mysqli_query($koneksi, "INSERT INTO pengguna(username,nama,password,multiuser) VALUE('$username','$nama','$password','$multiuser')");
        header("location:login.php");
}

?>



<!DOCTYPE html>
<html>
<head>
  <title>Registrasi</title>
  
</head>
	
<form method="post">
<body>
	
	
	<tr>
    <td height="27" align="right" valign="middle">Username</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="username" type="text" size="10">
    </label></td>
	</tr>
	
	<tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="nama" type="text" size="10">
    </label></td>
	</tr>
	
	<tr>
    <td height="27" align="right" valign="middle">Password</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="password" type="password" size="10">
    </label></td>
	</tr>
	
	<tr>
    <td height="27" align="right" valign="middle">Multi user</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="multiuser" type="text" size="10">
    </label></td>
	</tr>
	
	<tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="register" value="register"></td>
	<a href="login.php">Sudah punya akun?</a>
	</tr>
	
    
</body>
</html>