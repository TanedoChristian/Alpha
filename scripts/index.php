<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alpha</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>INDEX PAGE</h1>

	<br>
	Hello, Username.
</body>
</html>