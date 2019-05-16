 <div class="large-7 columns extra-padding">
 <div class="winbox-white">
 
 <h3 class="text-center">Diagnosis Report</h3>
 
 <?php
 /*
  * Diagnosis File For Test of any Deaseases
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 * http://krajnish.com/
 *
 */
 // include('diag.php')
 $id=(isset($_POST['p_unique_no']))?$sp->real_escape_string(trim($_POST['p_unique_no'])):'';
 $test=(isset($_POST['Tests']))?$sp->real_escape_string(trim($_POST['Tests'])):'';
 $tresult = (isset($_POST['T_result']))?$sp->real_escape_string(trim($_POST['T_result'])):'';
 $cost = (isset($_POST['Cost']))?$sp->real_escape_string(trim($_POST['Cost'])):'';
 $s=rand();
 
 $val= 'R'.+$s.+$id;
 if(isset($_POST['diagno'])){
  //   echo $val."<br /><br />.$test.<br />.$tresult.<br />.$cost<br />".
     $insert = "insert into diagnosis(Tests,T_result,Report_No,Cost,p_unique_no) values('$test', '$tresult', '$val', '$cost', '$id')";
     $insert = $sp->query($insert);        	
     if ($insert){ 
         echo '<div data-alert class="alert-box success radius">';
         echo  '<b>Success !</b> Report successfully recorded';
         echo "Report No:--".$val.'<br />';
         echo  '<a href="#" class="close">&times;</a>';
         echo '</div>';
         header('refresh:2;url=dashboard.php?page=patientreport');
         //header('refresh:2;url=dashboard.php?page=info');
          
 
     }
     else{
         $sp->error;
         echo 'Error';
         echo '<div data-alert class="alert-box success radius">';
         echo  '<b>Something goes wrong</b>';
         echo  '<a href="#" class="close">&times;</a>';
         echo '</div>';
          }
 }
         ?>
   <form  method="post" data-abide >
 	     
     <div class="row">
            <div class="large-4 columns">
         <label for="patient_unique_no">Patient ID <small>required</small>
  		 <select name="p_unique_no" required="">
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
      <div class="large-4 columns">
         <label for="Test">Test For <small>required</small>
   <select name="Tests" required >
   <option value="">...Test For...</option>
   <option value="CT Scan" >
   CT Scan</option>
   <option value="Blood Sugar" >
   Blood Sugar</option>
   <option value="RBC Count" >
   RBC Count</option>
   <option value="Blood Test" >
   Blood Test</option>
   </select>
 		 </label>
 		 <small class="error">You can't leave this empty.</small>
 		
     </div>
     
 	 
 	 </div>
 	 <div class="row">
 		<div class="large-5 columns">
 		<label>Result <small>required</small>
 
 		<input type="text" name="T_result" placeholder="Result" required/>
 		</label>
 		<small class="error">You can't leave this empty.</small>
 		</div>
 		 
  
 		<div class="large-5 columns">
 		<label>Cost <small>Required</small>
 		<input type="text" name="Cost" placeholder="Cost" required/>
 		</label><small class="error">You can't leave this empty.</small>
 		</div>
     </div>
     <div class="row">
 		<div class="large-12 columns">
 		 <button type="submit" name="diagno" class="small button expand success radius">Submit Report</button>
 		</div>
     </div>
   </form>
  </div>
 </div>
  <div class="large-5 columns extra-padding">
 <div class="winbox-white ">
  <h3 class="text-center">Diagnosis charges</h3>
      <div class="row">
	    
		 <table>
  <thead>
    <tr>
      <th width>Test Type</th>
      <th>Charge</th>
       </tr>
  </thead>
  <tbody>
    <tr>
      <td>Blood Test</td>
      <td>Rs 100</td>
       </tr>
    <tr>
      <td>Blood Sugar Test</td>
      <td>Rs 2300</td>
        </tr>
    <tr>
       <td>CT Scan</td>
      <td>Rs 7000</td>
       </tr>
    <tr>
       <td>RBC Count</td>
      <td>Rs 2000</td>
        
       </tr> 
   
    	 
       
       
  </tbody>
</table></div></div></div>