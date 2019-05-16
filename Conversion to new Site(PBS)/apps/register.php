 <div class="large-7 columns extra-padding">
 <div class="winbox-white">
  
   <h3 class="text-center">Employee Registration Form</h3>
  
  <?php
  /*
 * Profile info
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 * http://krajnish.com/
 *  
 */
   include('info.php') ?> 
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
			 <small class="error">Require a Valid E-mail.</small>
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
     
    <div class="row">
		<div class="large-12 columns">
		 <button type="submit" name="register" class="small button expand success radius">Register</button>
		</div>
    </div>
    
  <!--</form> -->     
 
  
 <!--
 <div class="large-5 columns extra-padding">
 <div class="winbox-white ">  -->
  </form>
 </div>
</div>