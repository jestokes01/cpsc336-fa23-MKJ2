<?php
	function db_connect()
	{
	//$servername = "localhost";
	//$username = "admin";
	//$password = "rootroot";
	//$dbname = "inventory";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "inventory";
			
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("bad connection: ".mysqli_connect_error());
	return $conn;
	}
	
	
	function db_close($conn)
	{
	$conn -> close();
	}
?>
