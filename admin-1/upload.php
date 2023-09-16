<?php
session_start();
// error_reporting(0);
require_once("header.php");



?>
        <style>

.form-welcome{
  position: relative;
  width: 350px;
  /* height: 440px; */
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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
}

td, th {
  border: 1px solid black;
  text-align: center;
  padding: 8px;
}

tr:nth-child(odd) {
  background-color: #dddddd;
}
.table-format{
    justify-content: center;
    align-items: center;
    height: 30vh;
    display: flex;
    flex-direction: column;
}
    </style>
</head>

        <div class="main">
            <h1 align="center">Upload Students DataBase</h1>
            <!-- <p align="center" style=" color:red;"><strong>Note&nbsp;:&nbsp;</strong>Before Printing the result of Consolidated feedback report, Please Printout all the Individual faculty reports.</p> -->
      <div class="container">
      
         <form action="upload-logic.php" method="post" enctype="multipart/form-data" class="form-welcome">
         <?php
    if(isset($_SESSION['message'])){
        echo "<p style='color:green;'>".$_SESSION['message']."</p>";
        unset($_SESSION['message']);
    }
    ?>
    
    <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
        <input type="file" name="import_file">
                      <br />
                         <br />

         <button class="viewbtn" type="submit" name="upload" class="feed-btn"  value="submit">Upload File</button>
         
         </form>
         <br/><br/><br/>

<div class="table-format">
         <h2>Example File Format<small>(Only .xls , .csv , .xlsx)</small></h2>

<table>
  <tr>
    <th>Username</th>
    <th>validate</th>
    <th>loginDept</th>
    <th>loginSem</th>
  </tr>
  <tr>
    <td>20RU1A0505</td>
    <td>1</td>
    <td>COMPUTER SCIENCE AND ENGINEERING</td>
    <td>sem-I</td>
  </tr>
   <tr>
    <td>20RU1A0563</td>
    <td>1</td>
    <td>ELECTRONICS AND COMMUNICATION ENGINEERING</td>
    <td>sem-III</td>
  </tr>
   <tr>
    <td>20RU1A0505</td>
    <td>1</td>
    <td>CIVIL ENGINEERING</td>
    <td>sem-V</td>
  </tr>
   <tr>
    <td>20RU1A0563</td>
    <td>1</td>
    <td>MECHANICAL ENGINEERING</td>
    <td>sem-VII</td>
  </tr>

</table>
<strong>Note:Only data should be there in the file, Header of the file should not exist(Username,validate,lodinDept,loginSem)</strong>
<br /><br />
</div>
         </div>
    <footer>
    <p>&copy; Designed and Developed by Dept.Of CSE (2020-2024) @RUCE, Knl <br /> Visit : <a href="http://ruce.ac.in">Rayalaseema University College of Engineering, Kurnool</a></p>
</footer>

          
        </div>

<?php
require_once("footer.php");
?>
