<?php

	$servername = "localhost";
	$username = "aryan";
	$password = "1234";
	$dbname = "myDatabase";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}

?>
