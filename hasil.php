<!DOCTYPE html>
<html>
<head>
<title>Untitled Document</title>
</head>

<body>  
<center>

	<?php

	$host = "localhost";
	$user = "root";
	$password = "";

	$full_name = $_POST['full_name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$no_telp = $_POST['no_telp'];
	$pass = $_POST['pass'];

	?>
<form method="POST" action="hasil.php">
	<h1>Sign Up Succes</h1>
	<table>
		<tr>
			<td>Full name</td><td> : </td><td><?php echo "$full_name"; ?></td>
		</tr>
		<tr>
			<td>Username</td><td> : </td><td><?php echo "$username"; ?></td>
		</tr>
		<tr>
			<td>Email</td><td> : </td><td><?php echo "$email"; ?></td>
		</tr>
		<tr>
			<td>No Telepon</td><td> : </td><td><?php echo "$no_telp"; ?></td>
		<tr>
			<td>Password</td><td> : </td><td><?php echo "$pass"; ?></td>
		</tr>	
		
		
	</table>
	
</form>

<?php
	$conn = mysqli_connect($host, $user, $password);
	mysqli_select_db($conn, 'dbig');
	$sql = "insert into userig values('$full_name', '$username', '$email', '$no_telp', '$password')";
	$hasil = mysqli_query($conn,$sql);
?>
</body>
</html>
