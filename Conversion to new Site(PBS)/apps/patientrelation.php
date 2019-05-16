<?php include('patientrel.php') ?> 
<div class="large-7 columns extra-padding">
 <div class="winbox-white">
  <h3 class="text-center">Patient Accompanies Entry Form</h3>
  
  <form  action="" method="post" data-abide>
    <div class="row">
    <div class="large-3 columns">
        <label for="patient_unique_no">Patient ID <small>required</small>
 		 <select name="p_unique_no" required="" >
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
         <div class="large-12 columns">
			<label>Full Name Of Relative <small>required</small>
			  <input type="text" name="Name" placeholder="Full Name of Relative" required/>
			</label>
			<small class="error">You can't leave this empty.</small>
		 </div>
	</div>
	
	
	
<div class="row">
    <div class="large-3 columns">
        <label for="gender">Gender <small>required</small>
  <select name="Gender" required="" >
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
     <div class="large-6 columns">
       	 			<label>Relation With Patient <small>Required</small>
			  <input type="text" name="Relationship" placeholder="Relation With Patient" required />
			</label>
			 <small class="error">You can't leave this empty.</small>
		
  </div></div>	
	<div class="row"> 
		 <div class="large-6 columns">
		 <div class="email">
		 			<label>Address <small>required</small>
			  <input type="text" name="Address" placeholder="Address" required />
			</label>
			 <small class="error">You can't leave this empty.</small>
		</div>

		 
		 </div>
		 <div class="large-6 columns">
			<label>Contact <small>required</small>
			  <input type="text" name="Contact"  placeholder="Contact" required/>
			</label>
			 <small class="error">You can't leave this empty.</small>
		
		 
		 </div>
    </div>
        <!--  <div class="row">
         <div class="large-12 columns">
        <label for="facility_selection">Choose a Facility Type <small>required</small>
  <select name="facility_type" required>
  <option value="">---Choose a Facility Type---</option>
  <option value="Single bed, attached bath, AC" >
  Single bed, attached bath, AC</option>
  <option value="Single bed, attached bath" >
  Single bed, attached bath</option>
  <option value="Double bed, attached bath, AC" >
  Double bed, attached bath, AC</option>
  <option value="Double bed, attached bath" >
  Double bed, attached bath</option>
   
  </select>
		 </label>
		 <small class="error">You can't leave this empty.</small>
		
    </div> 
        </div>
        
         <div class="row">
         <div class="large-12 columns">
        <label for="availibility">Available Ward List <small>required</small>
  <select name="facility_type" required>
  <option value="">---Choose a Ward No---</option>
  <option value="" >
  Single bed, attached bath, AC</option>
  <option value="Single bed, attached bath" >
  Single bed, attached bath</option>
  <option value="Double bed, attached bath, AC" >
  Double bed, attached bath, AC</option>
  <option value="Double bed, attached bath" >
  Double bed, attached bath</option>
   
  </select>
		 </label>
		 <small class="error">You can't leave this empty.</small>
		
    </div> 
        </div>

	 <div class="row">
    <div class="large-6 columns">
      <label>Choose Food Facility <small>required</small><br />
      <input type="radio" name="food" value="No" id="pokemonRed" required><label for="pokemonRed">No</label>
      <input type="radio" name="food" value="Yes" id="pokemonBlue" required><label for="pokemonBlue">Yes</label>
     </label>
    </div>
    
    <small class="error">You can't leave this empty.</small>
		
   
    
     </div>
    -->
    <div class="row">
		<div class="large-12 columns">
		 <button type="submit" name="register" class="small button expand success radius">Register</button>
		</div>
    </div>
    
  
  </form>
 </div>
</div>
