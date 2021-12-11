<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Retrieve</title>
  </head>
  <body>

    <h2>Data Retrieval</h2>

    <form class="" action="dat_ret.php" method="POST">

      Enter Registration Number : <input required type="number" name="regno" id="regno" placeholder="Enter your Registration number" value="">
      <br><br>
      <button type="submit" name="submit" id="submit">Submit</button>
      <br><br>
      <button name="avg" id="avg">Calculate Average Marks</button>
      <br><br>
      <a href="homepage.html">
        <button type="button" name="button">Go Back To Home</button>
      </a>

    </form>
    <script>
      //document.getElementById("f").innerHTML = "regno";
      //document.getElementById("myDIV").innerHTML = "How are you?";
    </script>
  </body>
</html>


<?php

	include('connection.php');

  ini_set('display_errors', 'off');
	$regno = $_POST['regno'];

	$query = "SELECT * FROM student WHERE regno = '$regno'";
	$result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);

	if ($result) {
    $row = $result->fetch_array();
    if ($count == 0) {
      echo '<br><br>Record not found';
    }
    if (isset($_POST['submit']) && $count!=0) {
      echo '<br><br>name: ' . $row["name"];
			echo '<br>regno:  ' . $row["regno"];
			echo '<br>sub1:  ' . $row["sub1"];
			echo '<br>sub2:  ' . $row["sub2"];
			echo '<br>sub3:  ' . $row["sub3"];
    }
    if (isset($_POST['avg']) && $count!=0) {
      $total = $row["sub1"] + $row["sub2"] + $row["sub3"];
			$avg = number_format($total/3, 3);
			echo '<br><br>Average = ' . $avg;
    }
  }
  else {
    echo "<br><br>Error retrieving record => " . $conn->error;
  }

  include('footer.html');
  
?>
