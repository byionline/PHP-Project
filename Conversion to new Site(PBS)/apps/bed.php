<div class="large-7 columns extra-padding">
<div class="winbox-white">
<h3 class="text-center">Room Allotment</h3>

<?php
/* Room Allotment File
 *  by Rajnish Kumar Singh
* rksjnk@gmail.com
* krajnish.com
*/  

$b_belong=(isset($_POST['Type']))?$sp->real_escape_string(trim($_POST['Type'])):'';
$b_occupy=(isset($_POST['p_unique_no']))?$sp->real_escape_string(trim($_POST['p_unique_no'])):'';
//echo $b_belong;
if(isset($_POST['bedrecord'])){
$query =  "  select * from room where  Type = '$b_belong' and p_unique_no  is  NULL ";
$query=$sp->query($query) or die($sp->error);
$count=$query->num_rows;
//$row = $query->fetch_assoc() ;
	//echo $count;

    if ($count>0){
        //$row = mysqli_fetch_array($query);
        $row =mysqli_fetch_array($query, MYSQLI_ASSOC);
        $room_no = $row['Room_No'];
     //   echo $room_no;
         
         /*Error:--- Cannot add or update a child row: a foreign key constraint fails (`hospital`.`room_given`, CONSTRAINT `room_given_ibfk_1` FOREIGN KEY (`Room_No`) REFERENCES `room` (`Room_No`) ON DELETE CASCADE ON UPDATE CASCADE)
        *with these insert and delete operation:--
        *$insert =" insert into room_given(Room_No,p_unique_no) values('$room_no','$b_occupy')";
        $insert= $sp->query($insert) or die($sp->error);
        $update = "update room set p_unique_no = '$b_occupy' WHERE  `Room_No` = '$room_no'";
        $update =$sp->query($update) or die($sp->error);
        
        */
        $insert =" insert into room_given(Room_No,p_unique_no) values('$room_no','$b_occupy')";
        $insert= $sp->query($insert) or die($sp->error);
       $update = "update room set p_unique_no = '$b_occupy' WHERE  `Room_No` = '$room_no'";
        $update =$sp->query($update) or die($sp->error);
        if(($insert)&&($update)){
        echo '<div data-alert class="alert-box success radius">';
        echo  '<b>Success !</b>Room Alloted successfully';
        echo "Room No:--".$room_no.'<br />';
        echo  '<a href="#" class="close">&times;</a>';
        echo '</div>';
    }
    else{
        echo '<div data-alert class="alert-box warning radius">';
        echo  '<b>Error !</b> '.$sp->errno;
        echo  'Something Goes Wrong!';

        echo  '<a href="#" class="close">&times;</a>';
        echo '</div>';
    }}
     else {
         echo '<div data-alert class="alert-box warning radius">';
         echo  '<b>Error !</b> '.$sp->errno;
         echo  'Room is Not Vaccant!';
          
     }
    


}
 
?> 


  <form  method="post" data-abide>
  	<div class="row">
  		 <div class="large-3 columns">
    <label for="type">Room Type<small>required</small>
 
         <select name="Type"  >
    <option value="">Type</option>
   <!-- These lines are creating problem of not entering the data into database
   <option value="1">General</option>
    <option value="2">Private</option>
    <option value="3">ICU</option>
    Replace with the following lines:-- --> 
    
    <option value="General">General</option>
    <option value="Private">Private</option>
    <option value="ICU">ICU</option>
</select></label>
 		<small class="error">You can't leave this empty.</small>
		
    </div>
     <div class="large-3 columns">
        <label for="patient_unique_no">Patient ID <small>required</small>
 		 <select name="p_unique_no"   >
  		<option value="">Patient ID</option>
  		<?php $select="SELECT p_unique_no  FROM patient";
		$retval = $sp->query($select);
		if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
 while ($row =mysqli_fetch_array($retval, MYSQLI_ASSOC)):?>

	<option value="<?php echo "{$row['p_unique_no']}";?>"><?php echo "{$row['p_unique_no']}";?></option>
     <?php endwhile?>
 </select>
		 </label>
		 <small class="error">You can't leave this empty.</small>
		
    </div>
        
    </div>
    
     
     
    <div class="row">
		<div class="large-12 columns">
		 <button type="submit" name="bedrecord" class="small button expand success radius">Record Entry</button>
		</div>
    </div>
    
   
 </form>
 </div>
</div>