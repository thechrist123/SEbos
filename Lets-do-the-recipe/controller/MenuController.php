<?php 
	require_once('../database/database.php');

	session_start();
	$type = $_GET['type'];
	$query = "SELECT * FROM foods WHERE type=?";
	$pq = $connection->prepare($query);
	$pq->bind_param('s', $type);
	$pq->execute();
	$result = $pq->get_result();

	$foods = [];
	if($result->num_rows > 0){
		while ($row = $result->fetch_object()) {
			if($row->type == $type){
				$foods []= $row;
			}
		}
	}

	$_SESSION['foods'] = $foods;
	$pq->close();
	$connection->close();
	header("location:../menu.php");
 ?>