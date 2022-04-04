<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["aid"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Kamagut High School</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
			<?php include"admin2_navbar.php";?><br>
			
			
			<div id="section">
				
					<br>
					
					<h3 class="text"><center>Welcome <?php echo $_SESSION["username"]; ?></center></h3><br><hr><br>
					
				<div class="content">
					
						<h3 >View Staff Details</h3><br>
						
						<?php
							if(isset($_GET["mes"]))
								{
									echo"<div class='error'>{$_GET["mes"]}</div>";	
								}
					
						?>
						
						<table border="1px">
							<tr>
								<th>S.No</th>
								<th>Name </th>
								<th>Qualification</th>
								<th>Salary</th>
								<th>TscNo</th>
								<th>Phone</th>
								<th>E-Mail</th>
								<th>Delete</th>
							</tr>
							<?php
								$s="select * from teacher";
								$res=$db->query($s);
								if($res->num_rows>0)
								{
									$i=0;
									while($r=$res->fetch_assoc())
									{
										$i++;
										echo "
											<tr>
												<td>{$i}</td>

												<td>{$r["tusername"]}</td>
												<td>{$r["qualifications"]}</td>
												<td>{$r["salary"]}</td>
												<td>{$r["TscNo"]}</td>
												<td>{$r["telephone"]}</td>
												<td>{$r["mail"]}</td>
												<td><a href='staff_delete.php?id={$r["tid"]}' class='btnr'>Delete</a></td>
											</tr>
										
										
										
										";
										
									}
								}
								else
								{
									echo "No Record Found";
								}
							
							
							
							?>
						
						
						
						
						
						
						
						
						
						</table>
				
				</div>
				
				
			</div>
	
				
	</body>
</html>