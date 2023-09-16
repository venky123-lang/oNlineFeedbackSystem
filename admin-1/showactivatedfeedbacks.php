<?php
session_start();
error_reporting(0);
$academic_year = $_SESSION['academic_year'];
$dept = $_SESSION['dept'];
$sem = $_SESSION['sem'];



require_once("header.php");
?>
        
        <head>
        <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align:center;
    padding: 10px;
    }
    table{
        width: 800px;
        float: right;
        margin-top: 50px;
        margin-right: 200px;
    }
    th{
    background-color:blue;
    color: bisque;
    }
    .btn{
        background-color: firebrick;
        text-decoration: none;
        color: black;
        padding: 5px;
        border-radius: 5px;
    }
    .btn:hover{
        color: aliceblue;
        background-color: red;
    }
    </style>
        </head>
        <div class="main">
        <h1 align="center">Activated Feedback list</h1>
<table >
  <tr>
    <th>S.No</th>
    <th>Academic Year</th>
    <th>Department</th> 
    <th>Semester</th>
    <th>Activation Time & Date</th>
    <!-- <th>Status</th> -->
    <th>Action</th>
  </tr>
  <tr>
  <?php
      // Retrieve and display the stored data in the table rows
      $con =mysqli_connect("localhost", "root", "", "phpform");
      $query = "SELECT * FROM adminconfig5";
      $result = mysqli_query($con, $query);

      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['academic_year'] . "</td>
                <td>" . $row['dept'] . "</td>
                <td>" . $row['sem'] . "</td>
                <td>" . $row['livetime'] . "</td>
                <td><a href='delete.php?id=".$row['id'] . "' class='btn'>Delete</a> </td>
              </tr>";
      }

      mysqli_close($connection);
    ?>


  </tr>

</table>
        </div>

<?php
require_once("footer.php");
?>


   
