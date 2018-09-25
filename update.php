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
 		$pet_id = $_POST['pet_id'];
 		$first_name = $_POST['first_name'];
 		$last_name = $_POST['last_name'];
 		$email = $_POST['email'];

		if ($first_name !== "" && $last_name !== "" && $email !== "") {
			$query = "UPDATE seller SET first_name='$first_name', last_name='$last_name', email='$email' WHERE list_id='$list_id'";
		}
		else if ($first_name !== "" && $last_name !== "") {
			$query = "UPDATE seller SET first_name='$first_name', last_name='$last_name' WHERE list_id='$list_id'";
		}
		else if ($first_name !== "" && $email !== "") {
			$query = "UPDATE seller SET first_name='$first_name', email='$email' WHERE list_id='$list_id'";
		}
		else if ($last_name !== "" && $email !== "") {
			$query = "UPDATE seller SET last_name='$last_name', email='$email' WHERE list_id='$list_id'";
		}
		else if ($first_name !== "") {
			$query = "UPDATE seller SET first_name='$first_name' WHERE list_id='$list_id'";
		}
		else if ($last_name !== "") {
			$query = "UPDATE seller SET last_name='$last_name' WHERE list_id='$list_id'";
		}
		else if ($email !== "") {
			$query = "UPDATE seller SET email='$email' WHERE list_id='$list_id'";
		}

		   // Execute SQL statement
		if (!($result = @ mysql_query($query, $connection))) {
	     }
	     // Display results
	     
	     header('Location: http://triton.towson.edu/~rlee14/adoption.html');
	    ?>

	</table>
</body>