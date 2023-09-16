<?php
session_start();
require_once("header.php");




?>


  <style>
  h2{
    font-size: 20px;
    background-color: #52f568;
    width: 350px;
    margin-left: auto;
    margin-right: auto;

  }
/* main body */
.form-welcome{
  position: relative;
  width: 350px;
  /* height: 630px; */
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf3ed;
  box-shadow: 15px  20px 15px rgb(75, 73, 73) ;
  margin-top: 100px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 50px;
}
select,input,label{
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
}

input,select {
  background: #ecf0f3;
  padding: 10px;
  padding-left: 20px;
  height: 50px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}

.viewbtn{
  border-radius: 10px;
width: 100%;
background-color: rgb(22, 247, 120);
height: 35px;
float: left;
}
.viewbtn:hover{
  background-color: blue;
  color: white;
}
label {
  margin-bottom: 2px;
}
footer{
background-color: grey;
text-align: center;
width: 100%;
}
.error{
  color: red;
}
    </style>
</head>

        <div class="main">
            <h1 align="center">Faculty wise Detailed Reports</h1>
            <!-- <p align="center" style=" color:red;"><strong>Note&nbsp;:&nbsp;</strong>Please Make sure to print each and every Individual Faculty's Report only once, Otherwise duplicate data might occur in all faculty reports.</p> -->
      <div class="container">
         <form action="consolidated-faculty-logic.php" method="post" class="form-welcome">
          <?php if(isset($_SESSION['error'])){
              echo '<div class="error" >' . $_SESSION['error'] . '</div>';
              unset($_SESSION['error']);
      }     ?>
          
         <label for="academic_year">Academic Year&nbsp;&nbsp;&nbsp;:</label><br />
         <?php
                                // Establish a connection to your database
                                $con =mysqli_connect("localhost", "root", "", "phpform");

                                // Retrieve the data from your database
                                $sql = "SELECT DISTINCT academic_year FROM adminconfig5";
                                $result = mysqli_query($con, $sql);

                                // Build the select options
                                echo '<select name="academic_year" id="academic_year" required>';
                                echo '<option value="">--select--</option>';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<option value='" . $row['academic_year'] . "'>" . $row['academic_year'] . "</option>";
                                }
                                echo "</select>";

                                // Close the database connection
                                mysqli_close($con);
                                ?>
                  <br />
                     <label for="faculty">Faculty&nbsp;&nbsp;&nbsp;:</label><br />
                     <?php
                                // Establish a connection to the database
                                $con =mysqli_connect("localhost", "root", "", "phpform");
                                // Retrieve data from the database
                                $sql = "SELECT fac1,fac2,fac3,fac4,fac5,fac6 FROM adminconfig5";
                                $result = mysqli_query($con, $sql);

                                // Create an array
                                $data = array();

                                // Loop through the result set and store the data in the array
                                while($row = mysqli_fetch_assoc($result)) {
                                    $data[] = $row['fac1'];
                                    $data[] = $row['fac2'];
                                    $data[] = $row['fac3'];
                                    $data[] = $row['fac4'];
                                    $data[] = $row['fac5'];
                                    $data[] = $row['fac6'];
                                }

                                // Use the array_unique function to remove duplicates
                                $data = array_unique($data);

                                // Create dynamic select options
                                $options = '';
                                foreach ($data as $value) {
                                    $options .= '<option value="' . $value . '">' . $value . '</option>';
                                }

                                // Output the select options
                                echo '<select name="faculty" id="faculty" required>';
                                echo '<option value="">--select--</option>';
                                echo  $options ;
                                echo '</select>';
                                mysqli_close($con);
                                ?>
                                <br />
                   
         <button class="viewbtn" type="submit" name="view" class="feed-btn">Get Report!</button>
         
         </form>
         </div>
    <footer>
    <p>&copy; Designed and Developed by Dept.Of CSE (2020-2024) @RUCE, Knl <br /> Visit : <a href="http://ruce.ac.in">Rayalaseema University College of Engineering, Kurnool</a></p>
</footer>

          
        </div>

<?php
require_once("footer.php");
?>
