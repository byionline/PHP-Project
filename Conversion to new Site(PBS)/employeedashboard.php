<?php
/*
 * User Dashboard
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 *  
 */
 ob_start();
session_start();
require('settings/core.php');
require('settings/authorize.php');
 
 $user_check=$_SESSION['user'];
 // SQL Query To Fetch Complete Information Of User
$sec_sql="select u_user FROM employee where u_user='$user_check' ";
$sec_sql=$sp->query($sec_sql) or die($sp->error);
$row=$sec_sql->fetch_assoc();

if($user_check !=$row['u_user']){
mysql_close($sp); // Closing Connection
$_SESSION["message"] = "You must be logged in to see this user page. Please Login";
header("Location:javascript://history.go(-1)"); // Redirecting To Home Page
}else{
	$userquery= "select * from employee where u_user='$user_check'";
$userquery=$sp->query($userquery) or die($sp->error);
$info=$userquery->fetch_object();

	
}?>  

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <title><?php echo ucfirst($user_check);?> | Patient Billing System(PBS)</title>
    <link rel="stylesheet" href="css/app.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
    
    
  </head>
  <body>
  <!--Navigation starts-->
   <?php include 'employeenavigation.php';?>
  <!--Navigation ends -->

	<div class="large-1 columns">
	<!--sidebar-->
   <?php include 'employeesidebar.php';?>
   <!--sidebar ends -->
	</div>

	  
	<div class="large-11 columns">	  
	  <?php
	  $page=@$_REQUEST['page'];
	  
	  switch($page){
		
		case($page=='main'):
		include('apps/main.php');
		break; 
		
		case($page=='password'):
		include('apps/password.php');
		break;
		case($page=='logout'):
		include('apps/logout.php');
		break;
		
		 
		case($page=='patientregister'):
		include('apps/patientregister.php');
		break;
		case($page=='relationwithpatient'):
		    include('apps/patientrelation.php');
		    break;
		case($page=='patientprescription'):
		include('apps/prescription.php');
		break;
		case($page=='patientreport'):
		    include('apps/diagnosis.php');
		    break;
		    
		case($page=='prescriptionactionprint'):
		include('apps/print.php');
		break;
		case($page=='patientbill'):
		    include('apps/billing.php');
		    break;
		case($page=='patientdata'):
		include('apps/pdata.php');
		break;
		case($page=='beddetails'):
		    include('apps/bed.php');
		    break;
		case($page=='warddetails'):
		    include('apps/ward.php');
		    break;
		
		case($page=='profile'):
		include('apps/employeeprofile.php');
		break;
		
		default:
		include('apps/main.php');
		break;  
		  
		  
		}
		
		
	  ?>
	</div>
<?php
$userquery->close();
?>
 
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script src="js/reveal.min.js"></script>
  </body>
</html>
