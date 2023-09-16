<?php
session_start();
error_reporting(0);
//Storing Data into database
$con =mysqli_connect("localhost", "root", "", "phpform");
// $query2 = "SELECT * FROM login";
// $query_run2 = mysqli_query($con, $query2);
// while($row2=mysqli_fetch_array($query_run2)){
//   $roll_no=$row2['username'];
// }



if(isset($_POST['submit'])){
    $Q11 = $_POST['Q11'];
    $Q12 = $_POST['Q12'];
    $Q13 = $_POST['Q13'];
    $Q14 = $_POST['Q14'];
    $Q15 = $_POST['Q15'];

    $Q21 = $_POST['Q21'];
    $Q22 = $_POST['Q22'];
    $Q23 = $_POST['Q23'];
    $Q24 = $_POST['Q24'];
    $Q25 = $_POST['Q25'];
    
    $Q31 = $_POST['Q31'];
    $Q32 = $_POST['Q32'];
    $Q33 = $_POST['Q33'];
    $Q34 = $_POST['Q34'];
    $Q35 = $_POST['Q35'];
    
    $Q41 = $_POST['Q41'];
    $Q42 = $_POST['Q42'];
    $Q43 = $_POST['Q43'];
    $Q44 = $_POST['Q44'];
    $Q45 = $_POST['Q45'];
    
    $Q51 = $_POST['Q51'];
    $Q52 = $_POST['Q52'];
    $Q53 = $_POST['Q53'];
    $Q54 = $_POST['Q54'];
    $Q55 = $_POST['Q55'];
    
    $Q61 = $_POST['Q61'];
    $Q62 = $_POST['Q62'];
    $Q63 = $_POST['Q63'];
    $Q64 = $_POST['Q64'];
    $Q65 = $_POST['Q65'];
    
    $Q71 = $_POST['Q71'];
    $Q72 = $_POST['Q72'];
    $Q73 = $_POST['Q73'];
    $Q74 = $_POST['Q74'];
    $Q75 = $_POST['Q75'];
    
    $Q81 = $_POST['Q81'];
    $Q82 = $_POST['Q82'];
    $Q83 = $_POST['Q83'];
    $Q84 = $_POST['Q84'];
    $Q85 = $_POST['Q85'];
    
    $Q91 = $_POST['Q91'];
    $Q92 = $_POST['Q92'];
    $Q93 = $_POST['Q93'];
    $Q94 = $_POST['Q94'];
    $Q95 = $_POST['Q95'];
    
    $Q101 = $_POST['Q101'];
    $Q102 = $_POST['Q102'];
    $Q103 = $_POST['Q103'];
    $Q104 = $_POST['Q104'];
    $Q105 = $_POST['Q105'];
    
    $Q111 = $_POST['Q111'];
    $Q112 = $_POST['Q112'];
    $Q113 = $_POST['Q113'];
    $Q114 = $_POST['Q114'];
    $Q115 = $_POST['Q115'];
    
    $Q121 = $_POST['Q121'];
    $Q122 = $_POST['Q122'];
    $Q123 = $_POST['Q123'];
    $Q124 = $_POST['Q124'];
    $Q125 = $_POST['Q125'];
    


    $con =mysqli_connect("localhost", "root", "", "phpform");
    $userprofile2 = $_SESSION['loginSem'];
    $userprofile3 = $_SESSION['loginDept'];
    $query = "SELECT * FROM adminconfig5 where sem='$userprofile2' &&  dept='$userprofile3' ";
    $query_run = mysqli_query($con, $query);
    while($row=mysqli_fetch_array($query_run)){
        $sem=$row['sem'];
        $acad_year=$row['academic_year'];
        $dept=$row['dept'];
        $fac1 = $row['fac1'];
        $fac2 = $row['fac2'];
        $fac3 = $row['fac3'];
        $fac4 = $row['fac4'];
        $fac5 = $row['fac5'];
        
        $ct1 = $row['ct1'];
        $ct2 = $row['ct2'];
        $ct3 = $row['ct3'];
        $ct4 = $row['ct4'];
        $ct5 = $row['ct5'];
        
}
    $sem ;
    $acad_year;
    $dept;
    $fac1;
    $fac2;
    $fac3;
    $fac4;
    $fac5;
    
    $ct1;
    $ct2;
    $ct3;
    $ct4;
    $ct5;
    
    $roll_no=$_SESSION['username'];


    $query2 = "INSERT INTO demo6 (academic_year,roll_no,dept,sem,faculty,subject,A1,A2,A3,A4,A5,A6,A7,A8,A9,A10,A11,A12) VALUES('$acad_year','$roll_no','$dept','$sem','$fac1','$ct1','$Q11','$Q21','$Q31','$Q41','$Q51','$Q61','$Q71','$Q81','$Q91','$Q101','$Q111','$Q121'),('$acad_year','$roll_no','$dept','$sem','$fac2','$ct2','$Q12','$Q22','$Q32','$Q42','$Q52','$Q62','$Q72','$Q82','$Q92','$Q102','$Q112','$Q122'),('$acad_year','$roll_no','$dept','$sem','$fac3','$ct3','$Q13','$Q23','$Q33','$Q43','$Q53','$Q63','$Q73','$Q83','$Q93','$Q103','$Q113','$Q123'),('$acad_year','$roll_no','$dept','$sem','$fac4','$ct4','$Q14','$Q24','$Q34','$Q44','$Q54','$Q64','$Q74','$Q84','$Q94','$Q104','$Q114','$Q124'),('$acad_year','$roll_no','$dept','$sem','$fac5','$ct5','$Q15','$Q25','$Q35','$Q45','$Q55','$Q65','$Q75','$Q85','$Q95','$Q105','$Q115','$Q125')";
    mysqli_query($con,$query2);
    // var_dump(mysqli_error($con));
    if($con->affected_rows>0){
        echo '<!DOCTYPE html>
                <html lang="en">
                <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <style>
                    .form-body {
                background: rgb(214, 214, 214);
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
                Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
                }

                .login-box {
                width: 350px;
                height: 100%;
                background: rgb(214, 214, 214);
                margin: 150px auto;
                border-radius: 10px;
                box-shadow: 5px 5px 10px #b6a9a9, -5px -5px 10px #ffffff;
                }

                form {
                margin-left: 40px;
                }

                a{
                text-decoration: none;
                }


                .center{
                display: flex;
                text-align: center;
                align-items: center;
                justify-content: center;
                }
                .outer{
                position: relative;
                margin: 0 50px;
                background: rgb(91, 225, 237);
                }
                .button{
                height: 70px;
                width: 220px;
                border-radius: 50px;
                }
                .circle{
                height: 200px;
                width: 200px;
                border-radius: 50%;
                }
                .outer button, .outer span{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                }
                .outer button{
                background: rgb(236, 104, 241);
                color: #f2f2f2;
                outline: none;
                border: none;
                font-size: 20px;
                z-index: 9;
                letter-spacing: 1px;
                text-transform: uppercase;
                cursor: pointer;
                }
                .button button{
                height: 30px;
                width: 130px;
                border-radius: 50px;
                }
                .circle button{
                height: 180px;
                width: 180px;
                border-radius: 50%;
                }
                .outer span{
                height: 100%;
                width: 100%;
                background: inherit;
                }
                .button span{
                border-radius: 50px;
                }
                .circle span{
                border-radius: 50%;
                }
                .outer:hover span:nth-child(1){
                filter: blur(7px);
                }
                .outer:hover span:nth-child(2){
                filter: blur(14px);
                }
                .outer:hover{
                background: linear-gradient(#14ffe9, #ffeb3b, #ff00e0);
                animation: rotate 1.5s linear infinite;
                }
                @keyframes rotate {
                0%{
                filter: hue-rotate(0deg);
                }
                100%{
                filter: hue-rotate(360deg);
                }
                }
                @media (max-width: 640px){
                .center{
                flex-wrap: wrap;
                flex-direction: column;
                }
                .outer{
                margin: 50px 0;
                }
                }
                .text-anim{
                animation: zoom-in-out 2s infinite;
                }
                @keyframes zoom-in-out{
                0%{
                transform: scale(1);
                }
                50%{
                transform: scale(2);
                }
                100%{
                transform: scale(1);
                }
                }


                </style>
                <title>Document</title>
                </head>
                <body class="form-body">
                <div class="login-box">
                    <h1 align="center" class="text-anim"><i class="fa fa-check" style="font-size:100px;color:green"></i></h1>
                    <form action="">
                        <h2 style="color: darkgreen;">Feedback Submitted Successfully</h2>
                        <h3>Thank you for your valuable feedback...<i class="fa fa-smile-o" style="font-size:24px"></i></h3>
                        <div class="center">
                            <div class="outer button">
                            <button><a id="myButton" href="logout.php" name="logout" >Log_out</a></button>
                            <span></span>
                            <span></span>
                            </div>
                        </div>
                    </form>
                </div>
                
                </body>
                </html>';
    }else{
        echo "try again";
    }
}
?>
<script>
  // Get the button element
  const button = document.getElementById('myButton');
  
  // Set a timer to auto-click the button after 5 seconds
  setTimeout(() => {
    button.click();
  }, 3000); // 3000 milliseconds = 3 seconds
</script>

