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
        <h1>Add Inventory</h1>
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
          <?php
            	//include 'connect.php';
        		require 'connect.php';
        		$sql = "INSERT INTO inventory (p_id, p_name, p_quantity) VALUES (".$_POST["itemid"].", '".$_POST["itemname"]."', ".$_POST["itemquantity"].");";
        		echo $sql;
        		$result = $conn->query($sql);

        	?>
        </form>
    </main>
  </body>

</html>
