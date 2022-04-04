<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["tid"]))
	{
		echo"<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Tutor Joe's</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
			<div id="section">
			
				<h3 class="text"><center>Welcome <?php echo $_SESSION["tusername"]; ?></center></h3><br><hr><br>
				<div class="content">
					
						<h3 >View Student Details</h3><br>
					
					<?php
						if(isset($_GET["mes"]))
						{
							echo"<div class='error'>{$_GET["mes"]}</div>";	
						}
					
					?>
					<table border="1px" >
						<tr>
							<th>S.No</th>
							<th>Adm No</th>
							<th>Name</th>
							<th>DOB</th>
							<th>Gender</th>
							<th>Phone</th>
							<th>Mail</th>
							<th>Class</th>
							<th>Stream</th>
							<th>Image</th>
							<th>Delete</th>
						</tr>

						<?php
							$sql="select * from student where tid={$_SESSION["tid"]}";
							$res=$db->query($sql);
							if($res->num_rows>0)
							{
								$i=0;
								while($r=$res->fetch_assoc())
								{
									$i++;
									echo"
										<tr>
											<td>{$i} </td>
											<td>{$r["adm_no"]}</td>
											<td>{$r["sname"]}</td>
											<td>{$r["dob"]}</td>
											<td>{$r["gender"]}</td>
											<td>{$r["telephone"]}</td>
											<td>{$r["mail"]}</td>
											<td>{$r["form"]}</td>
											<td>{$r["stream"]}</td>
											<td><img src='{$r["image"]}' height='70' width='70'></td>
											<td><a href='stud_delete.php?aid={$r["aid"]}' class='btnr'>Delete</a> <td>
										</tr>
									
									
									
									"
									;
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