<html>
<head>
	<title>Exotic Animal Adoption</title>
</head>
<body>
	<table border=1>
		<tr><th>ID</th><th>Name</th><th>Age</th><th>Breed</th><th>Price</th></tr>
		
		<?php
		include 'db.inc.php';
		// Connect to MySQL DBMS

		if (!($connection = @ mysql_connect($hostName,$username,$password))) {
			showerror();
		}
		
		if (!mysql_select_db($databaseName, $connection)){
		   showerror();
		} 
		   // Create SQL statement
		   
		$query = "SELECT * FROM adoption";

		   // Execute SQL statement
		if (!($result = @ mysql_query($query, $connection))) {
		   showerror();
	     }
	     // Display results
	     
	     while ($row = @ mysql_fetch_array($result))
	        echo "<tr>
	        <td>{$row["id"]}</td>
	        <td>{$row["Name"]}</td>
	        <td>{$row["Age"]}</td>
	        <td>{$row["Type"]}</td>
	        <td>{$row["Price"]}</td>
	       </tr>";
	    ?>

	</table>
</body>
</html>