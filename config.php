<?php
/* $con= new mysqli('localhost','root','','shopping');
if(!$con){
	
	die("Bad Request...Connection not possible".mysql_error());
	
}
else {
    echo "<h2><i>CONNECTION SUCCESSFULL...!!</i2></h2><br>";	
}
 */
$conn = new mysqli('localhost','root','','shopping');
if(!$conn){
	
	die("Bad Request...Connection not possible".mysql_error());
	
}
else {
    //echo "<h4><i>CONNECTION SUCCESSFULL...!!</i2></h4><br>";	
}


?>