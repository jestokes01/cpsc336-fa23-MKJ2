<html>
<?php
    include 'connect.php';
    $sql = "SELECT p_id, p_name, p_qty FROM inventory";
	$result = $conn->query($sql);
	if ($result->num_rows >  0) {
		while ($row=$result->fetch_assoc()){
			echo $row["p_id"]. " ".$row["p_name"]." ".$row["p_qty"];
		echo"<br><br>;
		}
	else{
		echo "Empty";
	}
	}
?>
</html>
