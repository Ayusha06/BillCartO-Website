<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "application";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$email = $_POST["Email"];
$password = $_POST["Password"];
$salt = "codeflix";
$password_encrypted = sha1($password.$salt);


$sql = mysqli_query($conn, "SELECT count(*) as total from apk1 WHERE Email = '".$email."' and 
	Password = '".$password_encrypted."'");

$row = mysqli_fetch_array($sql);

if($row["total"] > 0){
	?>
	<script>
		alert('Login successful');
		
	</script>
	
	<?php
}
else{
	?>
	<script>
		alert('Login successful');
		window.location.replace('wel.html');
	</script>
	<?php
}
?>