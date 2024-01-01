<?php
	include('connect.php');
	if(isset($_POST['submit'])) {
		$firstName = $_POST['first_name'];
		$lastName = $_POST['last_name'];
		$userName = $_POST['username'];
		$password = $_POST['password'];
		$sql = "INSERT INTO USERS (FirstName, LastName, Username, Password)
		VALUES ($firstName, $lastName, $userName, $password)";
		$conn->close();
	}
?>