<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-7 mt-4">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">How to fetch data</h4>
					</div>
					<div class="card-body">
						<form action="" method="post">
							<div class="row">
								<div class="col-md-6"></div>
								<div class="form-group">
									<input type="text" name="fname" class="form-control" placeholder="First name">
								</div>
							</div>
							<div class="col-md-6"></div>
								<button type="submit" name="fetch_btn" class="btn btn-primary"></button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="card">
					<div class="card-body"></div>
						<?php
						$connection = mysqli_connect("localhost","root","","application");
						if(isset($_POST['fetch_btn']))
						{
							$fname = $_POST[fetch_btn];
							$query = "SELECT * FROM bill WHERE fname='$fname' ";
							$quer_run = mysql_query($connection, $query);

							if(mysqli_num_rows() > 0)
							{
								while ($row = mysqli_fetch_array($quer_run)) 
								{
									
									?>

						<div class="form-group">
									<input type="text" name="date" class="form-control" value="<?php echo $row['date']; ?>" placeholder="date">
						</div>			
									<div class="form-group">
									<input type="text" name="fname" class="form-control" value="<?php echo $row['fname']; ?>" placeholder="First name">
						</div>
						<div class="form-group">
									<input type="text" name="lname" class="form-control" value="<?php echo $row['lname']; ?>" placeholder="Last name">
						</div>
						<div class="form-group">
									<input type="text" name="entity1" class="form-control" value="<?php echo $row['entity1']; ?>" placeholder="Entity1">
						</div>
						<div class="form-group">
									<input type="text" name="entity2" class="form-control" value="<?php echo $row['entity2']; ?>" placeholder="Entity2">
						</div>
						<div class="form-group">
									<input type="text" name="entity3" class="form-control" value="<?php echo $row['entity3']; ?>" placeholder="Entity3">
						</div>
						<div class="form-group">
									<input type="text" name="entity4" class="form-control" value="<?php echo $row['entity4']; ?>" placeholder="Entity4">
						</div>
						<div class="form-group">
									<input type="text" name="totalentity" class="form-control" value="<?php echo $row['totalentity']; ?>" placeholder="Total entity">
						</div>
						<div class="form-group">
									<input type="text" name="totalpayment" class="form-control" value="<?php echo $row['totalpayment']; ?>" placeholder="Total Payment">
						</div>
						<div class="form-group">
									<input type="text" name="ps" class="form-control" value="<?php echo $row['ps']; ?>" placeholder="Payment status">
						</div>
						<div class="form-group">
									<input type="text" name="paidamt" class="form-control" value="<?php echo $row['paidamt']; ?>" placeholder="Payment amount">
						</div>
						<div class="form-group">
									<input type="text" name="amtpaid" class="form-control" value="<?php echo $row['amtpaid']; ?>" placeholder="Amt to be paid">
						</div>
						<div class="form-group">
									<input type="text" name="number" class="form-control" value="<?php echo $row['number']; ?>" placeholder="Number">
						</div>
						<div class="form-group">
									<input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>" placeholder="Address">
						</div>
						<div class="form-group">
									<input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" placeholder="Email">
						</div>

						<?php
								}	
							}
							else
							{
								echo "No Record Found.!";
							}
						}
						?>		
						

				</div>
			</div>
		</div>
	</div>	
</body>
</html>