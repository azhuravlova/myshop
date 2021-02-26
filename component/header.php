<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8"/>
		<title>myshop</title>
		<!--Подключение шрифтов-->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet" type="text/css"/>
		
	</head>
	<body>

		<div class="box_area">
			<header>
				<div class="header">
					<div class="header_logo">
						<a href="http://myshop/index.php">
							<img id="logo" src="images/Logo.png"/>
						</a>	
					</div>
					<nav class="hedear_links">
						<a href="http://myshop/index.php">Home</a>
						<?php
						echo '<a href="http://myshop/shoes.php?page=1">Shoes</a>';
						 ?>
						<a href="#">T-Shirts</a>
						<a href="#">About us</a>
						<a href="#">Contacts</a>
					</nav>
					<div class="header_cart">
						<a href="#">
							<img id="cart" src="images/Cart icon.png"/>
						</a>
				
					</div>
				</div>
			</header>
		</div>
