<!-- <div class="row"> -->
<h3 class="text-center">Patient Details</h3>
<table>
<thead>
<tr>
<th>Patient ID</th>
<th>Entry Date Time</th>
<th>Patient Name</th>
<th>Accompanies Name</th>
<th>Relation With Patient</th>
<th>Gender</th>
<th>Age</th>
<th>Contact</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Country</th>
</tr>
</thead>
<tbody>
<tr>

<?php
$sql = 'SELECT * from patient,accompanies where patient.p_unique_no=accompanies.p_unique_no';
$retval = $sp->query( $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval,MYSQL_ASSOC)):
	$s= $row['p_birth'];
    $birthday = new DateTime("$s");
$today= new DateTime();
$interval =$today->diff($birthday);
?>

<td><?php echo "{$row['p_unique_no']}"; ?></td>
<td><?php echo "{$row['p_ondate']}"; ?></td>
<td><?php echo "{$row['p_name']}"; ?></td>
<td><?php echo "{$row['Name']}"; ?></td>
<td><?php echo "{$row['Relationship']}"; ?></td>
<td><?php echo "{$row['p_gender']}"; ?></td>
<td><?php echo "{$interval->format('%y years')}"; ?></td>
<td><?php echo "{$row['p_phone']}"; ?></td>
<td><?php echo "{$row['p_address']}"; ?></td>
<td><?php echo "{$row['p_city']}"; ?></td>
<td><?php echo "{$row['p_state']}"; ?></td>
<td><?php echo "{$row['p_country']}"; ?></td>
</tr>
<?php endwhile;?> </tbody>
</table>

		     <!--  </div> --> 