<?php
	include"database.php";
	session_start();

	if(!isset($_SESSION["tid"]))
	{
		echo"<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
		
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
		<title>Kamgut High School</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body id="pageContent">
		<?php include"teacher_navbar.php";?> <br>
	
			<div id="section">
				<?php include"sidebar.php";?><br>
					<h3 class="text">Welcome <?php echo $_SESSION["tusername"]; ?></h3><br>
				
				<div class="content">
				
					<h3>Add Profile</h3><br>
					<div class="lbox1">
					<?php
						if(isset($_POST["submit"]))
						{
							$target="teacher/";
							$target_file=$target.basename($_FILES["image"]["name"]);
							
							if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file))
							{
								$sql="update teacher set TscNo='{$_POST["TscNo"]}',MAIL='{$_POST["mail"]}',telephone='{$_POST["telephone"]}',image='{$target_file}'where tid={$_SESSION["tid"]}";
								$db->query($sql);
								echo "<div class='success'>Insert Success</div>";
							}
						
						}
			
					
					?>
					
					
					
					
						
					<form  enctype="multipart/form-data" role="form"  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
							<label>  Phone No</label><br>
							<input type="text" maxlength="12" required class="input3" name="telephone"><br><br>
							<label>  E - Mail</label><br>
							<input type="email"  class="input3" required name="mail"><br><br>
							<label> TscNo</label><br>
							<input type="text"  class="input3" required name="TscNo"><br><br>
							<label> Image</label><br>
							<input type="file"  class="input3" required name="image"><br><br>
						<button type="submit" class="btn" name="submit">Add Profile Details</button>
						</form>
					</div>
					
					
					
	
					<div class="rbox1">
					<h3> Profile</h3><br>
						<table border="1px">
					     	<tr><td colspan="2"><img src="<?php echo $row["image"] ?>" height="100" width="100" alt="upload Pending"></td></tr>
                       		<tr><th>Name </th> <td><?php echo $row["tusername"] ?> </td></tr>
							<tr><th>TscNo </th> <td><?php echo $row["TscNo"] ?>  </td></tr>
							<tr><th>Qualification </th> <td><?php echo $row["qualifications"] ?>  </td></tr>
							<tr><th>Salary </th> <td> <?php echo $row["salary"] ?>  </td></tr>
							<tr><th>Phone No </th> <td> <?php echo $row["telephone"] ?> </td></tr>
							<tr><th>E - Mail </th> <td> <?php echo $row["mail"] ?> </td></tr>
														
							
					
					</div>
				</div>
			</div>
			
	
			
	</body>
</html>