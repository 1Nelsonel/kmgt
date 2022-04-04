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
		<title>kamagut high school</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body>
			<?php include"admin2_navbar.php";?><br>
			
			<div id="section">
				
				<br>
				
				<h3 class="text"><center> Welcome <?php echo $_SESSION["username"]; ?></center></h3><hr>
				<div class="content1">
					
						<h3 > Add Staff Details</h3><br>
						
					<?php
						if(isset($_POST["submit"]))
						{
							$sq="insert into teacher(tusername,tpassword,qualifications,salary) values('{$_POST["sname"]}',1234,'{$_POST["qual"]}','{$_POST["sal"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success..</div>";
							}
							else
							{
								echo "<div class='error'>Insert Failed..</div>";
							}
							
						}
		
					?>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					     <label>Staff Name</label><br>
					     <input type="text" name="sname" required class="input">
					     <br><br>
					     <label>Qualification</label><br>
					     <input type="text" name="qual" required class="input">
					     <br><br>
					     <label>Salary</label><br>
					     <input type="text" name="sal" required class="input">
					     <br><br>
					     <button type="submit" class="btn" name="submit">Add Staff Details</button>
					</form>
				
				
				</div>
				
				
			</div>
	
		
	</body>
</html>