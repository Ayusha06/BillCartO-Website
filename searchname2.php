<?php
					if(isset($_POST['mysql_connect']))
					{
					$connection = mysql_connect('localhost','root','');
					$db = mysql_select_db($connection,'applicant');

					if(isset($_POST['search']))
						{
							$fname = $_POST['fname'];

							$query = "SELECT * FROM 'lag' where fname='$fname' ";
							$query_run = mysqli_query(connection,$query);

							while($row = mysql_fetch_array($query_run))
							{
								?>
								<tr>
									
									<td> <?php echo $row['fname']; ?> </td>
									<td> <?php echo $row['lname']; ?> </td>
									
								</tr>
								<?php

							}	
						}
					}
?>
