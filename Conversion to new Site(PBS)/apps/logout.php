<?php
/*
 * Logout file
 * by Rajnish Kumar Singh
 * rksjnk@gmail.com
 *  
 */
$_SESSION = array();
session_get_cookie_params();
setcookie(session_name(),time()-3*24*60*60);
session_destroy();


header('Location:index.php');
?>
