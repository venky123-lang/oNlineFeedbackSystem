<?php
session_start();
error_reporting(0);
$con =mysqli_connect("localhost", "root", "", "phpform");
if(isset($_POST['submit'])){
    $academic_year = $_POST['academic_year'];
    $dept=$_POST['dept'];
    $sem=$_POST['sem'];
    $cc1=$_POST['cc1'];
    $cc2=$_POST['cc2'];
    $cc3=$_POST['cc3'];
    $cc4=$_POST['cc4'];
    $cc5=$_POST['cc5'];
    $cc6=$_POST['cc6'];
    $ct1=$_POST['ct1'];
    $ct2=$_POST['ct2'];
    $ct3=$_POST['ct3'];
    $ct4=$_POST['ct4'];
    $ct5=$_POST['ct5'];
    $ct6=$_POST['ct6'];
    $cs1=$_POST['cs1'];
    $cs2=$_POST['cs2'];
    $cs3=$_POST['cs3'];
    $cs4=$_POST['cs4'];
    $cs5=$_POST['cs5'];
    $cs6=$_POST['cs6'];
    $fac1=$_POST['fac1'];
    $fac2=$_POST['fac2'];
    $fac3=$_POST['fac3'];
    $fac4=$_POST['fac4'];
    $fac5=$_POST['fac5'];
    $fac6=$_POST['fac6'];
    $facs1=$_POST['facs1'];
    $facs2=$_POST['facs2'];
    $facs3=$_POST['facs3'];
    $facs4=$_POST['facs4'];
    $facs5=$_POST['facs5'];
    $facs6=$_POST['facs6'];
    $livetime=$_POST['livetime'];
    $totalStudents=$_POST['totalStudents'];
    $query = "INSERT INTO adminconfig5(academic_year,dept,sem,cc1,cc2,cc3,cc4,cc5,cc6,ct1,ct2,ct3,ct4,ct5,ct6,cs1,cs2,cs3,cs4,cs5,cs6,fac1,fac2,fac3,fac4,fac5,fac6,facs1,facs2,facs3,facs4,facs5,facs6,livetime,totalStudents) VALUES('$academic_year','$dept','$sem','$cc1','$cc2','$cc3','$cc4','$cc5','$cc6','$ct1','$ct2','$ct3','$ct4','$ct5','$ct6','$cs1','$cs2','$cs3','$cs4','$cs5','$cs6','$fac1','$fac2','$fac3','$fac4','$fac5','$fac6','$facs1','$facs2','$facs3','$facs4','$facs5','$facs6','$livetime','$totalStudents')";
    $data = mysqli_query($con, $query);
    // $total = mysqli_num_rows($data);
    // var_dump(mysqli_error($con));

     if($data){
      $user_id = mysqli_insert_id($con);
      $_SESSION['academic_year'] = $academic_year;
      $_SESSION['dept'] = $dept;
      $_SESSION['sem'] = $sem;
      $_SESSION['cc1'] = $cc1;
      $_SESSION['cc2'] = $cc2;
      $_SESSION['cc3'] = $cc3;
      $_SESSION['cc4'] = $cc4;
      $_SESSION['cc5'] = $cc5;
      $_SESSION['cc6'] = $cc6;
      $_SESSION['ct1'] = $ct1;
      $_SESSION['ct2'] = $ct2;
      $_SESSION['ct3'] = $ct3;
      $_SESSION['ct4'] = $ct4;
      $_SESSION['ct5'] = $ct5;
      $_SESSION['ct6'] = $ct6;
      $_SESSION['cs1'] = $cs1;
      $_SESSION['cs2'] = $cs2;
      $_SESSION['cs3'] = $cs3;
      $_SESSION['cs4'] = $cs4;
      $_SESSION['cs5'] = $cs5;
      $_SESSION['cs6'] = $cs6;
      $_SESSION['fac1'] = $fac1;
      $_SESSION['fac2'] = $fac2;
      $_SESSION['fac3'] = $fac3;
      $_SESSION['fac4'] = $fac4;
      $_SESSION['fac5'] = $fac5;
      $_SESSION['fac6'] = $fac6;
      $_SESSION['facs1'] = $facs1;
      $_SESSION['facs2'] = $facs2;
      $_SESSION['facs3'] = $facs3;
      $_SESSION['facs4'] = $facs4;
      $_SESSION['facs5'] = $facs5;
      $_SESSION['facs6'] = $facs6;
      $_SESSION['livetime'] = $livetime;
      $_SESSION['totalStudents'] = $totalStudents;
  }else{
    echo "Error inserting record: " . mysqli_error($con);
  }

  }

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
.input-field {
  background: #ecf0f3;
  padding: 2px;
  padding-left: 20px;
  height: 30px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}
