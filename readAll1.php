<?php 
if(isset($_POST['submit']))
{
if($_POST['submit'])
	{ 
		$host = "localhost"; 
		$db = "application"; 
		$user = "root"; 
		$pw = ""; 
		$conn = new mysqli ($host, $user, $pw, $db); 
		if($conn->connect_error) 
			die($conn->connect_error);

		$readAllQuery = "SELECT * FROM bill"; 
		$result = $conn->query($readAllQuery); 
		if (!$result) 
			die($conn->error); 
		echo "<table border='1'>"; 
		echo "<tr>
				<td>date</td>
				<td>fname</td>
				<td>lname</td> 
				<td>entity1</td>
				<td>entity2</td>
				<td>entity3</td>
				<td>entity4</td> 
				<td>totalentity</td>
				<td>totalpayment</td>
				<td>ps</td>
				<td>paidamt</td>
				<td>amtpaid</td> 
				<td>number</td>
				<td>address</td>
				<td>email</td>
			</tr>"; 
		while ($row = mysqli_fetch_assoc($result))
			{ 
				echo "<tr>
						<td>{$row['date']}</td>
						<td>{$row['fname']}</td> 
						<td>{$row['lname']}</td>
						<td>{$row['entity1']}</td>
						<td>{$row['entity2']}</td>
						<td>{$row['entity3']}</td>
						<td>{$row['entity4']}</td>
						<td>{$row['totalentity']}</td>
						<td>{$row['totalpayment']}</td>
						<td>{$row['ps']}</td>
						<td>{$row['paidamt']}</td>
						<td>{$row['amtpaid']}</td>
						<td>{$row['number']}</td>
						<td>{$row['address']}</td>
						<td>{$row['email']}</td>
					</tr>"; 
				} 
			echo "</table>"; 
		} 
	}
		?> 
		<form method='post' action='readAll.php'> 
			
			<input type='submit' name='submit' value='Show All bills'> 
		</form>