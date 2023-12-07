<?php
	function db_connect()
	{
	//DEVELOPMENT
	//$servername = "localhost";
	//$username = "root";
	//$password = "";
	//$dbname = "inventory";
			
	//$conn = mysqli_connect($servername, $username, $password, $dbname) or die("bad connection: ".mysqli_connect_error());
	
	//endpoint
	$servername = 'productiondb.cvfvx02sqzrk.us-east-1.rds.amazonaws.com';
	//admin
	$username = 'admin';
	$password = 'rootroot';
	$dbname = 'inventory';
	$port = 3306;
	
	$conn = new mysqli($servername, $username, $password, $dbname, $port) or die("bad connection: ".mysqli_connect_error());
	return $conn;
	}
	
	
	function db_close($conn)
	{
	$conn -> close();
	}
?>
