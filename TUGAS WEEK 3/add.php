<html>
<head>
	<title>Add product</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>price</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr> 
				<td>brand</td>
				<td><input type="text" name="brand"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into product table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];
		$brand = $_POST['brand'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO product(name,price,brand) VALUES('$name','$price','$brand')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View product</a>";
	}
	?>
</body>
</html>