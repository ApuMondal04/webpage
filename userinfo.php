<?php

$con = mysqli_connect('localhost','root',);

/*if($con)
{
	echo "Connection ok!";
}
else echo "Not connected";*/

mysqli_select_db($con,'mywebdata');
$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query="insert into userinfo_data (username,email,mobile,comment) Values('$user','$email','$mobile','$comment')";

mysqli_query($con,$query);
header('location:index.php');



?>