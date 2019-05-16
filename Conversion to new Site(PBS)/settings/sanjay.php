<?php



class Rajnish{


	public function hashPass($name){
	$this->name=$name;
	$pass=md5($this->name);
	$pass=hash('sha256',$pass);
	$pass='rajnish'.$pass;

	return $pass;
	}	
	




}

$rajnish=new Rajnish();
?>
