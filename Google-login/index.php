
<?php
require_once 'vendor/autoload.php';

// init configuration
$clientID = '932025934037-8fqkuh55qc62l46464pjkd639m1ro0bm.apps.googleusercontent.com';
$clientSecret = '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';
$redirectUri = 'http://localhost/feedback/Google-login/success.php';

// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");


// authenticate code from Google OAuth Flow
if (isset($_SESSION['code'])) {
  $_GET["code"] = urldecode($_SESSION["code"]);
  $token = $client->fetchAccessTokenWithAuthCode($_SESSION['code']);
  $client->setAccessToken($_SESSION['access_token']);

  // get profile info
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;

  // now you can use this profile info to create account in your website and make user logged in.
} else {
  $link= $client->createAuthUrl();
  // echo "<a href='$link'>Google Login</a>";
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">    
<title>Login-Student Feedback RUCE</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header-div">
        <header>
            <img src="../img/RUCE_logo-removebg-preview.png" style="width:100%; height:auto; max-width:650px;"/>
        </header>
    </div>
    <marquee width="100%" direction="left" height="50px" >
        <p class="title">
          <span class="title-word title-word-1">New</span>
        <span >Please try to provide correct and genuine feedback &nbsp &nbsp ||&nbsp &nbsp  Depending on the genunity of your feedback the system will be changed  
          </span>
        </p>
    </marquee>
  <h1 align="center">Student's Online Feedback System</h1>
<div class="container">
<form  method="post" class="form-welcome">
  
  <table class="table table-borderless">
    <div class="brand-logo"><img src="../img/ru_logo-removebg-preview1.png" alt="" width="60px" height="90px" style="margin-left: 20px;"></div><br/>
    <p>&nbsp;</p><p>&nbsp;</p><br/>
    
    <tr>
        <td><label for="Academic-Year"><b>Note&nbsp;:&nbsp;</b>You are accessed to login only with your college Official Mail Id<br />e.g.,&nbsp;20ru1a0505@ruce.ac.in</label></td>
        <br />
    </tr>
      
  </table>
  <p align="center" class="feed-btn-a"><i class="fab fa-google fa-1x"></i><?php echo "<a href='$link'>Login with Google</a>"; ?></p>

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