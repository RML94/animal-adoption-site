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

		$list_id = $_POST['list_id'];

		$query = "DELETE seller, adoption 
				  FROM seller
				  INNER JOIN adoption ON adoption.id=seller.pet_id
				  WHERE seller.list_id='$list_id'";

		   // Execute SQL statement
		if (!($result = @ mysql_query($query, $connection))) {
		   showerror();
	     }
	     // Display results
	     
	     header('Location: http://triton.towson.edu/~rlee14/adoption.html');
	    ?>

	</table>
</body>