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

		$pet_id = $_POST['pet_id'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];

		$query = "INSERT INTO seller (list_id, pet_id, first_name, last_name, email) VALUES ('', '$pet_id', '$first_name', '$last_name', '$email')";

		   // Execute SQL statement
		if (!($result = @ mysql_query($query, $connection))) {
		   showerror();
	     }
	     // Display results
	     
	     header('Location: http://triton.towson.edu/~rlee14/adoption.html');
	   ?>
	</table>
</body>