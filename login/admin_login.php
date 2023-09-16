<?php
error_reporting(0);
if(!empty($_POST['adminusername']) && !empty($_POST['adminpassword'])){
    $adminusername = $_POST['adminusername'];
    $adminpassword=$_POST['adminpassword'];
    $error='Invalid Credentials,Try again..!';
   

    if(isset($_POST['submit'])){
            if($adminusername=="admin"){
                if($adminpassword=="admin"){
                    $error='';
                    $success='welcome';
                    header("location: ../admin-1/index.php");
                }
                else{
                    $error="Invalid password, Please try Again..!";
                    $success="";
                }
            }
            else{
                $error="Invalid username, Please try Again..!";
                $success="";
            }
        }
        if($total == 1){
            $_SESSION['adminusername'] = $adminusername;
            $_SESSION['adminpassword'] = $adminpassword;
            header("location: ../page-2/index.php");
        }else{
            // echo "incorrect username/password";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student_Feedback-RUCE</title>
    <link rel="stylesheet" href="style-1.css">
    <link rel="shortcut icon" href="img/ru_logo-removebg-preview.png" type="image/x-icon">
    <style>
        .container {
  position: relative;
  width: 350px;
  height: 500px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
  /* margin-top: -330px; */
}
    </style>
</head>

<body>

    <div class="header-div">
        <header>
            <img src="../img/RUCE_logo-removebg-preview.png" style="width:100%; height:auto; max-width:650px;"/>
            <a href="http://ruce.ac.in" target="_blank" class="college-web">Go To College Website</a>
        </header>
    </div>
    <marquee width="100%" direction="left" height="50px" >
        <p class="title">
          <span class="title-word title-word-1">New</span>
        <span >Please try to provide correct and genuine feedback &nbsp &nbsp ||&nbsp &nbsp  Depending on the genunity of your feedback the system will be changed  
          </span>
        </p>
    </marquee>

    <BR />
    
  <!-- <h1 align="center">Student's Online Feedback System</h1> -->
  <div>   <p class="heading-p" align="center" style=" font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 30px;"><b>Student's Online Feedback System</b></p></div>
   <div class="main">

    <div class="container">
           
        <div class="brand-logo"><img src="../img/ru_logo-removebg-preview1.png" alt="" width="60px" height="90px"></div>

        <div class="brand-title"><b>Admin_Login</b></div>
        <div class="inputs">
            
		<form action="" method="POST"><?php echo "<div style='color: red;'>$error</div>"; ?></p>
          <label>USERNAME</label>
          <input type="text" name="adminusername" value="" placeholder="Enter your Roll_no" required />
          <label>PASSWORD</label>
          <input type="password" name="adminpassword" value="" id="password"  placeholder="Enter your Password" required />
          <button type="submit" name="submit">LOGIN</button>
		  </form>
        </div>
      </div>
    </div>

    <footer>
    <p>&copy; Designed and Developed by Dept.Of CSE (2020-2024) @RUCE, Knl <br /> Visit : <a href="http://ruce.ac.in">Rayalaseema University College of Engineering, Kurnool</a></p>
</footer>

 <!-- Start of ChatBot (www.chatbot.com) code -->
 <script type="text/javascript">
  window.__be = window.__be || {};
  window.__be.id = "6418580e08aa970007d85274";
  (function() {
      var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
      be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
  })();
</script>
<!-- End of ChatBot code -->
<script>
    var password = document.getElementById("password");

password.onpaste = function(e) {
    e.preventDefault();
    return false;
}
</script>
</body>
</html>