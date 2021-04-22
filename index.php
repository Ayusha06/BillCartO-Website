<?php 
include_once('connection.php'); 
$query="select * from bill "; 
$result=mysql_query($query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Student Record</h2></th> 
		</tr> 
			  <th> date </th> 
			  <th> fname </th> 
			  <th> lname </th> 
			  <th> entity1 </th>
			  <th> entity2 </th>
			  <th> entity3 </th>
			  <th> entity4 </th>
			  <th> totalentity </th>
			  <th> totalpayment </th>
			  <th> ps </th>
			  <th> paidamt </th>
			  <th> amtpaid </th>
			  <th> number </th>
			  <th> address </th>
			  <th> email </th> 
			  
		</tr> 
		
		<?php while($rows=mysql_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['date']; ?></td> 
		<td><?php echo $rows['fname']; ?></td> 
		<td><?php echo $rows['lname']; ?></td> 
		<td><?php echo $rows['entity1']; ?></td>
		<td><?php echo $rows['entity2']; ?></td>
		<td><?php echo $rows['entity3']; ?></td>
		<td><?php echo $rows['entity4']; ?></td>
		<td><?php echo $rows['totalentity']; ?></td>
		<td><?php echo $rows['totalpayment']; ?></td>
		<td><?php echo $rows['ps']; ?></td>
		<td><?php echo $rows['paidamt']; ?></td>
		<td><?php echo $rows['amtpaid']; ?></td>
		<td><?php echo $rows['number']; ?></td>
		<td><?php echo $rows['address']; ?></td>
		<td><?php echo $rows['email']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>