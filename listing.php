 <html><head><title>Exotic Animal Adoption</title></head> 
<body>
<?php
 echo "<table border=1>
 <tr><th>Listing ID</th><th>Pet ID</th><th>Name</th><th>Age</th><th>Breed</th><th>Price</th><th>Seller First Name</th><th>Seller Last Name</th><th>Seller E-mail</th></tr>";
 include 'db.inc.php';
 // Connect to MySQL DBMS
 if (!($connection = @ mysql_connect($hostName, $username,
 $password)))
 showerror();
 // Use the cars database
 if (!mysql_select_db($databaseName, $connection))
 showerror();
 // Create SQL statement
 $query = "SELECT seller.list_id, adoption.id, adoption.Name, adoption.Age, adoption.Type, adoption.Price, seller.first_name, seller.last_name, seller.email
 		   FROM adoption 
 		   INNER JOIN seller ON adoption.id=seller.pet_id";

 // Execute SQL statement
 if (!($result = @ mysql_query ($query, $connection)))
 	showerror();
 // Display results
 while ($row = @ mysql_fetch_array($result))
 echo "<tr><td>{$row["list_id"]}</td>
<td>{$row["id"]}</td>
 <td>{$row["Name"]}</td>
 <td>{$row["Age"]}</td>
 <td>{$row["Type"]}</td>
 <td>{$row["Price"]}</td>
 <td>{$row["first_name"]}</td>
 <td>{$row["last_name"]}</td>
 <td>{$row["email"]}</td</tr>";
 echo "</table>";
  ?> </body> </html>