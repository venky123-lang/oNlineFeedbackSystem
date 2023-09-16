<?php
$con =mysqli_connect("localhost", "root", "", "phpform");

use Dompdf\Dompdf;
if(isset($_POST['view'])){

require_once 'dompdf/autoload.inc.php';

$academic_year = $_POST['academic_year'];
$faculty = $_POST["faculty"];

$dompdf = new Dompdf();
if(!empty($_POST["academic_year"]) && !empty($_POST["faculty"]) ){
    $con =mysqli_connect("localhost", "root", "", "phpform");
    $query = "SELECT DISTINCT dept,sem,faculty,subject FROM demo6 where academic_year='$academic_year' && faculty='$faculty' ";
    $result = mysqli_query($con, $query);



$html='<html>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align:center;
    font-size:20px;
  }
  th,td{
    padding:10px;
  }
  .float-left{
    float: left;
  }
  .float-right{
    float: right;
  }p{
    font-size:20px;
  }
</style>
<h1 align="center" style="font-size:20px;">RAYALASEEMA UNIVERSITY COLLEGE OF ENGINEERING , KURNOOL</h1>
<h1 align="center" style="font-size:20px;">Students feedback on faculty</h1>
<h1 align="center" style="font-size:20px;"><u>DETAILED FACULTY REPORTS</u></h1>';
$html.='
    <p><b>Academic Year&nbsp;:</b> '.$academic_year.' </p>
    <p><b>Faculty Name &nbsp;&nbsp;&nbsp;:'.$faculty.'</b> </p>';

        while ($row = mysqli_fetch_assoc($result)) {
            
            $faculty = $row['faculty'];
            $subject = $row['subject'];
            $sem = $row['sem'];
            $dept = $row['dept'];

            $sql5 = "SELECT COUNT(*) AS count_5 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A1=5";
            $sql4 = "SELECT COUNT(*) AS count_4 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A1=4";
            $sql3 = "SELECT COUNT(*) AS count_3 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A1=3";
            $sql2 = "SELECT COUNT(*) AS count_2 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A1=2";
            $sql1 = "SELECT COUNT(*) AS count_1 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A1=1";
            $result1 = mysqli_query($con, $sql5);
            $result2 = mysqli_query($con, $sql4);
            $result3 = mysqli_query($con, $sql3);
            $result4 = mysqli_query($con, $sql2);
            $result5 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $row3 = mysqli_fetch_assoc($result3);
            $row4 = mysqli_fetch_assoc($result4);
            $row5 = mysqli_fetch_assoc($result5);
                $count11 = $row1['count_5'];
                $count12 = $row2['count_4'];
                $count13 = $row3['count_3'];
                $count14 = $row4['count_2'];
                $count15 = $row5['count_1'];

            $sql5 = "SELECT COUNT(*) AS count_5 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A2=5";
            $sql4 = "SELECT COUNT(*) AS count_4 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A2=4";
            $sql3 = "SELECT COUNT(*) AS count_3 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A2=3";
            $sql2 = "SELECT COUNT(*) AS count_2 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A2=2";
            $sql1 = "SELECT COUNT(*) AS count_1 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A2=1";
            $result1 = mysqli_query($con, $sql5);
            $result2 = mysqli_query($con, $sql4);
            $result3 = mysqli_query($con, $sql3);
            $result4 = mysqli_query($con, $sql2);
            $result5 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $row3 = mysqli_fetch_assoc($result3);
            $row4 = mysqli_fetch_assoc($result4);
            $row5 = mysqli_fetch_assoc($result5);
                $count21 = $row1['count_5'];
                $count22 = $row2['count_4'];
                $count23 = $row3['count_3'];
                $count24 = $row4['count_2'];
                $count25 = $row5['count_1'];

            $sql5 = "SELECT COUNT(*) AS count_5 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A3=5";
            $sql4 = "SELECT COUNT(*) AS count_4 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A3=4";
            $sql3 = "SELECT COUNT(*) AS count_3 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A3=3";
            $sql2 = "SELECT COUNT(*) AS count_2 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A3=2";
            $sql1 = "SELECT COUNT(*) AS count_1 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A3=1";
            $result1 = mysqli_query($con, $sql5);
            $result2 = mysqli_query($con, $sql4);
            $result3 = mysqli_query($con, $sql3);
            $result4 = mysqli_query($con, $sql2);
            $result5 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $row3 = mysqli_fetch_assoc($result3);
            $row4 = mysqli_fetch_assoc($result4);
            $row5 = mysqli_fetch_assoc($result5);
                $count31 = $row1['count_5'];
                $count32 = $row2['count_4'];
                $count33 = $row3['count_3'];
                $count34 = $row4['count_2'];
                $count35 = $row5['count_1'];

            $sql5 = "SELECT COUNT(*) AS count_5 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A4=5";
            $sql4 = "SELECT COUNT(*) AS count_4 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A4=4";
            $sql3 = "SELECT COUNT(*) AS count_3 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A4=3";
            $sql2 = "SELECT COUNT(*) AS count_2 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A4=2";
            $sql1 = "SELECT COUNT(*) AS count_1 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A4=1";
            $result1 = mysqli_query($con, $sql5);
            $result2 = mysqli_query($con, $sql4);
            $result3 = mysqli_query($con, $sql3);
            $result4 = mysqli_query($con, $sql2);
            $result5 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $row3 = mysqli_fetch_assoc($result3);
            $row4 = mysqli_fetch_assoc($result4);
            $row5 = mysqli_fetch_assoc($result5);
                $count41 = $row1['count_5'];
                $count42 = $row2['count_4'];
                $count43 = $row3['count_3'];
                $count44 = $row4['count_2'];
                $count45 = $row5['count_1'];

            $sql5 = "SELECT COUNT(*) AS count_5 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A5=5";
            $sql4 = "SELECT COUNT(*) AS count_4 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A5=4";
            $sql3 = "SELECT COUNT(*) AS count_3 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A5=3";
            $sql2 = "SELECT COUNT(*) AS count_2 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A5=2";
            $sql1 = "SELECT COUNT(*) AS count_1 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A5=1";
            $result1 = mysqli_query($con, $sql5);
            $result2 = mysqli_query($con, $sql4);
            $result3 = mysqli_query($con, $sql3);
            $result4 = mysqli_query($con, $sql2);
            $result5 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $row3 = mysqli_fetch_assoc($result3);
            $row4 = mysqli_fetch_assoc($result4);
            $row5 = mysqli_fetch_assoc($result5);
                $count51 = $row1['count_5'];
                $count52 = $row2['count_4'];
                $count53 = $row3['count_3'];
                $count54 = $row4['count_2'];
                $count55 = $row5['count_1'];

            $sql5 = "SELECT COUNT(*) AS count_5 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A6=5";
            $sql4 = "SELECT COUNT(*) AS count_4 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A6=4";
            $sql3 = "SELECT COUNT(*) AS count_3 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A6=3";
            $sql2 = "SELECT COUNT(*) AS count_2 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A6=2";
            $sql1 = "SELECT COUNT(*) AS count_1 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A6=1";
            $result1 = mysqli_query($con, $sql5);
            $result2 = mysqli_query($con, $sql4);
            $result3 = mysqli_query($con, $sql3);
            $result4 = mysqli_query($con, $sql2);
            $result5 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $row3 = mysqli_fetch_assoc($result3);
            $row4 = mysqli_fetch_assoc($result4);
            $row5 = mysqli_fetch_assoc($result5);
                $count61 = $row1['count_5'];
                $count62 = $row2['count_4'];
                $count63 = $row3['count_3'];
                $count64 = $row4['count_2'];
                $count65 = $row5['count_1'];

            $sql5 = "SELECT COUNT(*) AS count_5 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A7=5";
            $sql4 = "SELECT COUNT(*) AS count_4 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A7=4";
            $sql3 = "SELECT COUNT(*) AS count_3 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A7=3";
            $sql2 = "SELECT COUNT(*) AS count_2 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A7=2";
            $sql1 = "SELECT COUNT(*) AS count_1 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A7=1";
            $result1 = mysqli_query($con, $sql5);
            $result2 = mysqli_query($con, $sql4);
            $result3 = mysqli_query($con, $sql3);
            $result4 = mysqli_query($con, $sql2);
            $result5 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $row3 = mysqli_fetch_assoc($result3);
            $row4 = mysqli_fetch_assoc($result4);
            $row5 = mysqli_fetch_assoc($result5);
                $count71 = $row1['count_5'];
                $count72 = $row2['count_4'];
                $count73 = $row3['count_3'];
                $count74 = $row4['count_2'];
                $count75 = $row5['count_1'];

            $sql5 = "SELECT COUNT(*) AS count_5 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A8=5";
            $sql4 = "SELECT COUNT(*) AS count_4 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A8=4";
            $sql3 = "SELECT COUNT(*) AS count_3 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A8=3";
            $sql2 = "SELECT COUNT(*) AS count_2 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A8=2";
            $sql1 = "SELECT COUNT(*) AS count_1 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A8=1";
            $result1 = mysqli_query($con, $sql5);
            $result2 = mysqli_query($con, $sql4);
            $result3 = mysqli_query($con, $sql3);
            $result4 = mysqli_query($con, $sql2);
            $result5 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $row3 = mysqli_fetch_assoc($result3);
            $row4 = mysqli_fetch_assoc($result4);
            $row5 = mysqli_fetch_assoc($result5);
                $count81 = $row1['count_5'];
                $count82 = $row2['count_4'];
                $count83 = $row3['count_3'];
                $count84 = $row4['count_2'];
                $count85 = $row5['count_1'];

            $sql5 = "SELECT COUNT(*) AS count_5 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A9=5";
            $sql4 = "SELECT COUNT(*) AS count_4 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A9=4";
            $sql3 = "SELECT COUNT(*) AS count_3 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A9=3";
            $sql2 = "SELECT COUNT(*) AS count_2 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A9=2";
            $sql1 = "SELECT COUNT(*) AS count_1 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A9=1";
            $result1 = mysqli_query($con, $sql5);
            $result2 = mysqli_query($con, $sql4);
            $result3 = mysqli_query($con, $sql3);
            $result4 = mysqli_query($con, $sql2);
            $result5 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $row3 = mysqli_fetch_assoc($result3);
            $row4 = mysqli_fetch_assoc($result4);
            $row5 = mysqli_fetch_assoc($result5);
                $count91 = $row1['count_5'];
                $count92 = $row2['count_4'];
                $count93 = $row3['count_3'];
                $count94 = $row4['count_2'];
                $count95 = $row5['count_1'];

            $sql5 = "SELECT COUNT(*) AS count_5 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A10=5";
            $sql4 = "SELECT COUNT(*) AS count_4 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A10=4";
            $sql3 = "SELECT COUNT(*) AS count_3 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A10=3";
            $sql2 = "SELECT COUNT(*) AS count_2 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A10=2";
            $sql1 = "SELECT COUNT(*) AS count_1 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A10=1";
            $result1 = mysqli_query($con, $sql5);
            $result2 = mysqli_query($con, $sql4);
            $result3 = mysqli_query($con, $sql3);
            $result4 = mysqli_query($con, $sql2);
            $result5 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $row3 = mysqli_fetch_assoc($result3);
            $row4 = mysqli_fetch_assoc($result4);
            $row5 = mysqli_fetch_assoc($result5);
                $count101 = $row1['count_5'];
                $count102 = $row2['count_4'];
                $count103 = $row3['count_3'];
                $count104 = $row4['count_2'];
                $count105 = $row5['count_1'];

            $sql5 = "SELECT COUNT(*) AS count_5 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A11=5";
            $sql4 = "SELECT COUNT(*) AS count_4 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A11=4";
            $sql3 = "SELECT COUNT(*) AS count_3 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A11=3";
            $sql2 = "SELECT COUNT(*) AS count_2 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A11=2";
            $sql1 = "SELECT COUNT(*) AS count_1 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A11=1";
            $result1 = mysqli_query($con, $sql5);
            $result2 = mysqli_query($con, $sql4);
            $result3 = mysqli_query($con, $sql3);
            $result4 = mysqli_query($con, $sql2);
            $result5 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $row3 = mysqli_fetch_assoc($result3);
            $row4 = mysqli_fetch_assoc($result4);
            $row5 = mysqli_fetch_assoc($result5);
                $count111 = $row1['count_5'];
                $count112 = $row2['count_4'];
                $count113 = $row3['count_3'];
                $count114 = $row4['count_2'];
                $count115 = $row5['count_1'];

            $sql5 = "SELECT COUNT(*) AS count_5 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A12=5";
            $sql4 = "SELECT COUNT(*) AS count_4 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A12=4";
            $sql3 = "SELECT COUNT(*) AS count_3 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A12=3";
            $sql2 = "SELECT COUNT(*) AS count_2 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A12=2";
            $sql1 = "SELECT COUNT(*) AS count_1 FROM demo6 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' && faculty='$faculty' && subject='$subject' && A12=1";
            $result1 = mysqli_query($con, $sql5);
            $result2 = mysqli_query($con, $sql4);
            $result3 = mysqli_query($con, $sql3);
            $result4 = mysqli_query($con, $sql2);
            $result5 = mysqli_query($con, $sql1);
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $row3 = mysqli_fetch_assoc($result3);
            $row4 = mysqli_fetch_assoc($result4);
            $row5 = mysqli_fetch_assoc($result5);
                $count121 = $row1['count_5'];
                $count122 = $row2['count_4'];
                $count123 = $row3['count_3'];
                $count124 = $row4['count_2'];
                $count125 = $row5['count_1'];

            $query2="SELECT  totalStudents from adminconfig5 WHERE academic_year='$academic_year' && dept='$dept' && sem='$sem' ";
                $result6=mysqli_query($con,$query2);
                $row6 = mysqli_fetch_assoc($result6);
                $totalstudents = $row6['totalStudents'];

                
            $count5s=$count11+$count21+$count31+$count41+$count51+$count61+$count71+$count81+$count91+$count101+$count111+$count121;
            $count4s=$count12+$count22+$count32+$count42+$count52+$count62+$count72+$count82+$count92+$count102+$count112+$count122;
            $count3s=$count13+$count23+$count33+$count43+$count53+$count63+$count73+$count83+$count93+$count103+$count113+$count123;
            $count2s=$count14+$count24+$count34+$count44+$count54+$count64+$count74+$count84+$count94+$count104+$count114+$count124;
            $count1s=$count15+$count25+$count35+$count45+$count55+$count65+$count75+$count85+$count95+$count105+$count115+$count125;
                        
            $totalratings = $count5s+$count4s+$count3s+$count2s+$count1s;
            
                
            
            $countTotal=($count5s+$count4s+$count3s+$count2s+$count1s)/12;
            $totalscore = (($count5s*5)+($count4s*3)+($count3s*1))/$totalratings;
            
            
            
            // $totalscore="3.5698";
            $rating ="";
            
            if ($totalscore >= 4 && $totalscore <= 5){
                $rating="Excellent";
            }elseif ($totalscore >= 3 && $totalscore <= 4){
                $rating="Very Good";
            }elseif ($totalscore >= 2 && $totalscore <= 3){
                $rating="Good";
            }elseif ($totalscore >= 1 && $totalscore <= 2){
                $rating="Satisfactory";
            }elseif ($totalscore >= 0 && $totalscore <= 1){
                $rating="Poor";
            }else{
                $rating="None";
            }

            
            
            
            $html .= '
                <table style="width:700px">
                    <tr>
                        <th></th>
                        <th>5</th>
                        <th>4</th> 
                        <th>3</th>
                        <th>2</th>
                        <th>1</th>
                    </tr>';
                $html .= '<tr>';
                $html .= '<td>A1</td>';
                $html .= '<td>'.$count11.'</td>';
                $html .= '<td>'.$count12.'</td>';
                $html .= '<td>'.$count13.'</td>';
                $html .= '<td>'.$count14.'</td>';
                $html .= '<td>'.$count15.'</td>';
                $html .= '</tr>';

                $html .= '<tr>';
                $html .= '<td>A2</td>';
                $html .= '<td>'.$count21.'</td>';
                $html .= '<td>'.$count22.'</td>';
                $html .= '<td>'.$count23.'</td>';
                $html .= '<td>'.$count24.'</td>';
                $html .= '<td>'.$count25.'</td>';
                $html .= '</tr>';

                $html .= '<tr>';
                $html .= '<td>A3</td>';
                $html .= '<td>'.$count31.'</td>';
                $html .= '<td>'.$count32.'</td>';
                $html .= '<td>'.$count33.'</td>';
                $html .= '<td>'.$count34.'</td>';
                $html .= '<td>'.$count35.'</td>';
                $html .= '</tr>';

                $html .= '<tr>';
                $html .= '<td>A4</td>';
                $html .= '<td>'.$count41.'</td>';
                $html .= '<td>'.$count42.'</td>';
                $html .= '<td>'.$count43.'</td>';
                $html .= '<td>'.$count44.'</td>';
                $html .= '<td>'.$count45.'</td>';
                $html .= '</tr>';

                $html .= '<tr>';
                $html .= '<td>A5</td>';
                $html .= '<td>'.$count51.'</td>';
                $html .= '<td>'.$count52.'</td>';
                $html .= '<td>'.$count53.'</td>';
                $html .= '<td>'.$count54.'</td>';
                $html .= '<td>'.$count55.'</td>';
                $html .= '</tr>';

                $html .= '<tr>';
                $html .= '<td>A6</td>';
                $html .= '<td>'.$count61.'</td>';
                $html .= '<td>'.$count62.'</td>';
                $html .= '<td>'.$count63.'</td>';
                $html .= '<td>'.$count64.'</td>';
                $html .= '<td>'.$count65.'</td>';
                $html .= '</tr>';

                $html .= '<tr>';
                $html .= '<td>A7</td>';
                $html .= '<td>'.$count71.'</td>';
                $html .= '<td>'.$count72.'</td>';
                $html .= '<td>'.$count73.'</td>';
                $html .= '<td>'.$count74.'</td>';
                $html .= '<td>'.$count75.'</td>';
                $html .= '</tr>';

                $html .= '<tr>';
                $html .= '<td>A8</td>';
                $html .= '<td>'.$count81.'</td>';
                $html .= '<td>'.$count82.'</td>';
                $html .= '<td>'.$count83.'</td>';
                $html .= '<td>'.$count84.'</td>';
                $html .= '<td>'.$count85.'</td>';
                $html .= '</tr>';

                $html .= '<tr>';
                $html .= '<td>A9</td>';
                $html .= '<td>'.$count91.'</td>';
                $html .= '<td>'.$count92.'</td>';
                $html .= '<td>'.$count93.'</td>';
                $html .= '<td>'.$count94.'</td>';
                $html .= '<td>'.$count95.'</td>';
                $html .= '</tr>';

                $html .= '<tr>';
                $html .= '<td>A10</td>';
                $html .= '<td>'.$count101.'</td>';
                $html .= '<td>'.$count102.'</td>';
                $html .= '<td>'.$count103.'</td>';
                $html .= '<td>'.$count104.'</td>';
                $html .= '<td>'.$count105.'</td>';
                $html .= '</tr>';

                $html .= '<tr>';
                $html .= '<td>A11</td>';
                $html .= '<td>'.$count111.'</td>';
                $html .= '<td>'.$count112.'</td>';
                $html .= '<td>'.$count113.'</td>';
                $html .= '<td>'.$count114.'</td>';
                $html .= '<td>'.$count115.'</td>';
                $html .= '</tr>';

                $html .= '<tr>';
                $html .= '<td>A12</td>';
                $html .= '<td>'.$count121.'</td>';
                $html .= '<td>'.$count122.'</td>';
                $html .= '<td>'.$count123.'</td>';
                $html .= '<td>'.$count124.'</td>';
                $html .= '<td>'.$count125.'</td>';
                $html .= '</tr>';

                $html .= '<tr>';
                $html .= '<td>Total</td>';
                $html .= '<td>'.$count5s.'</td>';
                $html .= '<td>'.$count4s.'</td>';
                $html .= '<td>'.$count3s.'</td>';
                $html .= '<td>'.$count2s.'</td>';
                $html .= '<td>'.$count1s.'</td>';
                $html .= '</tr>';



                $html .= '</table>';
                $html .= '<br />';
                $html .= '
                <table style="width:700px">
                    <tr>
                        <th>Department</th>
                        <th>Semester</th>
                        <th>Faculty</th> 
                        <th>Subject</th>
                        <th>Total Score</th>
                        <th>Rating</th>
                        </tr>';
                $html .= '<tr>';
                $html .= '<td>'.$dept.'</td>';
                $html .= '<td>'.$sem.'</td>';
                $html .= '<td>'.$faculty.'</td>';
                $html .= '<td>'.$subject.'</td>';
                $html .= '<td>'.$totalscore.'</td>';
                $html .= '<td>'.$rating.'</td>';
                $html .= '</tr>';
                $html .= '</table><br />';
                $html .='        
                <h3>5-Excellent &nbsp;&nbsp;&nbsp; 4-Very Good  &nbsp;&nbsp;&nbsp; 3-Good  &nbsp;&nbsp;&nbsp;  2-Satisfactory  &nbsp;&nbsp;&nbsp; 1-Poor</h3>
                <h3>Total No. Of Students Submitted : '.$countTotal.' Out of '.$totalstudents.' </h3>
                <br />';
        }
                $html .='<p>&nbsp;</p><p>&nbsp;</p>
                            <h2 class="float-left">HOD</h2>
                            <h2 class="float-right">PRINCIPAL</h2>
                    </html>';
     
                   
$dompdf->loadHtml($html);
                            
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
                            
// View the output of the file in browser
$dompdf->stream('example.pdf', ['Attachment' => false]);
// Output the generated PDF to Browser
// $dompdf->stream();
                   
}
}

?>