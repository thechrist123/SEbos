<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Let's Do This Recipe</title>
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
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
					if(isset($_SESSION['loginerror'])){
						echo $_SESSION['loginerror'];
					}
				 ?>
				<form class="cbp-mc-form" action="../controller/LoginController.php" method="POST">
					<div class="cbp-mc-column">
	  					<label for="email">Email Address</label>
	  					<input type="text" id="email" name="email" placeholder="jon@doe.com">
	  					<label for="password">Password</label>
	  					<input type="password" name="password">
	  					<br>
	  					
	  					<input class="cbp-mc-submit" type="submit" value="Login" /></div>
				</form>
			</div>
		</div>
	</body>
</html>
