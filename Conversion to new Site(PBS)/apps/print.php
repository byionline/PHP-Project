<div class="large-7 columns extra-padding">
<div class="winbox-white">
<h3 class="text-center">Prescription Details</h3>
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
		 <button type="submit" name="print" class="small button expand success radius">Generate Bill</button>
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
if(isset($_POST['print'])){
    echo '<div class="large-12 columns extra-padding">
<div class="winbox-white">
<h3 class="text-center">Prescription Report</h3>
';
    $select ="SELECT   patient.p_unique_no, patient.p_name, patient.p_gender, patient.p_birth,prescription.doc_name,prescription.gender,prescription.medicine1,prescription.dose1,prescription.medicine2,prescription.dose2,prescription.medicine3,prescription.dose3,prescription.diagnosis,prescription.instruction   from  patient inner join prescription where patient.p_unique_no=prescription.p_unique_no and patient.p_unique_no='$b_occupy'";
    $select=$sp->query($select) or die($sp->error);
    $count=$select->num_rows;
    //$row = $query->fetch_assoc() ;
   // echo $count."<br />";
    

    
    if ($count>0){
        //$row = mysqli_fetch_array($query);
        $row =mysqli_fetch_array($select, MYSQLI_ASSOC);
        
         
        $id = $row['p_unique_no'];
        $name = $row['p_name'];
        $birth = $row['p_birth'];
        $gender = $row['p_gender'];
        $dname  = $row['doc_name'];
        $dgeneder = $row['gender'];
        $m1 =$row['medicine1'];
        $d1 = $row['dose1'];
        $m2 = $row['medicine2'];
        $d2 = $row['dose2'];
        $m3 = $row['medicine3'];
        $d3 = $row['dose3'];
        $diag = $row['diagnosis'];
        $ins = $row['instruction'];
        
        $birth = new DateTime("$birth");
        $tod= new DateTime();
        $interv =$tod->diff($birth);
         echo'     <table>
<thead>
        <tr>
        <th scope="column">Prescription Date</th>
        <th scope="column">Patient ID</th>
        <th scope="column">Patient Name</th>
        <th scope="column">Patient Age</th>
        <th scope="column">Patient Gender</th>
             <th scope="column">Doctor Name</th>
            <th scope="column">Gender</th>
            <th scope="column">Medicine 1</th>
            <th scope="column">Dose 1</th>
            <th scope="column">Medicine 2 </th>
            <th scope="column">Dose 2</th>
<th scope="column">Medicine 3 </th>
            <th scope="column">Dose 3</th>
        <th scope="column">Diagnosis </th>
            <th scope="column">Additional Instruction</th>
        
        </tr>
        </thead>
        <tbody>
        <tr>
        
        <td>'.date("Y-m-d").'</td>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$interv->format('%y years').'</td>
        <td>'.$gender.'</td>
        <td>'.$dname.'</td>
        <td>'.$dgeneder.'</td>
        <td>'.$m1.'</td>
        <td>'.$d1.'</td>
        <td>'.$m2.'</td>
        <td>'.$d2.'</td>
        <td>'.$m3.'</td>
        <td>'.$d3.'</td>
         <td>'.$diag.'</td>
          <td>'.$ins.'</td>
                  </tr>
            </tbody></table>
        
        
        
     ';
         
        
         
         
        
        
    }
         
}
 

   	      
 ?>
