<?php 
session_start();
include 'mode.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-9">
	<meta http-equiv="X-UA-Compatible"
	content="IE=edge">
	<meta name="viewport"
	content="width=device-width, initial-scale=1.0">
	<title> Mindfulness Practice </title>
	<link rel="stylesheet" href="/css/css.css">
</head>

<body>
<nav>
<ul class="clientMenu">
	<li><a href="/"> HomePage </a></li>
	<li><a href="/about.php"> About ME</a></li>
</ul>
<ul class="staffMenu">
	<?php
	if ($_SESSION)
	{
		echo'
		<li><a href="/allPractice.php">All Practice</a></li>
		<li><a href="/functions.php?op=logout">Log-Out</a></li>';
	}
	else
	{
		echo'<li><a href="/login.php">Log-In</a></li>';
		echo'<li><a href="/join.php">Join</a></li>';
	}
	?>
	
	
</ul>
</nav>
