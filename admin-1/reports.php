<?php
// session_start();
// error_reporting(0);
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
.error{
  color: red;
}
    </style>
</head>

        <div class="main">
            <h1 align="center">Reports</h1>
            <!-- <p align="center" style=" color:red;"><strong>Note&nbsp;:&nbsp;</strong>Before Printing the result of Consolidated feedback report, Please Printout all the Individual faculty reports.</p> -->
      <div class="container">
         <form action="reports-logic.php" method="post" class="form-welcome">
                  <label for="select">Select&nbsp;&nbsp;&nbsp;:</label><br />
                  <select name="select" id="select">
                    <option value="">--select--</option>
                    <option value="consolidated-report">consolidated-report</option>
                    <option value="detailed-report">Detailed-report</option>
                 </select>
                  <br />
                 <label for="select1">Select&nbsp;&nbsp;&nbsp;:</label><br />
                 <select name="select1" id="select1">
                 <option value="">--select--</option>
                 <option value="all">All</option>
                    <option value="dept-wise">Dept-sem-wise</option>
                    <option value="faculty-wise">faculty-wise</option>
                 </select>
                      <br />
                         <br />

         <button class="viewbtn" type="submit" name="submit" class="feed-btn"  value="submit">Select</button>
         
         </form>
         </div>
    <footer>
    <p>&copy; Designed and Developed by Dept.Of CSE (2020-2024) @RUCE, Knl <br /> Visit : <a href="http://ruce.ac.in">Rayalaseema University College of Engineering, Kurnool</a></p>
</footer>

          
        </div>

<?php
require_once("footer.php");
?>
