<html>
<?php

    $sql = "SELECT id, name, qty FROM item";
	$result = $conn->query($sql);
	if ($result->num_rows >  0) {
		while ($row=$result->fetch_assoc()){
			echo $row["id"]. " ".$row["name"]." ".$row["qty"];
		echo"<br><br>;
		}
	else{
		echo "Empty";
	}
	}
?>
</html>
