<?php 
	require_once('../database/database.php');


	$email = $_REQUEST['email'];
	$password = $_REQUEST['password'];

	$query = "SELECT * FROM users WHERE Email=? AND Password=?";
	$pq = $connection->prepare($query);
	$pq->bind_param('ss', $email, md5($password));
	$pq->execute();
	$result = $pq->get_result();

	$pq->close();
	$connection->close();
	
	session_start();
	if($result->num_rows > 0){
		
		$user = $result->fetch_object();
		$_SESSION['user'] = $user;

		header("location:../home.php");
	}else{
		$_SESSION['loginerror'] = 'incorrect username/password';
		header("location:../login_register/login.php");
	}
 ?>