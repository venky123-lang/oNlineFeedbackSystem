<?php
if (isset($_GET["id"])) {
    // Retrieve the row ID to be deleted
    $id = $_GET["id"];
  
    // Delete the row from the database
    $con =mysqli_connect("localhost", "root", "", "phpform");
    $query = "DELETE FROM adminconfig5 WHERE id = $id";
    // mysqli_query($con, $query);
    $con->query($query);
  
    // Reload the page to display the updated table
  }
  header("location:showactivatedfeedbacks.php");
  exit;
  ?>