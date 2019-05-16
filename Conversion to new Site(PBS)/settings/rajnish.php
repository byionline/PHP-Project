<?php
/*
 * Hashing of User Credentials
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 * http://krajnish.com/ 
 */


class Rajnish{


	public function hashPass($name){
	$this->name=$name;
	$pass=md5($this->name);
	$pass=hash('sha256',$pass);
	$pass='krajnish'.$pass;

	return $pass;
	}	
	




}

$rajnish=new Rajnish();
?>
