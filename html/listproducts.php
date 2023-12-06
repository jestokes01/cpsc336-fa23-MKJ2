<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory</title>
  </head>
  <body>
    <main>
        <h1>Inventory List</h1>
        <form action="listproducts.php" method="post">
        	<!--Item ID-->
	<?php
    	//include 'connect.php';
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "inventory";
			
		$conn = mysqli_connect($servername, $username, $password, $dbname) or die("bad connection: ".mysqli_connect_error());
		$sql = "SELECT p_id, p_name, p_quantity FROM inventory;";
	
		$result = $conn->query($sql);
		if ($result->num_rows >  0) {
			echo "<table border='1'>";
			while ($row=$result->fetch_assoc()){
				echo "<td style='border: 1px solid black; padding: 5px; '>".$row["p_id"]."</td>";
				echo "<td style='border: 1px solid black; padding: 5px; '>".$row["p_name"]."</td>";
				echo "<td style='border: 1px solid black; padding: 5px; '>".$row["p_quantity"]."</td>";
				echo"<br><br>";
			}
    		}
		else{
			echo "Empty";
		}
	?>
        </form>
    </main>
  </body>

</html>
