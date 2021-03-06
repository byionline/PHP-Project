 <div class="large-7 columns extra-padding">
 <div class="winbox-white">
  <h3>Your Profile Update</h3>
  
  <?php
  /*
 * Profile info
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 * http://krajnish.com/
 *  
 */
  
    $email=(isset($_POST['email']))?$sp->real_escape_string(trim($_POST['email'])):'';
    $phone=(isset($_POST['phone']))?$sp->real_escape_string(trim($_POST['phone'])):'';
    $address=(isset($_POST['address']))?$sp->real_escape_string(trim($_POST['address'])):'';
    $city=(isset($_POST['city']))?$sp->real_escape_string(trim($_POST['city'])):'';
    
     
   $update="update employee set  u_mail='$email',u_phone='$phone' , u_address='$address' , u_city='$city'
            where u_user='$user_check'" ;          
    if(isset($_POST['update'])){
		
		if($sp->query($update)){
			echo '<div data-alert class="alert-box success radius">';
			  echo  '<b>Success !</b> Profile updated successfully';
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			header('refresh:2;url=employeedashboard.php?page=profile');
			
			}else{
			echo '<div data-alert class="alert-box warning radius">';
			  echo  '<b>Error !</b> '.$sp->error;
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			}
		
		
	}	        
    
  ?>
  <form action="" method="post" data-abide>
    <div class="row">
         <div class="large-12 columns">
			<label>Full Name <small>Read only</small> 
			 <input type="text" name="name" value="<?php echo $info->u_name;?>" readonly/>
			</label>
			 </div>
	</div>
	<div class="row"> 
		 <div class="large-6 columns">
			<label>Email <small>required</small>
			  <input type="text" name="email" value="<?php echo $info->u_mail;?>" required />
			</label>
			<small class="error">You can't leave this empty.</small>
		 
		 </div>
		 <div class="large-6 columns">
			<label>Phone <small>required</small>
			  <input type="text" name="phone" value="<?php echo $info->u_phone;?>" required/>
			</label>
			<small class="error">You can't leave this empty.</small>
		 
		 </div>
    </div>
      <div class="row"> 
		 <div class="large-6 columns">
			<label>Address <small>required</small>
			  <input type="text" name="address" value="<?php echo $info->u_address;?>" required />
			</label>
			<small class="error">You can't leave this empty.</small>
		 
		 </div>
		 <div class="large-6 columns">
			<label>City <small>required</small>
			  <input type="text" name="city" value="<?php echo $info->u_city;?>" required/>
			</label>
			<small class="error">You can't leave this empty.</small>
		 
		 </div>
    </div>
	 	
	<div class="row"> 
		 <div class="large-6 columns">
			<label>State <small>Read only</small>
			  <input type="text" name="state" value="<?php echo $info->u_state;?>" readonly/>
			</label> 
		 
		 </div>
		 <div class="large-6 columns">
			<label>Country <small>Read only</small>
			  <input type="text" name="country" value="<?php echo $info->u_country;?>" readonly/>
			</label> 
		 
		 </div>
    </div>
     
    <div class="row">
		<div class="large-12 columns">
		 <button type="submit" name="update" class="small button expand success radius">Update</button>
		</div>
    </div>
    
  </form>      
 </div>
 </div>
 
 <div class="large-5 columns extra-padding">
 <div class="winbox-white ">
  <h3 class="text-right">Profile Picture</h3>
      <div class="row">
	   <?php
	        $output_dir = "img/";
		$allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
		$extension = @end(explode(".", $_FILES["myfile"]["name"]));
		    if(isset($_POST['upload']))
		    {
			    //Filter the file types , if you want.
			    if ((($_FILES["myfile"]["type"] == "image/gif")
				    || ($_FILES["myfile"]["type"] == "image/jpeg")
				    || ($_FILES["myfile"]["type"] == "image/JPG")
				    || ($_FILES["myfile"]["type"] == "image/png")
				    || ($_FILES["myfile"]["type"] == "image/pjpeg"))
				    && ($_FILES["myfile"]["size"] < 1048000)
				    && in_array($extension, $allowedExts)) 
			    {
				      if ($_FILES["myfile"]["error"] > 0)
					    {
					    echo "Return Code: " . $_FILES["myfile"]["error"] . "<br>";
					    }
				    if (file_exists($output_dir. $_FILES["myfile"]["name"]))
				      {
				      unlink($output_dir. $_FILES["myfile"]["name"]);
				      }	
					    else
					    {
					    $pic=$_FILES["myfile"]["name"];
					    $conv=explode(".",$pic);
					    $ext=$conv['1'];	
						    
					    //move the uploaded file to uploads folder;
				          move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$user_check.".".$ext);
					    
					    $pics=$output_dir.$user_check.".".$ext;
					  
					      
					    $url=$user_check.".".$ext;
					    
					    
					    $update="update company set c_imgurl='$url' where c_user='$user_check'";
					    
					    if($sp->query($update)){
						   echo '<div data-alert class="alert-box success radius">';
						      echo  '<b>Success !</b>  Image Updated' ;
						      echo  '<a href="#" class="close">&times;</a>';
						    echo '</div>';
						   header('refresh:3;url=dashboard.php'); 
					    }
					    else{
						    echo '<div data-alert class="alert-box alert radius">';
						      echo  '<b>Error !</b> ' .$sp->error ;
						      echo  '<a href="#" class="close">&times;</a>';
						    echo '</div>';
					    }
					    
					    
					    
					    }
					    
			    }	
			    else{
			    
			       echo '<div data-alert class="alert-box warning radius">';
			        echo  '<b>Warning !</b>  File not Uploaded, Check image' ;
			        echo  '<a href="#" class="close">&times;</a>';
				echo '</div>';
		 
			    }

		    }	    
	         ?>

		<div class="large-3 columns">
		<img src="img/<?php echo $info->u_imgurl; ?>" width="64" height="64" alt="User Image"/>
		</div> 
		
		<div class="large-9 columns">
		    <form action="" method="post" enctype="multipart/form-data">
		      <div class="large-12 columns">
			<span style="color:red;">Maximun Image Size 100KB</span><br/><br/>
			<input type="file" name="myfile"  required/>
			</div> 
			
			<div class="large-12 columns">
			<button type="submit" name="upload" class="tiny button radius success">Upload</button>
			</div> 
		    </form>
		</div>
      </div>
 </div>
 </div>
 
