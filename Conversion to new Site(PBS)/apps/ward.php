<?php
$t=(isset($_POST['Type']))?$sp->real_escape_string(trim($_POST['Type'])):'';
$r=(isset($_POST['Rent']))?$sp->real_escape_string(trim($_POST['Rent'])):'';
$rn=(isset($_POST['Room_No']))?$sp->real_escape_string(trim($_POST['Room_No'])):'';
//$room="Z".(substr('Room',1)+1);
if(isset($_POST['ADDROOM'])){
    // echo $r,$rn,$t;
    $query =  "insert into room(Type,Rent,Room_No) values ('$t', '$r', '$rn')";
    $query=$sp->query($query) or die($sp->error);
    if($query){    
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
}
?>
<head>
  
  <!-- <script src="js/jquery.min.js"></script>
   -->
  
   
  <!--<link rel="stylesheet" type="text/css" href="/css/normalize.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    
  
   


<script type='text/javascript'> 
$(function(){
$(".dropdown").hide();

$("#firstDropdown").on("change", function() {
    $(".dropdown").hide();
    var value = $("#firstDropdown").val();
    $("#dropdown" + value).show();
});
}); 

</script>  -->
</head>

 

<div class="large-7 columns extra-padding">
 <div class="winbox-white">
 
  <h3 class="text-center">Add Room</h3>
  
  <form method="post" data-abide>
    <div class="row">
    <div class ="large-4 columns">
    <label for="room">Room No <small>Required</small>
    <input type="text" name="Room_No" placeholder="Room_No" required/>
    </label>
    <small class="error">You can't leave this empty.</small>
		
    </div>      
	
    <div class="large-4 columns">
    <label for="rent">Room Type<small>required</small>
 
         <select id="firstDropdown" name="Type" required="">
    <option value="">Type</option>
    <option value="General">General</option>
    <option value="Private">Private</option>
    <option value="ICU">ICU</option>
</select></label>
 		<small class="error">You can't leave this empty.</small>
		
    </div>
    
    <!--  this is not working offline so remove it 
    
     <div class="large-3 columns">
           <label for="rent">&nbsp; </label>
          	<select id="dropdown1" class="dropdown" name="Rent">
    <option value="150">150</option>
    
</select>
<select id="dropdown2" class="dropdown" name="Rent">
    <option value="1500">1500</option>
</select>
<select id="dropdown3" class="dropdown" name="Rent">
    <option value="5000">5000</option>
</select>
          </div>
        -->
     <div class ="large-4 columns">
    <label for="rent">Rent <small>Required</small>
    <input type="text" name="Rent" placeholder="Rent" required/>
    </label>
    <small class="error">You can't leave this empty.</small>
		
    </div>      
	
         	
	</div>
	
	
	
 	 
        <div class="row">
		<div class="large-12 columns">
		 <button type="submit" name="ADDROOM" class="small button expand success radius">Add Room</button>
		</div>
    </div>
    
  
  </form>
 </div>
</div>


