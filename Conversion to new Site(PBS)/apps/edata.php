<div class="row">
<h3 class="text-center">Employee Details</h3>
<table>
<thead>
<tr>
<th>Employee ID</th>
<th>Name</th>
<th>Age</th>
<th>Gender</th>
<th>E-mail</th>
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
/*Display Employee Data
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 * krajnish.com
 */

$sql = 'SELECT * from employee';
$retval = $sp->query( $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysqli_fetch_array($retval,MYSQL_ASSOC)):
	  $s= $row['u_birth'];
    $birthday = new DateTime("$s");
$today= new DateTime();
$interval =$today->diff($birthday);
?>

<td><?php echo "{$row['u_user']} "; ?></td>
<td><?php echo "{$row['u_name']}"; ?></td>
<td><?php echo "{$interval->format('%y years')}"; ?></td>
<td><?php echo "{$row['u_gender']}"; ?></td>
<td><?php echo " {$row['u_mail']} "; ?></td>
<td><?php echo " {$row['u_phone']}"; ?></td>
<td><?php echo "{$row['u_address']}"; ?></td>
<td><?php echo "{$row['u_city']}"; ?></td>
<td><?php echo "{$row['u_state']}"; ?></td>
<td><?php echo "{$row['u_country']}"; ?></td>
</tr>
<?php endwhile;?> </tbody>
</table>

		       </div>