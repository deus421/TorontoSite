<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
</head>
<body>
<?php include "/Volumes/Students/students/141/axs2931/dbcon.php";
?>
<div class="header">
	<img id="banner" src="assets/images/banner.png" alt="Banner Image">
	<div id="navi">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="aboutToronto.php">ABOUT</a></li>
			<li><a href="whatToDo.php">DO</a>
				<ul>
					<li class="smallerFont"><a href="nightlife.php">NIGHTLIFE</a></li>
					<li class="smallerFont"><a href="tourism.php">TOUR</a></li>
				</ul>
			</li>
			<li><a href="eatDrink.php">CONSUME</a>
				<ul>
					<li class="smallerFont"><a href="eat.php">EAT</a></li>	
					<li class="smallerFont"><a href="drink.php">DRINK</a></li>
				</ul>
			</li>
			<li><a href="events.php">ENJOY</a>
				<ul>
					<li class="smallerFont"><a href="concerts.php">CONCERTS</a></li>
					<li class="smallerFont"><a href="festivals.php">FESTIVALS</a></li>
				</ul>
			</li>
			<li><a href="plan.php">PLAN</a></li>
			<li><a href="comments.php">COMMENT</a></li>
		</ul>
	</div>
</div>