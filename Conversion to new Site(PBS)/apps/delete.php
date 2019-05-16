<?php
/*Delete Employee Record File
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 * krajnish.com
 */

 //require('settings/core.php');

//include('prescriptionacti');
$sql= "SELECT * FROM employee";
$retval = $sp->query($sql);
 
//$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
$empid=(isset($_POST['empid']))?$sp->real_escape_string(trim($_POST['empid'])):'';

if(isset($_POST['delete']))
        {
           echo $empid;
          
 $delete=" Delete from employee where u_user='$empid'"; 
 		if($sp->query($delete)){
        echo '<div data-alert class="alert-box success radius">';
        echo  '<b>Success !</b>Employee data for '.$empid.' deleted successfully';
        //echo "Employee UserName:--".$orderid.'<br />';
        //echo "Employee Password:--".'krajnish.com';
        echo  '<a href="#" class="close">&times;</a>';
      echo '</div>';
     // header('refresh:2;url=employeedashboard.php?page=prescriptionactionprint');
      header('refresh:5;url=dashboard.php?page=employeedelete');
    } 
    else{
			echo '<div data-alert class="alert-box warning radius">';
			  echo  '<b>Error !</b> '.$sp->error;
			  echo  '<a href="#" class="close">&times;</a>';
			echo '</div>';
			}
    }
	

?>
<div class="large-7 columns extra-padding">
 <div class="winbox-white">
  <h3>Delete Employee Record</h3>
  
   
  <form method="post" data-abide>
    <div class="row">
    
    <div class="large-7 columns">
      <label for="Employee_ID">Employee ID<small>required</small>
 
				  	 		 <select name="empid" required>
  <option value="">---Select Employee_ID---</option>
  <?php  while($row =mysqli_fetch_array($retval, MYSQLI_ASSOC))
{		$s= $row['u_user'];
    

 	 
  echo "<option value=" . $s.  ">".  $s; }?></option>
   </select> 
</label> <small class="error">You can't leave this empty.</small>
		
 </div>
   
     
  </div>	
 <div class="row">
		<div class="large-12 columns">
		 <button type="submit" name="delete" class="small button expand success radius">Delete</button>
		</div>
    </div>
  </form>
 </div>
</div>

