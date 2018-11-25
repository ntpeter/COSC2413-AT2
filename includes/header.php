<?php
	if(!isset($_SESSION)){
		session_start();
	}
?>

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title;?>Silverado Cinema</title>
		<link rel="stylesheet" type="text/css" href="css/skeleton.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<script type="text/javascript" src="js/script.js"></script>
		<link rel="icon" href="favicon.ico">
		
		<!-- <link rel="stylesheet" type="text/css" href="http://titan.csit.rmit.edu.au/~e54061/wp/wireframe.css">
			Debugging stylesheet, provided from COSC2413 Assignment 2 Brief -->
		
		<!-- URL <https://fonts.google.com/specimen/Rammetto+One?selection.family=Rammetto+One>
			Used for logo font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rammetto+One">
		
		<!-- URL <https://fonts.google.com/specimen/Candal?selection.family=Candal>
			Used for footer font -->
		<link href="https://fonts.googleapis.com/css?family=Candal" rel="stylesheet">
	</head>
	<body>
		<header>
			<div id="logo">
				<h1>silverado cinema</h1>
			</div>
			<nav>
				<div class="container">
					<ul>
						<li><a href="index.php">home</a></li>
						<li><a href="showing.php">showing</a></li>
						<li><a href="booking.php">booking</a></li>
						<li><a href="#">contacts</a></li>
						<li><a href="cart.php">cart</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<main>
			<div class="container">