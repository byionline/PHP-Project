<?php

//You can also use $stamp = strtotime ("now"); But I think date("Ymdhis") is easier to understand.
$stamp = date("his");
$orderid = str_replace(".", "", "$stamp");
echo($orderid);
 

?>