<?php
  $servername = "mariadb";
	$username = "root";
	$password = "password";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully";
	}
	catch(PDOException $e)
	{
		echo "Connection failed: " . $e->getMessage();
	}
	
	echo "<br><table><tr><th>Name</th><th>University</th></tr>";
	$stmt=$conn->query("SELECT * FROM bio");
	while ($row = $stmt->fetch()) {
		echo "<tr><td>".$row["name"]."</td><td>".$row["univ"]."</td></tr>";
	}
	echo "</table>";
?>
