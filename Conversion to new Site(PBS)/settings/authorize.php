<?php
/*
 * Authorization Check
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 *  
 */

if(!isset($_SESSION['userlogged'])){
 header('Location:index.php');
		die();
}
?>
 