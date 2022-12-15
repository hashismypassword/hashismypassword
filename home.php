<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>BABI</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="style.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Suprise babi</h1>
			</div>
		</nav>
		<div class="content">
			<h2>No more suprise</h2>

            <h3>I LOVE YOU</h3>
			<p>Welcome BABI!</p>
		</div><br>
        <center>
        <div>
        <h6>para to sa birth day mo wag moo muna iopen okay</h6>
        <button><strong><a href="fun.html">Click me</a></strong></button>
        </div>
        </center>
    </body>
</html>