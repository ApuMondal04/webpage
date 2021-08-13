<?php
session_start();

include('config/dbconnection.php');

if(isset($_POST['check_Emailbtn']))
{
	$email=$_POST['email'];

	$checkemail= "SELECT email FROM admin_login WHERE email='$email'";
	$checkemail_run= mysqli_query($con,$checkemail);

	if(mysqli_num_rows($checkemail_run)>0)
	{
		echo "This email-id already taken";
	}
	else{
		echo "Available";
	}

}

if(isset($_POST['addAdmin']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];

	$checkemail= "SELECT email FROM admin_login WHERE email='$email'";
	$checkemail_run= mysqli_query($con,$checkemail);

	if ($password == $confirmpassword) 
	{
		
	$user_query="INSERT INTO admin_login (name,email,mobile,password) VALUES('$name','$email','$mobile','$confirmpassword')";

	$user_query_run= mysqli_query($con,$user_query );
	if($user_query_run)
		{
		$_SESSION['status']="Admin added successfully";
		header("location: adminprofile.php");
		}
	else
		{
		$_SESSION['status']="Admin registration failed";
		header("location: adminprofile.php");
		}
	}
	else
	{
		$_SESSION['status']='<script>alert("Password & Confirm Password Does Not Match!")</script>';
		header("location: adminprofile.php");
	}

	
}



if(isset($_POST['updateUser']))
{
	$user_id=$_POST['user_id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];
	$confirmpassword=$_POST['confirmpassword'];

	$query= "UPDATE admin_login SET name='$name',email='$email',mobile='$mobile',password='$password' WHERE id='$user_id'";
	$query_run= mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['status']="User Updated Successfully";
		header("location: adminprofile.php");
	}
	else
	{
		$_SESSION['status']="User Update Failed";
		header("location: adminprofile.php");
	}
}
if(isset($_POST['DeleteUserbtn']))
{
	$userid = $_POST['delete_id'];

	$query = "DELETE FROM admin_login WHERE id='$userid'";
	$query_run = mysqli_query($con,$query);

	 if($query_run)
	{
		$_SESSION['status']="Admin Deleted Successfully";
		header("location: adminprofile.php");
	}
	else
	{
		$_SESSION['status']="Admin Deleting Failed";
		header("location: adminprofile.php");
	}
}

?>


