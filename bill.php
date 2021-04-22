<?php

$date = $_POST['date'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$entity1 = $_POST['entity1'];
$entity2 = $_POST['entity2'];
$entity3 = $_POST['entity3'];
$entity4 = $_POST['entity4'];
$totalentity = $_POST['totalentity'];
$totalpayment = $_POST['totalpayment'];
$ps = $_POST['ps'];
$paidamt = $_POST['paidamt'];
$amtpaid = $_POST['amtpaid'];
$number = $_POST['number'];
$address = $_POST['address'];
$email = $_POST['email'];


	// Database connection
	$conn = new mysqli('localhost','root','','application');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into bill(date,fname, lname, entity1,entity2,entity3,entity4,totalentity,totalpayment,ps,paidamt,amtpaid,number,address,email) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssiisiiiss", $date, $fname,$lname,$entity1,$entity2, $entity3,$entity4,$totalentity,$totalpayment,$ps,$paidamt,$amtpaid,$number,$address,$email);
		$execval = $stmt->execute();
		
		header('Location: redirect.php');
		$stmt->close();
		$conn->close();
	}
?>
