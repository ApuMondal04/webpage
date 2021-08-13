<?php 
session_start();
include('config/dbconnection.php');

if(isset($_POST['login_btn']))
{
	$email= $_POST['email'];
	$password= $_POST['password'];

	$log_query="SELECT * FROM admin_login WHERE email='$email' AND password='$password' LIMIT 1"; 
	$log_query_run=mysqli_query($con, $log_query);

	if(mysqli_num_rows($log_query_run) > 0)
	{
		foreach ($log_query_run as $row) 
		{
			$user_id = $row['id'];
			$user_name = $row['name'];
			$user_email = $row['email'];
			$user_mobile = $row['mobile'];
		}
		$_SESSION['auth'] = true;
		$_SESSION['auth_user'] =[
			'user_id'=>$user_id,
			'user_name'=>$user_name,
			'user_email'=>$user_email,
			'user_mobile'=>$user_mobile
		];

		$_SESSION['status']="Login Successfully";
		header('location: index.php');
	}
	else
	{
	$_SESSION['status']="invalid email or password!";
	header('location: login.php');
	}

}
else
	{
	$_SESSION['status']="Access Denied";
	header('location: login.php');
	}


?> 