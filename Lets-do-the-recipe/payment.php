<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Let's Do This Recipe</title>
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="login_register/css/default.css" />
		<link rel="stylesheet" type="text/css" href="login_register/css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<span><h1>Let's Do This Recipe </h1></span>
				
			</header>	
			<div class="main">
				<?php 
					session_start();
					$course = $_SESSION['takecourse'];
				 ?>
				<form class="cbp-mc-form" action="controller/PaymentController.php" method="POST">
					<div class="cbp-mc-column">
	  					<label for="recipe">RECIPE</label>
	  					<input type="text" value="<?= $course->name?>">
	  					<label for="price">PRICE</label>
	  					<input type="text" value="<?= $course->price?>">
	  					<label for="payment">PAYMENT</label>
	  					<select id="payment" name="payment">
	  						<option>BCA</option>
	  					</select>
	  					<br>
	  					<!-- <input class="cbp-mc-submit" type="submit" value="PAY" /> -->
	  					<input class="cbp-mc-submit" type="submit" id="clickMe" value="PAY" onclick="changePage();" />

	  				</div>
				</form>
			</div>
		</div>
	</body>

	<script>
function changePage()
{
    alert("Thanks for the Payment :)");
    window.location=index.php;
}
</script>
</html>
