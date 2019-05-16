 <?php 
	    $n=(isset($_POST['Name']))?$sp->real_escape_string(trim($_POST['Name'])):'';
    	$a=(isset($_POST['Address']))?$sp->real_escape_string(trim($_POST['Address'])):'';
    	$g=(isset($_POST['Gender']))?$sp->real_escape_string(trim($_POST['Gender'])):'';
    	$r=(isset($_POST['Relationship']))?$sp->real_escape_string(trim($_POST['Relationship'])):'';
    	$i=(isset($_POST['p_unique_no']))?$sp->real_escape_string(trim($_POST['p_unique_no'])):'';
    	$c=(isset($_POST['Contact']))?$sp->real_escape_string(trim($_POST['Contact'])):'';
    		
$select="INSERT INTO accompanies VALUES('$n', '$a', '$c', '$g', '$r', '$i')";
	if(isset($_POST['register'])){
		
	
	if($sp->query($select)){
			echo '<div data-alert class="alert-box success radius">';
			  echo  '<b>Success !</b>Accompanies Entered successfully';
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			//header('refresh:2;url=dashboard.php?page=profile');
			//header('refresh:2;url=dashboard.php?page=info');
		}
	
			else{
			echo '<div data-alert class="alert-box warning radius">';
			  echo  '<b>Error !</b> '.$sp->error;
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			}
		
		}
	

?>