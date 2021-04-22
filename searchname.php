<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-color: powderblue;
		}
		table,th,td{
			border: 2px solid black;
			width: 1100px;
			background-color: lightgreen;
		}
		.btn{
			width: 10%;
			height: 5%;
			font-size: 22px;
			padding: 0px; 
		}
	</style>

</head>
<body>
	<center>
	<div class="container">
		<form action="" method="post">
			<input type="text" name="fname" class="btn" placeholder="firstname">
			<input type="submit"  name="search" class="btn" value="Search By First Name">
		</form>

		<table>
				<tr>
					<th>date</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Entity1</th>
					<th>Entity2</th>
					<th>Entity3</th>
					<th>Entity4</th>
					<th>Total Entity</th>
					<th>Total Payment</th>
					<th>Payment status</th>
					<th>Paid amount</th>
					<th>Amount to be paid</th>
					<th>Number</th>
					<th>Address</th>
					<th>Email</th>
				</tr> <br>
					
					<?php
				
					if(isset($_POST['mysql_connect']))
					{
					$connection = mysql_connect('localhost','root','');
					$db = mysql_select_db($connection,'application');

					if(isset($_POST['search']))
						{
							
							$fname = $_POST['fname'];

							$query = "SELECT * FROM bill where fname='$fname' ";
							$query_run = mysqli_query(connection,$query);

							while($row = mysql_fetch_array($query_run))
							{
								?>
								<tr>
									<td> <?php echo $row['date']; ?> </td>
									<td> <?php echo $row['fname']; ?> </td>
									<td> <?php echo $row['lname']; ?> </td>
									<td> <?php echo $row['entity1']; ?> </td>
									<td> <?php echo $row['entity2']; ?> </td>
									<td> <?php echo $row['entity3']; ?> </td>
									<td> <?php echo $row['entity4']; ?> </td>
									<td> <?php echo $row['totalentity']; ?> </td>
									<td> <?php echo $row['totalpaymnet']; ?> </td>
									<td> <?php echo $row['ps']; ?> </td>
									<td> <?php echo $row['paidamt']; ?> </td>
									<td> <?php echo $row['amtpaid']; ?> </td>
									<td> <?php echo $row['number']; ?> </td>
									<td> <?php echo $row['address']; ?> </td>
									<td> <?php echo $row['email']; ?> </td>
								</tr>
								<?php

							}
						}
					}
					
						?>

		</table>
	</div>
	</center>

</body>
</html>