.input-short{
  width: 100px;
  background: #ecf0f3;
  padding: 10px;
  /* padding-left: -10px; */
  height: 30px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
  margin-left: 30px;
}
th, td {
  padding-right: 10px;
}
.checkbox{
    height: 20px;
    width: 20px;
}



/* main body */
.form-welcome{
  position: relative;
  width: 1050px;
  height: 800px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf3ed;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
  margin-top: 100px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 50px;
}
table{
margin-top: -80px;
border-spacing:0 25px;
}
.feed-btn{
/* margin-left: 100px; */
border-radius: 10px;
width: 100%;
background-color: rgb(22, 247, 120);
height: 35px;
}
.feed-btn:hover{
color: white;
background-color: green;
}
footer{
background-color: grey;
text-align: center;
width: 100%;
}
    </style>
</head>


        <div class="main">
            <h1 align="center">Admin Configuration panel</h1>
      <div class="container">
         <form action=""  method="post" class="form-welcome">
         <?php if($con->affected_rows>0){
        echo "<h2>Feedback Activated Successfully!</h2>";
    }
    ?>
           <table class="table table-borderless">
                   <tr>
                     <td><label for="Academic-Year">Academic-Year&nbsp;&nbsp;&nbsp;:</label></td>
                     <td><select name="academic_year" id="academic_year" required>
                             <option value="">--select--</option>
                             <option value="2022-2023">2022-2023</option>
                             <option value="2023-2024">2023-2024</option>
                             <option value="2024-2025">2024-2025</option>
                             <option value="2025-2026">2025-2026</option>
                         </select>
                       </td>
                 </tr>

                 <tr>
                  <td><label for="dept">Department&nbsp;&nbsp;&nbsp;:</label></td>
                  <td><select name="dept" id="dept" required>
                          <option value="">--select--</option>
                          <option name="civil" value="CIVIL ENGINEERING" >CIV</option>
                          <option name="cse" value="COMPUTER SCIENCE AND ENGINEERING">CSE</option>
                          <option name="ece" value="ELECTRONICS AND COMMUNICATION ENGINEERING">ECE</option>
                          <option name="mechanical" value="MECHANICAL ENGINEERING">MEC</option>
                          
                          
                      </select>
                  </td>
                  <br />
                </tr>
         
               <tr>
                 <td><label for="sem">Semester&nbsp;&nbsp;&nbsp;:</label></td>
                 <td><select name="sem" id="sem" required>
                         <option value="">--select--</option>
                         <option value="sem-I">1st semester</option>
                         <option value="sem-II">2nd semester</option>
                         <option value="sem-III">3rd semester</option>
                         <option value="sem-IV">4th semester</option>
                         <option value="sem-V">5th semester</option>
                         <option value="sem-VI">6th semester</option>
                         <option value="sem-VII">7th semester</option>
                         <option value="sem-VIII">8th semester</option>
                     </select>
                 </td>
                 <br />
               </tr>
               <tr>
                <td><label for="totalStudents">Total No. of Students&nbsp;&nbsp;&nbsp;:</label></td>
                <td><input type="number" value="" name="totalStudents" id="totalStudents" placeholder="Total Count" min="1" max="100"></td>
               </tr>
               <tr>
                <td><input required class="checkbox" type="checkbox" id="livetime" name="livetime" value="<?php
                                                                        // Set the new timezone
                                                                        date_default_timezone_set('Asia/Kolkata');
                                                                        $date = date('d-m-y h:i:s');
                                                                        echo $date;
                                                                        ?>">&nbsp;Append Live Time
                </td>
               </tr>
               <tr>
                  <td><label >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b><u>Course Mapping</u></b></label></td>
                 
                  <br />
                </tr>
               <tr><td><p>&nbsp;</p></td></tr>
               <table style="width:100%">
                  <tr>
                  <th>S.no</th>
                    <th>Course Code</th>
                    <th>Course Title</th> 
                    <th>Course Title shortcut</th>
                    <th>Name of the Faculty</th>
                    <th>Faculty Code</th>
                  </tr>
                  <tr>
                  <td>1</td>
                    <td><input class="input-field" type="text" name="cc1" value="" placeholder="course code" required /></td>
                    <td><input class="input-field" type="text" name="ct1" value="" placeholder="course Title" required /></td>
                    <td><input class="input-short" type="text" name="cs1" value="" placeholder="shortcut" required /></td>
                    <td><input class="input-field" type="text" name="fac1" value="" placeholder="Faculty" required /></td>
                    <td><input class="input-short" type="text" name="facs1" value="" placeholder="shortcut" required /></td>
                  </tr>
                  <tr>
                  <td>2</td>
                    <td><input class="input-field" type="text" name="cc2" value="" placeholder="course code" required /></td>
                    <td><input class="input-field" type="text" name="ct2" value="" placeholder="course Title" required /></td>
                    <td><input class="input-short" type="text" name="cs2" value="" placeholder="shortcut" required /></td>
                    <td><input class="input-field" type="text" name="fac2" value="" placeholder="Faculty" required /></td>
                    <td><input class="input-short" type="text" name="facs2" value="" placeholder="shortcut" required /></td>
                  </tr>
                  <tr>
                  <td>3</td>
                    <td><input class="input-field" type="text" name="cc3" value="" placeholder="course code" required /></td>
                    <td><input class="input-field" type="text" name="ct3" value="" placeholder="course Title" required /></td>
                    <td><input class="input-short" type="text" name="cs3" value="" placeholder="shortcut" required /></td>
                    <td><input class="input-field" type="text" name="fac3" value="" placeholder="Faculty" required /></td>
                    <td><input class="input-short" type="text" name="facs3" value="" placeholder="shortcut" required /></td>
                  </tr>
                  <tr>
                  <td>4</td>
                    <td><input class="input-field" type="text" name="cc4" value="" placeholder="course code" required /></td>
                    <td><input class="input-field"type="text" name="ct4" value="" placeholder="course Title" required /></td>
                    <td><input class="input-short" type="text" name="cs4" value="" placeholder="shortcut" required /></td>
                    <td><input class="input-field" type="text" name="fac4" value="" placeholder="Faculty" required /></td>
                    <td><input class="input-short" type="text" name="facs4" value="" placeholder="shortcut" required /></td>
                  </tr>
                  <tr>
                  <td>5</td>
                    <td><input class="input-field" type="text" name="cc5" value="" placeholder="course code"  /></td>
                    <td><input class="input-field" type="text" name="ct5" value="" placeholder="course Title"  /></td>
                    <td><input class="input-short" type="text" name="cs5" value="" placeholder="shortcut"  /></td>
                    <td><input class="input-field" type="text" name="fac5" value="" placeholder="Faculty"  /></td>
                    <td><input class="input-short" type="text" name="facs5" value="" placeholder="shortcut"  /></td>
                  </tr>
                  <td>6</td>
                    <td><input class="input-field" type="text" name="cc6" value="" placeholder="course code" /></td>
                    <td><input class="input-field" type="text" name="ct6" value="" placeholder="course Title"  /></td>
                    <td><input class="input-short" type="text" name="cs6" value="" placeholder="shortcut"  /></td>
                    <td><input class="input-field" type="text" name="fac6" value="" placeholder="Faculty"  /></td>
                    <td><input class="input-short" type="text" name="facs6" value="" placeholder="shortcut"  /></td>
                  </tr>
                
                  </table>

         
         
           </table>
         <button type="submit" name="submit" class="feed-btn">Configure!</button>
         
         </form>
         </div>

         


    <footer>
    <p>&copy; Designed and Developed by Dept.Of CSE (2020-2024) @RUCE, Knl <br /> Visit : <a href="http://ruce.ac.in">Rayalaseema University College of Engineering, Kurnool</a></p>
</footer>

          
        </div>




<?php
require_once("footer.php");
?>
