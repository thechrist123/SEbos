<?php 
	require_once('../database/database.php');

	session_start();
	$keyword = "%".$_POST['keyword']."%";
	$query = "SELECT * FROM foods WHERE name LIKE ?";
	$pq = $connection->prepare($query);
	$pq->bind_param('s', $keyword);
	$pq->execute();
	$result = $pq->get_result();

	$foods = [];
	if($result->num_rows > 0){
		while ($row = $result->fetch_object()) {
				$foods []= $row;
		}
	}

	$_SESSION['foods'] = $foods;
	$pq->close();
	$connection->close();
	// echo $foods[0]->name;
	header("location:../menu.php");
 ?>