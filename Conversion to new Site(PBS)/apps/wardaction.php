<?php 
$t=(isset($_POST['Type']))?$sp->real_escape_string(trim($_POST['Type'])):'';
    $r=(isset($_POST['Rent']))?$sp->real_escape_string(trim($_POST['Rent'])):'';
    $rn=(isset($_POST['Room_No']))?$sp->real_escape_string(trim($_POST['Room_No'])):'';
     //$room="Z".(substr('Room',1)+1);
    if(isset($_POST['ADDROOM'])){
       // echo $r,$rn,$t;
        $query =  "insert into room(Type,Rent,Room_No) values ('$t', '$r', '$rn')"; 
        $query=$sp->query($query) or die($sp->error);
         echo '<div data-alert class="alert-box success radius">';
		 echo  '<b>Success !</b>Room Added successfully';
	     echo "Room No is:--".$rn.'<br />';
		 echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			//header('refresh:2;url=dashboard.php?page=profile');
			//header('refresh:2;url=dashboard.php?page=info');
		    }
		    
			else {
			echo '<div data-alert class="alert-box warning radius">';
			  echo  '<b>Error !</b> Something goes wrong '.$sp->error;
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			}
		
		
	

		    	
?>