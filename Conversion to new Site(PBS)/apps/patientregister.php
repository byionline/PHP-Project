 <div class="large-7 columns extra-padding">
 <div class="winbox-white">
  <h3 class="text-center">Patient Entry Form</h3>
  
  <?php
  /*
 * Profile info
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 * http://krajnish.com/
 *  
 */
   include('infopatient.php') ?> 
  <form action="" method="post" data-abide enctype="multipart/form-data">
	<h3 class="text-right">Profile Picture</h3>
      <div class="row">
	    			     
		<div class="large-3 columns">
		<img src="img/default.jpg" width="64" height="64" alt="Employee Image"/>
		</div> 
		
		<div class="large-9 columns">
		      <div class="large-12 columns">
			<span style="color:red;">Maximun Image Size 100KB</span><br/><br/>
			<label>Profile <small>required</small>
			<input type="file" name="myfile"  required/></label>
			<small class="error">You can't leave this empty.</small>
		
			</div> 
		 
		     
		</div>
      </div>
  
	    
    <div class="row">
         <div class="large-12 columns">
			<label>Full Name <small>required</small>
			  <input type="text" name="name" placeholder="Full Name" required/>
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
     <div class="large-3 columns">
      <label for="birthday">Birthday(Year) <small>required</small>
 
				  	 		 <select name="yearOfBirth" required>
  <option value="">---Select year---</option>
  <?php for ($i = 1950; $i < date('Y'); $i++) : ?>
  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
</select> 
</label> <small class="error">You can't leave this empty.</small>
		
 </div>
  <div class="large-3 columns">
      <label for="birthday">Birthday(Month)<small>required</small>

	 <select name="monthOfBirth" required>
  <option value="">---Select month---</option>
  <?php for ($i = 1; $i <= 12; $i++) : ?>
  <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
</select> </label><small class="error">You can't leave this empty.</small>
		
 </div>
 
  <div class="large-3 columns">
      <label for="birthday">Birthday(Day)<small>required</small>
 
	  <select name="dateOfBirth" required>
  <option value="">---Select date---</option>
  <?php for ($i = 1; $i <= 31; $i++) : ?>
  <option value="<?php echo ($i < 10) ? '0'.$i : $i; ?>"><?php echo $i; ?></option>
  <?php endfor; ?>
</select> </label><small class="error">You can't leave this empty.</small>
		
 </div>
   
     
  </div>	
	<div class="row"> 
		 <div class="large-6 columns">
		 <div class="email">
		 			<label>Email <small>required</small>
			  <input type="email" name="email" placeholder="Email" required />
			</label>
			 <small class="error">You can't leave this empty.</small>
		</div>

		 
		 </div>
		 <div class="large-6 columns">
			<label>Phone <small>required</small>
			  <input type="text" name="phone"  placeholder="Phone" required/>
			</label>
			 <small class="error">You can't leave this empty.</small>
		
		 
		 </div>
    </div>
      <div class="row"> 
		 <div class="large-6 columns">
			<label>Address <small>required</small>
			  <input type="text" name="address"  placeholder="Address" required />
			</label>
			 <small class="error">You can't leave this empty.</small>
		 
		 </div>
		 <div class="large-6 columns">
			<label>City <small>required</small>
			  <input type="text" name="city"  placeholder="City" required/>
			</label>
			 <small class="error">You can't leave this empty.</small>
		
		 
		 </div>
    </div>
	 	
	<div class="row"> 
		 <div class="large-6 columns">
			<label>State <small>required</small>
			  <input type="text" name="state"  placeholder="State" required/>
			</label>
			 <small class="error">You can't leave this empty.</small>
		
		 </div>
		 <div class="large-6 columns">
			<label>Country <small>required</small>
			  <input type="text" name="country"  placeholder="Country" required/>
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
<!--/*<?php
$select="SELECT w_facilities, wbed_charge FROM ward WHERE w_id='101'";
$retval = $sp->query($select);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
$row =mysqli_fetch_array($retval, MYSQLI_ASSOC);	
$lect="SELECT w_facilities, wbed_charge FROM ward WHERE w_id='319'";
$tval = $sp->query($lect);
if(! $tval )
{
  die('Could not get data: ' . mysql_error());
}
$w =mysqli_fetch_array($tval, MYSQLI_ASSOC);	
$elect="SELECT w_facilities, wbed_charge FROM ward WHERE w_id='31'";
$etval = $sp->query($elect);
if(! $etval )
{
  die('Could not get data: ' . mysql_error());
}
$ow =mysqli_fetch_array($etval, MYSQLI_ASSOC);	
$ct="SELECT w_facilities, wbed_charge, w_diet_charge FROM ward WHERE w_id='323'";
$al = $sp->query($ct);
if(! $al )
{
  die('Could not get data: ' . mysql_error());
}
$wo =mysqli_fetch_array($al, MYSQLI_ASSOC);	

?>
<div class="large-5 columns extra-padding">
 <div class="winbox-white ">
  <h3 class="text-center">Service Costing</h3>
      <div class="row">
	    
		 <table>
  <thead>
    <tr>
      <th width="300">Room Type</th>
      <th>Room Cost</th>
       </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo "{$row['w_facilities']}"?></td>
      <td> <?php echo "{$row['wbed_charge']}"?></td>
       </tr>
    <tr>
      <td><?php echo "{$ow['w_facilities']}"?></td>
      <td><?php echo "{$ow['wbed_charge']}"?></td>
        </tr>
    <tr>
       <td><?php echo "{$w['w_facilities']}"?></td>
      <td><?php echo 2*"{$w['wbed_charge']}"?></td>
       </tr>
    <tr>
       <td><?php echo "{$wo['w_facilities']}"?></td>
      <td><?php echo 2*"{$wo['wbed_charge']}"?></td>
        
       </tr> 
    <tr>
    	<td>Food</td>
        <td><?php echo "{$wo['w_diet_charge']}"?></td>
       
       </tr>      
  </tbody>
</table>

		
		<div class="large-9 columns">
		    
		    		</div>
      </div>
 </div>
 </div>
 */
-->

  
