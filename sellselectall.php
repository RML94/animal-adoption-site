<html>
<head>
	<title>Exotic Animal Adoption</title>
</head>
<body>
	<table border=1>
		<tr><th>Listing ID</th><th>Pet ID</th><th>First Name</th><th>Last Name</th><th>E-mail</th></tr>
		
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
		   
		$query = "SELECT * FROM seller";

		   // Execute SQL statement
		if (!($result = @ mysql_query($query, $connection))) {
		   showerror();
	     }
	     // Display results
	     
	     while ($row = @ mysql_fetch_array($result))
	        echo "<tr>
	        <td>{$row["list_id"]}</td>
	        <td>{$row["pet_id"]}</td>
	        <td>{$row["first_name"]}</td>
	        <td>{$row["last_name"]}</td>
	        <td>{$row["email"]}</td>
	       </tr>";
	    ?>

	</table>
</body>