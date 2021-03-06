<?php
/*
 * Index file
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 *  
 */
ob_start();
session_start();
if(isset($_SESSION['user'])){
header("location: employeedashboard.php");
}

require('settings/core.php');
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <title>Patient Billing System(PBS)</title>
    <link rel="stylesheet" href="css/style.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
    <script src="bower_components/modernizr/jquery.min.js"></script>
    
    
  </head>
  <body>
 
	<div class="row">
	  <div class="large-6  large-centered columns">
	  
	  <section class="text-center">
		
				<div class="rounded">
				  <h1>PBS <i class="fa fa-plus"></i></h1>
				</div> 
				
				<?php
				$user=(isset($_POST['user']))?$sp->real_escape_string(trim($_POST['user'])):'';
				$pass=(isset($_POST['pass']))?$sp->real_escape_string(trim($_POST['pass'])):'';
				$pass=$rajnish->hashPass($pass);
				
				if(isset($_POST['submit'])){
					if($user=="Admin"){
						
					
					$query="select * from company where c_user='$user'";
					$query=$sp->query($query) or die($sp->error);
					$count=$query->num_rows;
					$row = $query->fetch_assoc() ;
					
					if($count<1){
						   echo '<div data-alert class="alert-box warning radius">';
						   echo  '<b>User</b> not exist';
						   echo  '<a href="#" class="close">&times;</a>';
						   echo '</div>';
				}
				else{	
					   
						
						  if($row['c_access']=='0'){
							  echo '<div data-alert class="alert-box alert radius">';
							   echo  '<b>User</b> access is blocked by Admin...';
							   echo  '<a href="#" class="close">&times;</a>';
							   echo '</div>';
						  }
						  
						  if($row['c_access']=='1'){
							 

							
							 if($row['c_pass']==$pass){
								 
								  $_SESSION['user']=$user;
								  $_SESSION['userlogged']='1';
								  setcookie("user",$_POST['user'],time()+3*24*60*60);
								header("Location:dashboard.php");	
								  
							 }else{
								 echo '<div data-alert class="alert-box warning radius">';
								   echo  '<b>Error !</b> Wrong Password...';
								   echo  '<a href="#" class="close">&times;</a>';
								   echo '</div>';
								
								 
							 }						
						
					}
					
					
				 }	
				
					}
					else{
						
					
					$query1="select * from employee where u_user='$user'";
					$query1=$sp->query($query1) or die($sp->error);
					$count1=$query1->num_rows;
					$row1 = $query1->fetch_assoc() ;
					
				
				 
				 if($count1<1){
						   echo '<div data-alert class="alert-box warning radius">';
						   echo  '<b>User</b> not exist';
						   echo  '<a href="#" class="close">&times;</a>';
						   echo '</div>';
				}
				else{	
					   
						
						  if($row1['u_access']=='0'){
							  echo '<div data-alert class="alert-box alert radius">';
							   echo  '<b>User</b> access is blocked by Admin...';
							   echo  '<a href="#" class="close">&times;</a>';
							   echo '</div>';
						  }
						  
						  if($row1['u_access']=='1'){
							 

							
							 if($row1['u_pass']==$pass){
								 
								  $_SESSION['user']=$user;
								  $_SESSION['userlogged']='1';
								  setcookie("user",$_POST['user'],time()+3*24*60*60);
								
								header("Location:employeedashboard.php");	
								  
							 }else{
								 echo '<div data-alert class="alert-box warning radius">';
								   echo  '<b>Error !</b> Wrong Password...';
								   echo  '<a href="#" class="close">&times;</a>';
								   echo '</div>';
								
								 
							 }						
						
					}
					
					
				 }
				}}
				?>
				   
								
				  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
					<div class="row">
					 <div class="large-12 columns">
					 <input type="text" name="user"  placeholder="Username" required />
					 </div>	
					</div>
					
					<div class="row">
					<div class="large-12 columns">	
					 <input type="password" name="pass"  placeholder="Password" required />
					</div>
					</div>
					
					<div class="row">
					<div class="large-12 columns">
					 <input type="submit" name="submit" value="Login" class="button expand radius">
					</div>
					</div>
				  </form>
				
         
		
	  </section>

	  
	  </div>
	</div> 
	  
  

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
