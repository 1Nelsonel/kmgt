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
		<title>Kamagut High Schol</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body id="pageContent">
		<?php include"admin2_navbar.php";?><br>
	
			<div id="section">
			
				<h3 class="text"><center>Welcome <?php echo $_SESSION["username"]; ?></center></h3><br><br>
				<div class="content">
				<h3 >View Student Details</h3>
					<form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<div class="lbox1">	
					<label>Class</label><br>
					<select name="cla" required class="input3">
				
						<?php 
							 $sl="SELECT DISTINCT(CNAME) FROM class";
							$r=$db->query($sl);
								if($r->num_rows>0)
									{
										echo"<option value=''>Select</option>";
										while($ro=$r->fetch_assoc())
										{
											echo "<option value='{$ro["CNAME"]}'>{$ro["CNAME"]}</option>";
										}
									}
						?>
					
					</select>
					<br><br>
						
				</div>
				<div class="rbox">
					<label>Section</label><br>
						<select name="sec" required class="input3">
				
						<?php 
							 $sql="SELECT DISTINCT(CSEC) FROM class";
							$re=$db->query($sql);
								if($re->num_rows>0)
									{
										echo"<option value=''>Select</option>";
										while($r=$re->fetch_assoc())
										{
											echo "<option value='{$r["CSEC"]}'>{$r["CSEC"]}</option>";
										}
									}
						?>
					
					</select><br><br>
				</div>
					<button type="submit" class="btn" name="view"> View Details</button>
				
						
					</form>
					<br>
					<div class="Output">
						<?php
							if(isset($_POST["view"]))
							{
								echo "<h3>Student Details</h3><br>";
								$sql="select * from student where form='{$_POST["cla"]}' and stream='{$_POST["sec"]}'";
								$re=$db->query($sql);
								if($re->num_rows>0)
								{
									echo '
										<table border="1px">
										<tr>
											<th>S.No</th>
											<th>Adm No.</th>
											<th>Name</th>
											<th>DOB</th>
											<th>Gender</th>
											<th>Phone</th>
											<th>Mail</th>
											<th>Class</th>
											<th>Stream</th>
											<th>Image</th>
										</tr>
									
									
									';
									$i=0;
									while($r=$re->fetch_assoc())
									{
										$i++;
										echo "
										<tr>
											<td>{$i}</td>
											<td>{$r["adm_no"]}</td>
											<td>{$r["sname"]}</td>
											<td>{$r["dob"]}</td>
											<td>{$r["gender"]}</td>
											<td>{$r["telephone"]}</td>
											<td>{$r["mail"]}</td>
											<td>{$r["form"]}</td>
											<td>{$r["stream"]}</td>
											<td><img src='{$r["image"]}' height='70' width='70'></td>
										
										
										</tr>
										";
										
									}
								}
							else
							{
								echo "No record Found";
							}
								echo "</table>";
							}
						
						
						?>
					
					</div>
				</div>
				
				
			</div>
	

	</body>
</html>