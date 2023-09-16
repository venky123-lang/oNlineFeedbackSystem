<?php

if(isset($_POST['submit'])){
    $select=$_POST['select']; 
    
    $select1=$_POST['select1'];
    if($select=='consolidated-report' && $select1=='dept-wise'){
      header('Location: consolidated-dept.php');
    }elseif($select=='consolidated-report' && $select1=='faculty-wise'){
      header('Location: consolidated-faculty.php');
    }elseif($select=='detailed-report' && $select1=='faculty-wise'){
      header('Location: detailed-faculty.php');
    }elseif($select=='detailed-report' && $select1=='dept-wise'){
      header('Location: detailed-dept.php');
    }elseif($select=='consolidated-report' && $select1=='all'){
      header('Location: consolidated-all.php');
    }elseif($select=='detailed-report' && $select1=='all'){
      header('Location: detailed-all.php');
    }else{
      echo "Something went wrong";
    }
  }
?>