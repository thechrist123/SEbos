<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Let's Do The Recipe</title>
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!-- <link rel="stylesheet" type="text/css" href="shop-assets/css/default.css" /> -->
		<link rel="stylesheet" type="text/css" href="shop-assets/css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<style> 
		input[type=text] {
		    width: 30%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    box-sizing: border-box;
		    border: 3px solid #447aa3;
		    -webkit-transition: 0.5s;
		    transition: 0.5s;
		    outline: none;
		}

		input[type=text]:focus {
		    border: 3px solid #5dadea;
		}
	</style>
	<body>
		<div class="container">
			<header class="clearfix">
				<span><h1>Let's Do The Recipe </h1></span>
				<?php 
					session_start();
					if(isset($_SESSION['user'])){
						$user = $_SESSION['user'];
				?>
						<h4 align="right" >Hello, <?= $user->Name ?> | <a href="controller/LogoutController.php" style="color:black">Logout</a></h4>
				<?php		
					}else{
				 ?>
				<h4 align="right" ><a href="login_register/login.php" style="color:black">Login</a>/<a href="login_register/register.php" style="color:black">Register</a></h4>
				<?php 
				}
				 ?>
				 <form action="controller/SearchController.php" method="POST">
					<div >
	  					<input type="text" name="keyword" placeholder="Search...">
	  				</div>
	  			</form>
			</header>

				
			<div class="main">
				<nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
					<div class="cbp-hsinner">
						<ul class="cbp-hsmenu">
							<li>
								<a href="index.php">Home</a>
								
							</li>
							<li>
								<a href="controller/MenuController.php?type=Western">Western</a>
								
							</li>
							<li>
								<a href="controller/MenuController.php?type=Eastern">Eastern</a>
								
							</li>
							<li><a href="controller/MenuController.php?type=Indonesian">Indonesian</a></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
							<li><a href="aboutus.php">About Us</a></li>
						</ul>
					</div>
				</nav>
			</div>

			<div id="cbp-pgcontainer" class="cbp-pgcontainer">
				<ul class="cbp-pggrid">
					
					<li>
						<div class="cbp-pginfo">
							isi disini
						</div>
					</li>
					
					
				</ul>
			</div><!-- /cbp-pgcontainer -->
		</div>
		<script src="js/cbpHorizontalSlideOutMenu.min.js"></script>
		<script>
			var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
		</script>
		<script src="shop-assets/js/cbpShop.min.js"></script>
		<script>
			var shop = new cbpShop( document.getElementById( 'cbp-pgcontainer' ) ); 
		</script>
	</body>
</html>
