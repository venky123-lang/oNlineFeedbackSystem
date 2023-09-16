<?php
session_start();
error_reporting(0);

$con =mysqli_connect("localhost", "root", "", "phpform");
$roll_no = $_SESSION['roll_no'];
    $query = "update login set validate=0 where username='$roll_no'";
    $data = mysqli_query($con,$query);

  
  if (isset($_SESSION['roll_no'])) {
    unset($_SESSION['roll_no']);
    unset($_SESSION['dept']);
    session_destroy();
    header("location:../index.html");
    exit();
  }
  
  if (isset($_POST['logout'])) {
    unset($_SESSION['roll_no']);
    unset($_SESSION['dept']);
    session_destroy();
    
    header("location:../index.html");
    exit();
  }




?>

 