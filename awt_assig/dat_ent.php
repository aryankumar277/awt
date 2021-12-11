<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Entry</title>
  </head>

  <body>

    <h2>Data Entry</h2>

    <form class="" action="dat_ent.php" method="POST">

      Student Registration Number : <input required type="number" name="regno" id="regno" value="">
      <br><br>
      Student Name : <input required type="text" name="name" id="name" value="">
      <br><br>
      Subject 1 Marks : <input required type="number" name="sub1" id="sub1" value="">
      <br><br>
      Subject 2 Marks : <input required type="number" name="sub2" id="sub2" value="">
      <br><br>
      Subject 3 Marks : <input required type="number" name="sub3" id="sub3" value="">
      <br><br>
      Password : <input required min="5" type="password" name="pass" id="pass" value="">
      <br><br>
      <button type="submit" name="submit">Submit</button>
      <br><br>
      <a href="homepage.html">
        <button type="button" name="button">Go Back To Home</button>
      </a>

    </form>

  </body>

</html>

<?php

	include('connection.php');
  if (isset($_POST['regno'])) {
    $regno = $_POST['regno'];
  	$name = $_POST['name'];
  	$sub1 = $_POST['sub1'];
  	$sub2 = $_POST['sub2'];
  	$sub3 = $_POST['sub3'];
    $pass = $_POST['pass'];

    $query = "INSERT INTO student (regno, name, sub1, sub2, sub3, pass)
  				VALUES ('$regno', '$name', '$sub1', '$sub2', '$sub3', '$pass')";

  	$result = mysqli_query($conn, $query);
  	if ($result) {
  		echo "<br><br>Records successfully added";
  	}
  	else {
  		echo "<br><br>Error adding record => " . $conn->error;
  	}
  }

  include('footer.html');

?>
