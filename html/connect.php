<?php
	function db_connect()
	{
	//DEVELOPMENT
	//$servername = "localhost";
	//$username = "root";
	//$password = "";
	//$dbname = "inventory";
			
	//$conn = mysqli_connect($servername, $username, $password, $dbname) or die("bad connection: ".mysqli_connect_error());
	
	$servername = $_SERVER['RDS_HOSTNAME'];
	$username = $_SERVER['RDS_USERNAME'];
	$password = $_SERVER['RDS_PASSWORD'];
	$dbname = $_SERVER['RDS_DB_NAME'];
	$port = $_SERVER['RDS_PORT'];
	
	$conn = new mysqli($servername, $username, $password, $dbname, $port) or die("bad connection: ".mysqli_connect_error());
	return $conn;
	}
	
	
	function db_close($conn)
	{
	$conn -> close();
	}
?>
