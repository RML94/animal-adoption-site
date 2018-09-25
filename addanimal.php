<html>
<head>
	<title>Exotic Animal Adoption</title>
</head>
<body>
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

		$Name = $_POST['Name'];
		$Age = $_POST['Age'];
		$Type = $_POST['Type'];
		$Price = $_POST['Price'];

		$query = "INSERT INTO adoption (id, Name, Age, Type, Price) VALUES ('', '$Name', '$Age', '$Type', '$Price')";

		   // Execute SQL statement
		if (!($result = @ mysql_query($query, $connection))) {
		   showerror();
	     }
	     // Display results
	     
	     header('Location: http://triton.towson.edu/~rlee14/adoption.html');
	    ?>

	</table>
</body>