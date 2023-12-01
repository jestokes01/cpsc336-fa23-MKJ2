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
        <form action="add.php" method="post">
        	<!--Item ID-->
        	<label for="ItemID">Item ID</label><br>
        	<input name="itemid" id="itemid" type="text" p_id="Item ID"><br><br>

        	<!--Item Name-->
        	<label for="ItemName">Item Name</label><br>
        	<input name="itemname" id="itemname" type="text" p_name="Item Name"><br><br>

        	<!--Item Quantity-->
        	<label for="ItemQuan">Item Quantity</label><br>
        	<input name="itemquantity" id="itemquantity" type="text" p_quantity="Item Quantity"><br><br>

        	<!--Add Item Button-->
        	<input type="submit" value="Add Item">
        </form>
    </main>
  </body>

</html>
