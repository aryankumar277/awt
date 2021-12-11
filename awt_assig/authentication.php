<?php

	ini_set('display_errors', 'off');
	include('connection.php');
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$query = "SELECT * FROM student WHERE regno = '$username' AND pass = '$password'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

	if($count == 1 && $username == "9999" && $password == "admin123") {
		include('homepage.html');
	}
    else {
		echo "Admin login failed. Invalid username or password !";
		include('login.html');
	}

?>
