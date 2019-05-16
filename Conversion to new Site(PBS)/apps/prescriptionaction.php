<?php
  
/*
 * User Dashboard
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 *  
 */
ob_start(); 
$doc_name=(isset($_POST['doc_name']))?$sp->real_escape_string(trim($_POST['doc_name'])):'';
    $gender=(isset($_POST['gender']))?$sp->real_escape_string(trim($_POST['gender'])):'';
    //Birthday
    $pid = (isset($_POST['id']))?$sp->real_escape_string(trim($_POST['id'])):'';
    $m1 =(isset($_POST['medicine1']))?$sp->real_escape_string(trim($_POST['medicine1'])):'';
    $m2 = (isset($_POST['medicine2']))?$sp->real_escape_string(trim($_POST['medicine2'])):'';
    $m3 =(isset($_POST['medicine3']))?$sp->real_escape_string(trim($_POST['medicine3'])):'';
    $d1=(isset($_POST['dose1']))?$sp->real_escape_string(trim($_POST['dose1'])):'';
    $d2=(isset($_POST['dose2']))?$sp->real_escape_string(trim($_POST['dose2'])):'';
    $d3=(isset($_POST['dose3']))?$sp->real_escape_string(trim($_POST['dose3'])):'';
    $diagnosis=(isset($_POST['diagnosis']))?$sp->real_escape_string(trim($_POST['diagnosis'])):'';
    $instruction=(isset($_POST['instruction']))?$sp->real_escape_string(trim($_POST['instruction'])):'';
    if(isset($_POST['generateprescription']))
        {
           
          
 $insert="insert into prescription values('$pid','$m1','$diagnosis','$instruction','$doc_name','$m2','$m3', '$gender', '$d1', '$d2', '$d3')";
      
     
    
    if($sp->query($insert)){
      echo '<div data-alert class="alert-box success radius">';
        echo  '<b>Success !</b> Prescription successfully generated';
        //echo "Employee UserName:--".$orderid.'<br />';
        //echo "Employee Password:--".'krajnish.com';
        echo  '<a href="#" class="close">&times;</a>';
      echo '</div>';
     // header('refresh:2;url=employeedashboard.php?page=prescriptionactionprint');
      //header('refresh:2;url=dashboard.php?page=info');
    }
  
      else{
      echo '<div data-alert class="alert-box warning radius">';
        echo  '<b>Error !</b> '.$sp->error;
        echo  '<a href="#" class="close">&times;</a>';
      echo '</div>';
      }
    
    }

    //$pid = $_POST['pid']; 
?>