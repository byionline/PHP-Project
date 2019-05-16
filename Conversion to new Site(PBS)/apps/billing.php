 <div class="large-7 columns extra-padding">
<div class="winbox-white">
<h3 class="text-center">Billing Information</h3>
  <form  method="post" data-abide>
  	<div class="row">
  		       <div class="large-3 columns">
        <label for="patient_unique_no">Patient ID <small>required</small>
 		 <select name="p_unique_no"  required >
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
		<div class="large-12 columns">
		 <button type="submit" name="geberate" class="small button expand success radius">Generate Bill</button>
		</div>
    </div>
    
   
 </form>
 </div>
</div>
		








<?php 

/*Billing File
* by Rajnish Kumar Singh
* rksjnk@gmail.com
* krajnish.com
*/

$b_occupy=(isset($_POST['p_unique_no']))?$sp->real_escape_string(trim($_POST['p_unique_no'])):'';
echo  "<br />";
if(isset($_POST['geberate'])){
    echo '<div class="large-12 columns extra-padding">
<div class="winbox-white">
<h3 class="text-center">Bill Report</h3>
            
';
    $d = date('Y-m-d H:i:s');
    $selectre = "Select * From room_given where p_unique_no='$b_occupy' and Discharge_date is null";
    $selectre=$sp->query($selectre) or die($sp->error);
    $count1=$selectre->num_rows;
    if($count1>0)
    {
      $update = "update room_given set  Discharge_date='$d' WHERE  `p_unique_no` = '$b_occupy'";
        $update =$sp->query($update) or die($sp->error);
    }
   
    $query =  "SELECT   patient.p_unique_no, patient.p_name, patient.p_gender, patient.p_birth, patient.p_ondate, diagnosis.Test_date, diagnosis.Tests, diagnosis.T_result, diagnosis.Report_No, diagnosis.Cost, room_given.Allot_date, room_given.Room_No,room_given.Discharge_date,room.Type,room.Rent  from  patient inner join diagnosis inner join room_given inner join room  where patient.p_unique_no=diagnosis.p_unique_no and patient.p_unique_no=room_given.p_unique_no and patient.p_unique_no=room.p_unique_no and patient.p_unique_no='$b_occupy'";

    $query=$sp->query($query) or die($sp->error);
    $count=$query->num_rows;
    //$row = $query->fetch_assoc() ;
    //echo $count."<br />";
    

    
    if ($count>0){
        //$row = mysqli_fetch_array($query);
        $row =mysqli_fetch_array($query, MYSQLI_ASSOC);
        $report = $row['Report_No'];
        $admit = $row['p_ondate'];
        $id = $row['p_unique_no'];
        $name = $row['p_name'];
        $birth = $row['p_birth'];
        $gender = $row['p_gender'];
        $roomno = $row['Room_No'];
        $roomtype = $row['Type'];
        $rent = $row['Rent'];
        $allot = $row['Allot_date'];
        $dis = $row['Discharge_date'];
        $testdate = $row['Test_date'];
        $test = $row['Tests'];
        $tresult = $row['T_result'];
        $tcost = $row['Cost'];
        $birth = new DateTime("$birth");
        $tod= new DateTime();
        $interv =$tod->diff($birth);
        $birthday = new DateTime("$allot");
        $today= new DateTime();
        $interval =$birthday->diff($today);
        // echo "{$interval->format('%d days')}";   //gives days subtract only from day
        // echo $interval->format('%R%a days')."<br />";  //gives days from years and month and days adding all together i.e all date difference in days
        $total =0;
        $days =$interval->format('%R%a');  // echo "Days are".$days    ;
        if($days==0){
            $days=1;
            $to=($rent*$days);//echo "Rent". $to."<br />";
        }
        else {
            $to=($rent*$days);//echo "Rent".$to."<br />";
        }
         
        //  echo '$report<br /> $admit<br /> $id <br /> $name <br /> $birth <br /> $gender <br /> $roomno<br />$roomtype<br />$rent<br />$allot<br />$test<br />$testdate<br />$tresult<br />$tcost.<br />
        echo'     <table>
<thead>
        <tr>
        <th scope="column">Report No</th>
        <th scope="column">Report Date</th>
        <th scope="column">Patient ID</th>
        <th scope="column">Patient Name</th>
        <th scope="column">Patient Age</th>
        <th scope="column">Patient Gender</th>
        <th scope="column">Admit Date</th>
            <th scope="column">Room Alloted Date</th>
            <th scope="column">Room No</th>
            <th scope="column">Room Type</th>
            <th scope="column">Room Charge per Day</th>
            <th scope="column">Discharge Date </th>
            <th scope="column">Charge For Room</th>
                             </tr>
        </thead>
        <tbody>
        <tr>
        <td>'.$report.'</td>
        <td>'.date("Y-m-d").'</td>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$interv->format('%y years').'</td>
        <td>'.$gender.'</td>
        <td>'.$admit.'</td>
        <td>'.$allot.'</td>
        <td>'.$roomno.'</td>
        <td>'.$roomtype.'</td>
        <td>'.$rent.'</td>
        <td>'.$dis.'</td>
        <td>'.$to.'</td>
           </tr>
            </tbody></table>
        
        
        
        
            <table>
<thead>
        <tr>
        <th scope="column">Test Date</th>
        <th scope="column">Test Name</th>
        <th scope="column">Test Result</th>
        <th scope="column">Test Charge</th>
                              </tr>
        </thead>
        <tbody>
        <tr>
        <td>'.$testdate.'</td>
        <td>'.$test.'</td>
        <td>'.$tresult.'</td>
        <td>'.$tcost.'</td>
         </tr>';
        while ($row4 =mysqli_fetch_array($query, MYSQLI_ASSOC)):
        echo'   <tr>
                 <td>'.$row4['Test_date'].'</td>
                 <td>'.$row4['Tests'].'</td>
                 <td>'.$row4['T_result'].'</td>
                 <td>'.$row4['Cost'].'</td>
                 </tr>';
        $total=$total+$row4['Cost'];
        endwhile;
        echo'<tr><td>Total Payment To Be Paid:---</td>
            <td>'.$total=$total+$tcost+$to.'</td></tr>
            </tbody></table>
       ';
         $payment=$total;
        //$payment =$sp->real_escape_string(trim($total))''; 
         $selectre = "Select * From medical_report where Report_No='$report'";
         $selectre=$sp->query($selectre) or die($sp->error);
         $count1=$selectre->num_rows;
         if($count1==0)
         {    
             echo $report."<br />$allot<br />$d<br />$roomno<br />$payment<br />$id<br />";
             $insert = "insert into medical_report(Report_No, R_date, C_date, Room_No,Payment, p_unique_no) values('$report', '$allot', '$d', '$roomno','$payment', '$b_occupy')";
             $insert = $sp->query($insert) or die(($sp->error));
             if($insert){
                 echo '<div data-alert class="alert-box success radius">';
                 echo  '<b>Success !</b>Generated successfully';
                 echo '</div>';
             }
             else {
                 echo '<div data-alert class="alert-box warning radius">';
                 echo  '<b>Error !</b> '.$sp->errno;
                 echo  'Something Goes Wrong!';
                 
                 echo  '<a href="#" class="close">&times;</a>';
                 echo '</div>';
             }
         }
         
         
         
         // $al = new DateTime("$allot"); echo $al;  //Catchable fatal error: Object of class DateTime could not be converted to string in D:\MyWebPage\XAMP\htdocs\rajnish\index.php on line 50
        // $interval1 = $al->diff($today);
        // $days= $interval1->format('%R%a days')."<br />";
        // $s= $row['p_birth'];
        /*
         while ($row4 =mysqli_fetch_array($query, MYSQLI_ASSOC)):
          
         $total=$total+$row4['Cost'];
         endwhile;
          
         //echo "<br />".$total."<br />";
          
         $total=$total+$to+$tcost;
         echo "<br />".$total."<br />";
        
        
         */
        
        
        
    }
         
}
 

   	      
 ?>