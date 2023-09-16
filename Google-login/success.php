<?php
session_start();
error_reporting(0);
require_once 'vendor/autoload.php';

// init configuration
$clientID = '932025934037-8fqkuh55qc62l46464pjkd639m1ro0bm.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/feedback/Google-login/success.php';

// create Client Request to+++++++ access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
//   $client->setAccessToken($token['access_token']);

  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
  $_SESSION['user_email'] = $email;
  $_SESSION['user_name'] = $name;
  $roll_no = substr($name,0,10);
  $full_name =  substr($name,11);
  

  $con =mysqli_connect("localhost", "root", "", "phpform");
  $query = "SELECT * FROM login where username='$roll_no' ";
  $query_run = mysqli_query($con, $query);
  while($row=mysqli_fetch_array($query_run)){
    $sem=$row['loginSem'];
    $dept=$row['loginDept'];
    $validate=$row['validate'];
  }
  $query1 = "SELECT * FROM adminconfig5 where sem='$sem' &&  dept='$dept' ";
  $query_run1 = mysqli_query($con, $query1);
  while($row=mysqli_fetch_array($query_run1)){
    $acad_year=$row['academic_year'];
  }


  // echo $email;
  // echo "<br>";
  // echo $full_name;
  // echo "<br>";
  // echo $roll_no;
  // echo "<br>";
  // echo $sem;
  // echo "<br>";
  // echo $dept;
  // echo "<br>";
  // echo $acad_year;

  

   // now you can use this profile info to create account in your website and make user logged in.
} else {
  echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Welcome-page-Student Feedback RUCE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header-div">
        <header>
            <img src="../img/RUCE_logo-removebg-preview.png" style="width:100%; height:auto; max-width:650px;"/>
        </header>
    </div><BR />
  <h1 align="center">Student's Online Feedback System</h1>
<div class="container">
<form  method="post" class="form-welcome" action="redirect.php">
  
  <table class="table table-borderless">
    <div class="brand-logo"><img src="../img/ru_logo-removebg-preview1.png" alt="" width="60px" height="90px" style="margin-left: 20px;"></div>
    <tr>
        <td><label for="Academic-Year">Academic-Year&nbsp;:</label></td>
        <td><?php echo $acad_year; ?></td>
        <br />
    </tr>

    <tr>
        <td><label for="Academic-Year">E-mail&nbsp;:</label></td>
        <td><?php echo $email; ?></td>
        <br />
    </tr>

    <tr>
        <td><label for="name">FULL NAME&nbsp;:</label></td>
        <td><?php echo $full_name; ?></td>
        <br />
      </tr>

      <tr>
        <td><label for="name">Roll No.&nbsp;:</label></td>
        <td><?php echo $roll_no; ?></td>
        <br />
      </tr>


      <tr>
        
        <td><label for="sem">Semester&nbsp;:</label></td>
        <td><?php echo $sem; ?></td>
        
        <br />
      </tr>

      <tr>
        <td><label for="dept">Department&nbsp;:</label></td>
        <td><?php echo $dept; ?></td>
        <br />
      </tr>
      
  </table>
<button type="submit" name="submit" class="feed-btn">Give Feedback!</button>

</form>
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <footer>
    <p>&copy; Designed and Developed by Dept.Of CSE (2020-2024) @RUCE, Knl <br /> Visit : <a href="http://ruce.ac.in">Rayalaseema University College of Engineering, Kurnool</a></p>
</footer>



</body>
</html>

