<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory List</title>
  </head>
  <body>
    <main>
        <h1>Inventory List</h1>
        <form action="listproducts.php" method="post">
        	<!--Item ID-->
	<?php
    	//include 'connect.php';
		include 'connect.php';
		$conn = db_connect();
		$sql = "SELECT p_id, p_name, p_quantity FROM inventory;";
	
		$result = $conn->query($sql);
		echo "<table border='1'>";
		echo "<tr>";
		echo "<td style='border: 1px solid black; padding: 5px; '><strong>ID</strong></td>";
		echo "<td style='border: 1px solid black; padding: 5px; '><strong>Name</strong></td>";
		echo "<td style='border: 1px solid black; padding: 5px; '><strong>Quantity</strong></td>";
		echo"</tr>";
		if ($result->num_rows >  0) {
			while ($row=$result->fetch_assoc()){
				echo "<tr>";
				echo "<td style='border: 1px solid black; padding: 5px; '>".$row["p_id"]."</td>";
				echo "<td style='border: 1px solid black; padding: 5px; '>".$row["p_name"]."</td>";
				echo "<td style='border: 1px solid black; padding: 5px; '>".$row["p_quantity"]."</td>";
				echo"</tr>";
			}
			echo "</table>";
    		}
		else{
			echo "Empty";
		}
		db_close($conn);
	?>
        </form>
    </main>
  </body>

</html>
