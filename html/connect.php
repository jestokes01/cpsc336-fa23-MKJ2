<?php
	$servername = "localhost";
	$username = "admin";
	$password = "rootroot";
	$dbname = "inventory";
			
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("bad connection: ".mysqli_connect_error());
?>
