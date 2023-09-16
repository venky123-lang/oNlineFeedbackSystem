<?php
session_start();
$email=$_SESSION['user_email'];
$name=$_SESSION['user_name'];
$roll_no = substr($name,0,10);
$full_name =  substr($name,11);
// echo "$roll_no";
// echo "$full_name";


if(isset($_POST['submit'])){
    $con =mysqli_connect("localhost", "root", "", "phpform");
    $query = "SELECT * FROM login where username='$roll_no' ";
    $query_run = mysqli_query($con, $query);
    while($row=mysqli_fetch_array($query_run)){
    $validate=$row['validate'];
    if($validate==1){
      $con =mysqli_connect("localhost", "root", "", "phpform");
      $query = "SELECT * FROM login where username='$roll_no' ";
      $query_run = mysqli_query($con, $query);
      while($row=mysqli_fetch_array($query_run)){
      $sem=$row['loginSem'];
      $dept=$row['loginDept'];
        }
      $query1 = "SELECT * FROM adminconfig5 where sem='$sem' &&  dept='$dept' ";
      $query_run1 = mysqli_query($con, $query1);
      while($row=mysqli_fetch_array($query_run1)){
      $acad_year=$row['academic_year'];
        }
        $email;
        $full_name;
        $roll_no;
        $sem;
        $dept;
        $acad_year;

        $query = "INSERT into submissions1 (email,roll_no,full_name,academic_year,sem,dept) values('$email','$roll_no','$full_name','$acad_year','$sem','$dept')";
        mysqli_query($con,$query);

        $query_null_count = "SELECT SUM(CASE WHEN cc1='' OR cc1 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN cc2='' OR cc2 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN cc3='' OR cc3 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN cc4='' OR cc4 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN cc5='' OR cc5 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN cc6='' OR cc6 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN ct1='' OR ct1 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN ct2='' OR ct2 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN ct3='' OR ct3 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN ct4='' OR ct4 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN ct5='' OR ct5 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN ct6='' OR ct6 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN cs1='' OR cs1 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN cs2='' OR cs2 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN cs3='' OR cs3 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN cs4='' OR cs4 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN cs5='' OR cs5 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN cs6='' OR cs6 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN fac1='' OR fac1 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN fac2='' OR fac2 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN fac3='' OR fac3 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN fac4='' OR fac4 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN fac5='' OR fac5 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN fac6='' OR fac6 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN facs1='' OR facs1 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN facs2='' OR facs2 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN facs3='' OR facs3 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN facs4='' OR facs4 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN facs5='' OR facs5 IS NULL THEN 1 ELSE 0 END) +
          SUM(CASE WHEN facs6='' OR facs6 IS NULL THEN 1 ELSE 0 END) AS empty_cells_count
          FROM adminconfig5 WHERE sem='$sem' &&  dept='$dept'";

                    // Execute query
          $result = mysqli_query($con, $query_null_count);

          // Get result
          $count = mysqli_fetch_array($result)['empty_cells_count'];

          if($count==0){
            header("location: ../page-3/feedback-3.php");
          }elseif($count==5){
            header("location: ../page-3/feedback-2.php");
          }elseif($count==10){
            header("location: ../page-3/feedback-1.php");
          }else{
            echo "Something Went Wrong";
          }
          $_SESSION['sem']=$sem;
          $_SESSION['dept']=$dept;
          $_SESSION['roll_no']=$roll_no;
        }else{
            echo "<div style='height:100vh;display:flex;flex-direction:column;justify-content:center;align-items:center;'><h3>$roll_no $full_name</h3><h1 style='color: red;'>You have already Submitted your Feedback!!!!</h1><button><a href='../index.html'>Go Back</button></div>";
          }
      }
    
    }
 
?>