<?php 
	require_once('../database/database.php');

	session_start();
	$id = $_GET['id'];
	$query = "SELECT * FROM foods WHERE id=?";
	$pq = $connection->prepare($query);
	$pq->bind_param('i', $id);
	$pq->execute();
	$result = $pq->get_result()->fetch_object();

	$_SESSION['foodDesc'] = $result;
	$pq->close();
	$connection->close();
	header("location:../foodDesc.php");
	// echo $result->name;
 ?>