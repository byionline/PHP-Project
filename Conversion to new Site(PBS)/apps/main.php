			<?php
			/*
 * Main File containig infomation
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 * krajnish.com  
 */
			
			
			  $day=date("dS");
			  $dd=date("l");
			  $mm=date("F");
			  $yy=date("Y");
			?>


 <div class="large-4 columns extra-padding">		 
		<div class="winbox-blue text-center">
			<h4 class="text-right" style="color:#fff"><i class="fi fi-calendar"></i> <?php echo $dd;?></h4>
			<span style="font-size:6em;font-family:'sans serif',arial;"><?php echo $day;?>
			</span>
			<br/>
			<span style="font-size:2em;font-family:'sans serif',arial;"><?php echo $mm ." ".$yy ;?></span>
			   
		</div>
	  </div>
	  
	  <div class="large-4 columns extra-padding">		 
		<div class="winbox-green text-center">
	
			<h4 class="text-right" style="color:#fff"><i class="fi fi-info"></i> Beta Version 1.0</h4>
			<p>
			Created by RAJNISH KUMAR SINGH(11207403)<br />
			rksjnk@gmail.com<br /> 
			krajnish.com<br /> &copy; <?php echo date("Y")?>			</p>
			   
		</div>
	  </div>
	  
	  <div class="large-4 columns extra-padding">		 
		<div class="winbox-voilet text-center">
			
			<h4 class="text-right" style="color:#fff"><i class="fi fi-unlock"></i> License</h4>
			<p>
			This application is licensed under MIT.
			</p>
			   
		</div>
	  </div>


