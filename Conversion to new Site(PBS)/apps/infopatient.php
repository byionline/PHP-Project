  <div class="large-7 columns extra-padding">
 <div class="winbox-white">
   
  <?php
  /*
 * Profile info
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 * http://krajnish.com/
 *  
 */
  
    $name=(isset($_POST['name']))?$sp->real_escape_string(trim($_POST['name'])):'';
    $gender=(isset($_POST['gender']))?$sp->real_escape_string(trim($_POST['gender'])):'';
     
    //Birthday
   	 $yearOfBirth = (isset($_POST['yearOfBirth']))?$sp->real_escape_string(trim($_POST['yearOfBirth'])):'';
    $monthOfBirth =(isset($_POST['monthOfBirth']))?$sp->real_escape_string(trim($_POST['monthOfBirth'])):'';
    $dateOfBirth = (isset($_POST['dateOfBirth']))?$sp->real_escape_string(trim($_POST['dateOfBirth'])):'';
    $date = $yearOfBirth.'-'.$monthOfBirth.'-'.$dateOfBirth;
    
   	$email=(isset($_POST['email']))?$sp->real_escape_string(trim($_POST['email'])):'';
    $phone=(isset($_POST['phone']))?$sp->real_escape_string(trim($_POST['phone'])):'';
    $address=(isset($_POST['address']))?$sp->real_escape_string(trim($_POST['address'])):'';
    $state=(isset($_POST['state']))?$sp->real_escape_string(trim($_POST['state'])):'';
    $city=(isset($_POST['city']))?$sp->real_escape_string(trim($_POST['city'])):'';
    $country=(isset($_POST['country']))?$sp->real_escape_string(trim($_POST['country'])):'';
    //You can also use $stamp = strtotime ("now"); But I think date("Ymdhis") is easier to understand.
$stamp = date("his");
$orderid = str_replace(".", "", "$stamp");


//Image upload

$output_dir = "img/";
		$allowedExts = array("jpg", "jpeg", "gif", "png","JPG");
		$extension = @end(explode(".", $_FILES["myfile"]["name"]));
		    if(isset($_POST['register']))
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

				         
					    $pic=$_FILES["myfile"]["name"];
					    $conv=explode(".",$pic);
					    $ext=$conv['1'];	
						    
					    //move the uploaded file to uploads folder;
				          move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir.$orderid.".".$ext);
					    
					    $pics=$output_dir.$orderid.".".$ext;
					  
					      
					    $url=$orderid.".".$ext;
					    
			

			    
$insert="INSERT INTO patient(p_name,p_gender,p_mail,p_phone,p_address,p_city,p_state,p_country,p_imgurl,p_birth,p_unique_no) VALUES('$name' ,'$gender' ,'$email' ,'$phone' ,'$address','$city' ,'$state' ,'$country' ,'$url',  '$date', '$orderid' )"; 
            
     
		
		if($sp->query($insert)){

			echo '<div data-alert class="alert-box success radius">';
			  echo  '<b>Success !</b> Patient registered successfully'.'<br />';
			  echo "Patient ID:--".$orderid.'<br />';
			  echo  '<a href="#" class="close">&times;</a>';
			  echo 'Please note down the Patient Id for further procedures '.'<br />';
			echo '</div>';
			//header('refresh:10;url=employeedashboard.php?page=patientprescription');
			header('refresh:12;url=?page=relationwithpatient');
		}
	}
			else{
			echo '<div data-alert class="alert-box warning radius">';
			  echo  '<b>Error !</b> '.$sp->error;
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			}
		
		}
	

    ?>
	</div>
 </div>