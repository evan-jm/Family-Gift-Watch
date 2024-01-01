<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>Registration</title>
</head>

<body>
	<div class="header">
		Family Gift Watch
		<div class="right">
			<a href="index.html">Home</a>
			<a href="login.php">Login</a>
			<a href="register.php" class="current">Register</a>
		</div>
	</div>
	<h1>Register Below</h1>
	<form method="post" action="register.php">
		<table>
			<tr>
				<td>First Name: </td>
				<td><input type="text" name="first_name" required></td>
			</tr>
			<tr>
				<td>Last Name: </td>
				<td><input type="text" name="last_name" required></td>
			</tr>
			<tr>
				<td>Username: </td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="text" name="password" required></td>
			</tr>
			<tr>
				<td><input type="reset" class="buttons"></td>
				<td><input type="submit" class="buttons"></td>
			</tr>
		</table>
	</form>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$firstName = $_POST[first_name];
		$lastName = $_POST[last_name];
		$userName = $_POST[username];
		$password = $_POST[password];
		$sql = "INSERT INTO USERS (FirstName, LastName, Username, Password)
		VALUES ($firstName, $lastName, $userName, $password)";
		$conn->close();
	?>
</body>
</html>
