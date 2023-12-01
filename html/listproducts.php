<?php
    //include 'connect.php';
	$servername = "localhost";
	$username = "admin";
	$password = "rootroot";
	$dbname = "inventory";
			
	$conn = mysqli_connect($servername, $username, $password, $dbname) or die("bad connection: ".mysqli_connect_error());
    	$sql = "SELECT p_id, p_name, p_qty FROM inventory";
	
	$result = $conn->query($sql);
	if ($result->num_rows >  0) {
		while ($row=$result->fetch_assoc()){
			echo $row["p_id"]. " ".$row["p_name"]." ".$row["p_qty"];
		echo"<br><br>";
		}
    	}
	else{
		echo "Empty";
	}
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <main>
        <h1>Welcome to My Website</h1>
        <div class="item">
            <span>Item ID:</span>
            <span id="item-id">12345</span>
        </div>
        <div class="item">
            <span>Item Name:</span>
            <span id="item-name">Example Item</span>
        </div>
        <div class="item">
            <span>Qty:</span>
            <span id="item-qty">10</span>
        </form>
    </main>
  </body>

</html>
