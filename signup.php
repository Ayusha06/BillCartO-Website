<?php  

$servername ="localhost";
$username = "root";
$password = "";

$dbname = "application";
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$Pass = $_POST['password'];
$salt = "application";
$Pass_encrypted = sha1($Pass.$salt);


$sql = "INSERT INTO apk1 values ('$name', '$email', '$Pass_encrypted')";

if($conn->query($sql) === TRUE){
		?>
			 <script>alert('Account Created');
					window.location.replace('signlog.html');
					</script>
	<?php
}
else{
	?>
	<script>alert('Values did not insert');

			</script>	
		<?php
}

?>
