<?php

$host="localhost";
$username="root";
$password="";
$database="mywebdata";

$con= mysqli_connect($host,$username,$password,$database);
// connection check
if($con)
{
//echo "database connected";	
}
else {
	die(mysqli_connect_error($con));
}


?>