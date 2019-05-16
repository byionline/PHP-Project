<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<script type='text/javascript' src='jquery.js'></script>
<script type='text/javascript'>//<![CDATA[ 
$(function(){
$(".dropdown").hide();

$("#firstDropdown").on("change", function() {
    $(".dropdown").hide();
    var value = $("#firstDropdown").val();
    $("#dropdown" + value).show();
});
});//]]>  

</script>
</head>
<body>
<div class="large-7 columns extra-padding">
 <div class="winbox-white">
  <h3>Entry For Room Details</h3>
  
  <?php 
  include('wardaction.php');?> 
  <form action="" method="post" data-abide>
  	 
  		<select id="firstDropdown" name="Type" required="">
    	<option value="">Type</option>
    	<option value="1">General</option>
    	<option value="2">Private</option>
    	<option value="3">ICU</option>
		</select>
		 
		 
  		<select id="dropdown1" class="dropdown" name="Rent">
    	<option>150</option>
		</select>
		<select id="dropdown2" class="dropdown" name="Rent">
    	<option>1500</option>
		</select>
		<select id="dropdown3" class="dropdown" name="Rent">
    	<option>2500</option>
		</select>
		 
    <div class="row">
    	  <div class="large-6 columns">
			<label>Per Bed Charges<small>required</small>
			  <input type="text" name="wbed_charge" placeholder="Per Bed Charges" required />
			</label>
			 <small class="error">You can't leave this empty.</small>
		
		 
		 </div>
		 <div class="large-6 columns">
			<label>Per Person Diet Charge<small>required</small>
			  <input type="text" name="w_diet_charge"  placeholder="Per Person Diet Charge" required/>
			</label>
			 <small class="error">You can't leave this empty.</small>
		
		 
		 </div>

	</div>
	 <div class="row">
         <div class="large-12 columns">
			<label>Entry Fee <small>required</small>
			  <input type="text" name="w_advance" placeholder="Entry Fee" required/>
			</label>
			<small class="error">You can't leave this empty.</small>
		 </div>
	</div>
     
    <div class="row">
		<div class="large-12 columns">
		 <button type="submit" name="wardrecord" class="small button expand success radius">Record Entry</button>
		</div>
    </div>
    
   
 </form>
 </div>
</div>
</body>
</html>