<?php
session_start();
$con =mysqli_connect("localhost", "root", "", "phpform");
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if(isset($_POST['upload'])){
    $fileName = $_FILES['import_file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $allowed_ext = ['xls','csv','xlsx'];
    if(in_array($file_ext,$allowed_ext)){
        $inputFileNamePath = $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        foreach($data as $row){
            $username = $row['0'];
            $validate = $row['1'];
            $loginDept = $row['2'];
            $loginSem = $row['3'];

            $query = "Insert into login(username,validate,loginDept,loginSem) values('$username','$validate','$loginDept','$loginSem')";
            $query_run = mysqli_query($con, $query);
            $msg = true;
        }
        if(isset($msg)){
            $_SESSION['message'] = "Successfully Uploaded";
            header('Location: upload.php');
            exit(0);
        }else{
            $_SESSION['message'] = "Failed to Upload";
            header('Location: upload.php');
            exit(0);
        }

    }else{
        $_SESSION['message'] = "Invalid File";
        header('Location: upload.php');
        exit(0);
    }
}
?>