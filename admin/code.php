<?php
session_start();
include('authentication.php');

include('config/dbconnection.php');
if(isset($_POST['logout_btn']))
{
	//session_destroy();
	unset($_SESSION['auth']);
	unset($_SESSION['auth_user']);

	$_SESSION['status']="Logout Successfully!";
	header('location: login.php');
	exit(0);
}

if(isset($_POST['check_Emailbtn']))
{
	$email=$_POST['email'];

	$checkemail= "SELECT email FROM userinfo_data WHERE email='$email'";
	$checkemail_run= mysqli_query($con,$checkemail);

	if(mysqli_num_rows($checkemail_run)>0)
	{
		echo "This email-id already taken";
		
	}
	else{
		echo "Available";
	}

}

if(isset($_POST['addUser']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$comment=$_POST['comment'];

	$checkemail= "SELECT email FROM userinfo_data WHERE email='$email'";
	$checkemail_run= mysqli_query($con,$checkemail);

	if(mysqli_num_rows($checkemail_run)>0)
	{
		$_SESSION['status']="Email id already exist";
		header("location: register.php");
		exit;
	}
	else
	{
	$user_query="INSERT INTO userinfo_data (username,email,mobile,comment) VALUES('$name','$email','$phone','$comment')";

	$user_query_run= mysqli_query($con,$user_query );
	if($user_query_run)
	{
		$_SESSION['status']="User added successfully";
		header("location: register.php");
	}
	else
	{
		$_SESSION['status']="User registration failed";
		header("location: register.php");
	}
	}

	
}



if(isset($_POST['updateUser']))
{
	$user_id=$_POST['user_id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$comment=$_POST['comment'];

	$query= "UPDATE userinfo_data SET username='$name',email='$email',mobile='$phone',comment='$comment' WHERE id='$user_id'";
	$query_run= mysqli_query($con,$query);
	if($query_run)
	{
		$_SESSION['status']="User Updated Successfully";
		header("location: register.php");
	}
	else
	{
		$_SESSION['status']="User Update Failed";
		header("location: register.php");
	}
}
if(isset($_POST['DeleteUserbtn']))
{
	$userid = $_POST['delete_id'];

	$query = "DELETE FROM userinfo_data WHERE id='$userid'";
	$query_run = mysqli_query($con,$query);

	 if($query_run)
	{
		$_SESSION['status']="User Deleted Successfully";
		header("location: register.php");
	}
	else
	{
		$_SESSION['status']="User Deleting Failed";
		header("location: register.php");
	}
}

?>


