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
					if(isset($_SESSION['error'])){
						echo $_SESSION['error'];
					}
				 ?> 
				<form class="cbp-mc-form" action="../controller/RegisterController.php" method="POST">
					<div class="cbp-mc-column">
						<label for="Name">Name</label>
	  					<input type="text" id="name" name="name" placeholder="Jonathan">
	  					<label for="email">Email Address</label>
	  					<input type="text" id="email" name="email" placeholder="jon@doe.com">
	  				</div>
	  				<div class="cbp-mc-column">
	  					<label for="phone">Phone Number</label>
	  					<input type="text" id="phone" name="phone" placeholder="+351 999 999">
	  					<label for="password">Password</label>
	  					<input type="password" name="password">
	  					<label for="password">Confirm Password</label>
	  					<input type="password" name="confirmpassword">
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" value="Register" /></div>
				</form>
			</div>
		</div>
	</body>
</html>
