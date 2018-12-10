<html>
<body>
<p>
<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'econmerce';

	@ $db_conn = mysqli_connect($host, $username, $password, $db);
	
	$connecting_error = mysqli_connect_error();
	if ($connecting_error != null) {
		echo "<p>We have a connecting error:"  . $connecting_error . "</p>";
	}

	$query = "SELECT  clients_id,price FROM orders";
	$result = mysqli_query($db_conn, $query);


	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<p> Clients Name: " . $row["clients_id"] ."<br/>"."Price: ".$row["price"]."<br/>".
			"New Price: ".($row["price"]*0.9)."<br/>"."</p>";
		}
	}
	else{
		echo "No result were found";
	}

	mysqli_close($db_conn);

?> 
</p>
</body>
</html>