<!DOCTYPE html>
<html>
	
<head>
	<meta charset="utf-8" /> 
	<title>WipeNation</title>
	<meta name="description" content="Strona gildii WipeNation">
	<meta name="keywords" content="wow,world,warcraft,wipenation,gildia,defias">
	<meta name="author" content="Rafał Wasik">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<script src="../scripts/rng.js"> </script>
</head>

<body>
	<?php session_start(); ?>
	<?php include '..\inc.php';?>
	
	<div id="main">
	
	<h2 style="text-align:center; padding-top: 20px">Zaloguj się!</h2>
	
	<br>
	
	<div align="center">
	<form method= "post" action = "zalogowano.php">
		Login:<br>
			<input name = "login" type=text size=20 autofocus><br><br>
		Hasło:<br>
			<input name = "pass" type=text size=20>
			<br><br>
			
		<input type="submit" value="Zaloguj">
	</form>
	</div>
	</div>

	<?php include '..\fun.php';?>
</body>
	
</html>