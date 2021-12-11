<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update</title>
  </head>

  <body>

    <h2>Data Updation</h2>

    <form class="" action="dat_upd.php" method="POST">

      Enter Registration Number : <input required type="number" name="regno" id="regno" placeholder="Enter your Registration number" value="">
      <br><br>
      Student Name : <input required type="text" name="new_name" id="new_name" value="">
      <br><br>
      Subject 1 Marks : <input required type="number" name="new_sub1" id="new_sub1" value="">
      <br><br>
      Subject 2 Marks : <input required type="number" name="new_sub2" id="new_sub2" value="">
      <br><br>
      Subject 3 Marks : <input required type="number" name="new_sub3" id="new_sub3" value="">
      <br><br>
      <button type="submit" name="update" id="update">Update</button>
      <br><br>
      <a href="homepage.html">
        <button type="button" name="button">Go Back To Home</button>
      </a>

    </form>

  </body>

</html>


<?php
    include('connection.php');
    //session_start();

    ini_set('display_errors', 'off');
    $regno= $_POST['regno'];
    $new_name=$_POST['new_name'];
    $new_sub1=$_POST['new_sub1'];
    $new_sub2=$_POST['new_sub2'];
    $new_sub3=$_POST['new_sub3'];

    if(isset($_POST['update'])) {
        $query = "UPDATE student SET name = '$new_name', sub1 = '$new_sub1',
        sub2 = '$new_sub2', sub3 = '$new_sub3' WHERE regno = '$regno'";

        if ($conn->query($query) === TRUE) {
          echo "<br><br>Record updated successfully";
        }
        else {
          echo "<br><br>Error updating record => " . $conn->error;
        }
        //session_destroy();
    }
    //$con->close();
    include('footer.html');
    
?>
