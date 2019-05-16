<div class="large-7 columns extra-padding">
 <div class="winbox-white">
  
<?php 
include('prescriptionaction.php');
?>
<h3>Service To The Patient</h3>
  
   
  <form method="post" action="?page=prescriptionactionprint" data-abide> <!--data-abide for removing the red error on page load-->
	    
  
	    
    <div class="row">
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
    <div class="large-6 columns">
      <label>Choose Food Facility</label>
      <input type="radio" name="food" value="No" id="pokemonRed"><label for="pokemonRed">No</label>
      <input type="radio" name="food" value="Yes" id="pokemonBlue"><label for="pokemonBlue">Yes</label>
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