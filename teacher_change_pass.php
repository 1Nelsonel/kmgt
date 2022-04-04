<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["tid"]))
	{
		echo"<script>window.open('teacher_home.php?mes=Access Denied...','_self');</script>";
		
	}	
	
	
	$sql="SELECT * FROM teacher WHERE tid={$_SESSION["tid"]}";
		$res=$db->query($sql);

		if($res->num_rows>0)
		{
			$row=$res->fetch_assoc();
		}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Kamagut High School</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php include"navbar.php";?><br>
	
			<div id="section">
					<h3 class="text">Welcome <?php echo $_SESSION["tusername"]; ?></h3><br><hr><br>
				<div class="content">
				
					<h3>Change Password</h3><br>
			
					 
				
					<div class="lbox1">	
							<?php
						if(isset($_POST["submit"]))
						{
							$sql="select * from teacher where tpassword='{$_POST["opass"]}' and tid='{$_SESSION["tid"]}'";
							$result=$db->query($sql);
								if($result->num_rows>0)
								{
									if($_POST["npass"]==$_POST["cpass"])
									{
										$sql="UPDATE teacher SET  tpassword='{$_POST["npass"]}' where  tid='{$_SESSION["tid"]}'";
										$db->query($sql);
										echo"<div class='success'>password Changed</div>";
									}
									else
									{
										echo"<div class='error'>password Mismatch</div>";
									}
								}
								else
								{
									echo"<div class='error'>Invalid password</div>";
								}
						}
					
					
					
					?>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
						<label>Old Password</label><br>
						<input type="text" class="input3" name="opass"><br><br>
						<label>New Password</label><br>
						<input type="text" class="input3" name="npass"><br><br>
						<label>Confirm Password</label><br>
						<input type="text" class="input3" name="cpass"><br><br>
						<button type="submit" class="btn" style="float:left" name="submit"> Change Password</button>
				
					</form>
			
					</div>
			
					
				</div>
			</div>
	</body>
</html>