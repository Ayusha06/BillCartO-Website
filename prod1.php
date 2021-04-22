<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<center><h4>Entity 1 Statistics </h4></center>
	<center>
<?php 

if(isset ($_POST['name_bill']))
	{ 
		$host = "localhost"; 
		$db = "application"; 
		$user = "root"; 
		$pw = ""; 
		$conn = new mysqli ($host, $user, $pw, $db); 
		if($conn->connect_error) 
			die($conn->connect_error);


		$entity1 = $_POST['entity1'];
		$readAllQuery = "SELECT count(entity1) FROM bill"; 
		$result = $conn->query($readAllQuery); 
		if (!$result) 
			die($conn->error); 
		 
		while ($row = mysqli_fetch_assoc($result))
			kal hi krte hai;
			{ 
				echo count($entity1); 
				} 
			 
		} 
	
		?> 
	</center>
	</body>
	</html>