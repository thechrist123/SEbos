<?php 
	require_once('../database/database.php');

	session_start();
	$name = $_POST['name'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	if($password !== $confirmpassword){
		$_SESSION['error'] = 'Password not matched';
		header('location:../login_register/register.php');
		return;
	}

	$query = "INSERT INTO users(Name, Email, Password, PhoneNumber) VALUES (?,?,?,?)";
	$pq = $connection->prepare($query);
	$pq->bind_param("ssss", $name, $email, md5($confirmpassword), $phone);
	$pq->execute();

	$pq->close();
	$connection->close();

	header('location:../login_register/login.php');
 ?>