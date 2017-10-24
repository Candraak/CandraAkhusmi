<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OOPS</title>
</head>
<body>
<?php
	$host = "localhost";
	$user = "root";
	$Password = "";

	$email = $_POST['email'];
	$Fullname = $_POST['fullname'];
	$Username = $_POST['user'];
	$Password = $_POST['pw']
?>
	

<table>
	<tr><td>Selamat Anda Telah Terdaftar sebagai pengguna Instagram</td></tr>
	<tr><td>Email atau Nomor HP</td><td>:</td><td><?php echo $_POST['email']; ?></td></tr>
	<tr><td>Fullname</td><td>:</td><td><?php echo $_POST['fullname']; ?></td></tr>
	<tr><td>Username</td><td>:</td><td><?php echo $_POST['user']; ?></td></tr>
	<tr><td>Password</td><td>:</td><td><?php echo $_POST['pw']; ?></td></tr>
</table>
<?php
$conn = new mysqli($host,$Username,$Password);
	mysqli_select_db($conn, 'dbig');
	$sql = "insert into tbigm value ('$email','$Username','$Fullname','$Password')";
	$hasil = mysqli_query($conn,$sql);
?>
</body>
</html>