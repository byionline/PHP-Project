<?php
  
/*
 * User Dashboard
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 *  
 */
ob_start(); 
$doc_name=(isset($_POST['doc_name']))?$sp->real_escape_string(trim($_POST['doc_name'])):'';
    $gender=(isset($_POST['gender']))?$sp->real_escape_string(trim($_POST['gender'])):'';
    //Birthday
    $pid = (isset($_POST['p_unique_no']))?$sp->real_escape_string(trim($_POST['p_unique_no'])):'';
    $m1 =(isset($_POST['medicine1']))?$sp->real_escape_string(trim($_POST['medicine1'])):'';
    $m2 = (isset($_POST['medicine2']))?$sp->real_escape_string(trim($_POST['medicine2'])):'';
    $m3 =(isset($_POST['medicine3']))?$sp->real_escape_string(trim($_POST['medicine3'])):'';
    $d1=(isset($_POST['dose1']))?$sp->real_escape_string(trim($_POST['dose1'])):'';
    $d2=(isset($_POST['dose2']))?$sp->real_escape_string(trim($_POST['dose2'])):'';
    $d3=(isset($_POST['dose3']))?$sp->real_escape_string(trim($_POST['dose3'])):'';
    $diagnosis=(isset($_POST['diagnosis']))?$sp->real_escape_string(trim($_POST['diagnosis'])):'';
    $instruction=(isset($_POST['instruction']))?$sp->real_escape_string(trim($_POST['instruction'])):'';
    if(isset($_POST['generateprescription']))
        {
           
          
 $insert="insert into prescription values('$pid','$m1','$diagnosis','$instruction','$doc_name','$m2','$m3', '$gender', '$d1', '$d2', '$d3')";
      
     
    
    if($sp->query($insert)){
      echo '<div data-alert class="alert-box success radius">';
        echo  '<b>Success !</b> Prescription successfully generated';
        //echo "Employee UserName:--".$orderid.'<br />';
        //echo "Employee Password:--".'krajnish.com';
        echo  '<a href="#" class="close">&times;</a>';
      echo '</div>';
     // header('refresh:2;url=employeedashboard.php?page=prescriptionactionprint');
      //header('refresh:2;url=dashboard.php?page=info');
    }
  
      else{
      echo '<div data-alert class="alert-box warning radius">';
        echo  '<b>Error !</b> '.$sp->error;
        echo  '<a href="#" class="close">&times;</a>';
      echo '</div>';
      }
    
    }

    //$pid = $_POST['pid']; 
?>
<div class="large-7 columns extra-padding">
 <div class="winbox-white">
   <h3>Doctor Prescription</h3>
  
   
  <form method="post"  data-abide>
	    
  
	    
    <div class="row">
         <div class="large-12 columns">
        <label for="doctor_selection">Choose a Doctor <small>required</small>
  <select name="doc_name" required/>
  <option value="">---Choose A Doctor Name---</option>
  <option value="RAJNISH KUMAR SINGH" >
  RAJNISH KUMAR SINGH</option>
  <option value="KRISHNA KUMAR" >
  KRISHNA KUMAR</option>
  <option value="PRASHANT KUMAR" >
  PRASHANT KUMAR</option>
  <option value="KARAN THAKUR" >
  KARAN THAKUR</option>
  <option value="AMIT KUMAR" >
  AMIT KUMAR</option>
  <option value="HEMA SINGH" >
  HEMA SINGH</option>
  <option value="MENU JOSHI" >
  MENU JOSHI</option>
  
  </select>
		 </label>
		 <small class="error">You can't leave this empty.</small>
		
    </div> 
        </div>
	 
	
	
<div class="row">
    <div class="large-3 columns">
        <label for="gender">Gender <small>required</small>
  <select name="gender" required="" >
  <option value="">I am...</option>
  <option value="FEMALE" >
  Female</option>
  <option value="MALE" >
  Male</option>
  <option value="OTHER" >
  Other</option>
  </select>
		 </label>
		 <small class="error">You can't leave this empty.</small>
		
    </div>
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
		 
  </div>	
	<div class="row"> 
		  <div class="large-6 columns">
			<label>Medicine<small>Optional</small>
			  <input type="text" name="medicine1" placeholder="Medicine"/>
			</label>
			  
		 
		 </div>
		    <div class="large-3 columns">
        <label for="dose">Dose <small>Optional</small>
  <select name="dose1">
  <option value="">Dose Required</option>
  <option value="One times a day" >
  One times a day</option>
  <option value="Two times a day" >
  Two times a day</option>
  <option value="Three times a day" >
  Three times a day</option>
  <option value="Four times a day" >
  Four times a day</option>
  </select>
		 </label>
		  
    </div>
		 
    </div>
     <div class="row"> 
		  <div class="large-6 columns">
			<label>Medicine<small>Optional</small>
			  <input type="text" name="medicine2" placeholder="Medicine"/>
			</label>
			  
		 
		 </div>
		    <div class="large-3 columns">
        <label for="dose">Dose <small>Optional</small>
  <select name="dose2" >
  <option value="">Dose Required</option>
  <option value="One times a day" >
  One times a day</option>
  <option value="Two times a day" >
  Two times a day</option>
  <option value="Three times a day" >
  Three times a day</option>
  <option value="Four times a day" >
  Four times a day</option>
  </select>
		 </label>
		  
    </div>
		 
    </div>
     <div class="row"> 
		  <div class="large-6 columns">
			<label>Medicine<small>Optional</small>
			  <input type="text" name="medicine3" placeholder="Medicine"/>
			</label>
			  
		 
		 </div>
		    <div class="large-3 columns">
        <label for="dose">Dose <small>Optional</small>
  <select name="dose3" >
  <option value="">Dose Required</option>
  <option value="One times a day" >
  One times a day</option>
  <option value="Two times a day" >
  Two times a day</option>
  <option value="Three times a day" >
  Three times a day</option>
  <option value="Four times a day" >
  Four times a day</option>
  </select>
		 </label>
		  
    </div>
		 
    </div>
     
      <div class="row"> 
		  <div class="large-12 columns">
      <label>Diagnosis<small>Optional</small>
        <textarea placeholder="small-12.columns" name="diagnosis"></textarea>
      </label>
    </div>
		  
    </div>
    <div class="row"> 
		  <div class="large-12 columns">
      <label>Additional Instructions<small>required</small>
        <textarea placeholder="small-12.columns" name="instruction" required></textarea>
      </label>
       <small class="error">You can't leave this empty.</small>
		
    </div>
		  
    </div>
	 	
	  
    <div class="row">
		<div class="large-12 columns">
		  <button type="submit" name="generateprescription" class="button round">Generate Prescription</button>
		 <input name="reset" value="RESET" type="reset" class="button round">
		</div>
    </div>
    
   
  </form>
 </div>
</div>