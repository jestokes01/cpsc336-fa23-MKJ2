<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Inventory</title>
  </head>
  <body>
    <main>
        <h1><font color='3352FF'>Delete Inventory</font></h1>
        <form action="delete.php" method="post">
        	<!--Item ID-->
        	<label for="ItemID">Item ID</label><br>
        	<input name="itemid" id="itemid" type="text" p_id="Item ID"><br><br>

        	<!--Delete Item Button-->
        	<input type="submit" value="Delete Item">
          <?php
            include 'connect.php';
            $conn = db_connect();
        		$sql = "DELETE FROM inventory WHERE p_id = ".$_POST["itemid"].";";
        		$result = $conn->query($sql);
            db_close($conn);
        	?>
        </form>
    </main>
  </body>

</html>
