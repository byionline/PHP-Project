<div class="large-7 columns extra-padding">		 
	<div class="winbox-white ">
	 <h4 class="text-left" style="color:#333"><i class="fi fi-lock"></i> Change Password</h4>
		<?php
		/*
 * Change Password
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 *  
 */
		 // session_start(); 
		  $old=(isset($_POST['old']))?$sp->real_escape_string(trim($_POST['old'])):'';
		  $new=(isset($_POST['new']))?$sp->real_escape_string(trim($_POST['new'])):'';
		        
		  $old=$rajnish->hashPass($old);
		  $new=$rajnish->hashPass($new);
		  
		   $user_check=$_SESSION['user'];
// SQL Query To Fetch Complete Information Of User
$sec_sql="select c_user FROM company where c_user='$user_check' ";
$sec_sql=$sp->query($sec_sql) or die($sp->error);
$row=$sec_sql->fetch_assoc();
 
//$row = mysql_fetch_assoc($ses_sql);
 
if($user_check==$row['c_user']){
 $check="select * from company where c_user='$user_check' and c_pass='$old'"; 
		 $check=$sp->query($check) or die ($sp->error);
		  
		 
		  if(isset($_POST['submit'])){
		   $count=$check->num_rows;
		   
		      if($count>0){
		      
		      $update="update company set c_pass='$new' where c_user='$user_check'";
			if($sp->query($update)){
			echo '<div data-alert class="alert-box success radius">';
			  echo  '<b>Success !</b> password updated successfully';
			   echo  '<a href="#" class="close">&times;</a>';
			  echo 'You are redirected to login screen';
			  header("Location:logout.php");
			echo '</div>';
			session_destroy();
header('Location:index.php');
			}else{
			echo '<div data-alert class="alert-box warning radius">';
			  echo  '<b>Error !</b> '.$sp->error;
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			}
		    
		      }else{
			echo '<div data-alert class="alert-box alert radius">';
			  echo  '<b>Error !</b> Wrong Current Password...';
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			}
		  
		  }
		     
 
 }
 else{
 	$check="select * from employee where u_user='$user_check' and u_pass='$old'"; 
		 $check=$sp->query($check) or die ($sp->error);
		  
		 
		  if(isset($_POST['submit'])){
		   $count=$check->num_rows;
		   
		      if($count>0){
		      
		      $update="update employee set u_pass='$new' where u_user='$user_check'";
			if($sp->query($update)){
			echo '<div data-alert class="alert-box success radius">';
			  echo  '<b>Success !</b> password updated successfully';
			  echo  '<a href="#" class="close">&times;</a>';
			  echo 'You are redirected to login screen';
			  header("Location:logout.php");
			echo '</div>';
			session_destroy();
header('Location:index.php');
			}else{
			echo '<div data-alert class="alert-box warning radius">';
			  echo  '<b>Error !</b> '.$sp->error;
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			}
		    
		      }else{
			echo '<div data-alert class="alert-box alert radius">';
			  echo  '<b>Error !</b> Wrong Current Password...';
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			}
		  
		  }
		     
 
 	
 	
 }
		  
		  
		  
		    
		?>
	<form action="" method="post" data-abide>
		
		    <div class="row">
		      <div class="large-12 columns">
			  <label for="password">Current Password <small>required</small>
			      <input id="password" type="password"  name="old" placeholder="current password" required></input>
			  </label>
			  <small class="error">Passwords must be at least 4 character alphanumeric.</small>
		      </div>
		    </div>
			
		    <div class="row">
		      <div class="large-12 columns">
			  <label for="password">New Password <small>required</small>
			      <input id="password" type="password"  name="new" placeholder="new password" required></input>
			  </label>
			  <small class="error">Passwords must be at least 4  character alphanumeric.</small>
		      </div>
		    </div>
			
			<div class="row">
			<div class="large-12 columns">
			<button type="submit" name="submit" class="button expand radius">Update</button>
			</div>
			</div>
			</form>   
		</div>
</div>


<div class="large-5 columns extra-padding">		 
		<div class="winbox-white text-center">
	
			<h4 class="text-right" style="color:#333"><i class="fi fi-info"></i> Password</h4>
			<p>
			Password is hash with the combination of 
			md5,sha256 and with some custom string. 			</p>
			   
		</div>
</div>

