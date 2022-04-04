
<?php
	include"database.php";
	session_start();
	
	if(!isset($_SESSION["aid"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}	
		
?>
	
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<table width="80%"  align="center" cellspacing="0" cellpadding="0">

<td> 	


	
		<?php include"admin_navbar.php";?><br>
		
		
		
			<div id="section">
			
				<?php include"admin_sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["username"]; ?></h3><br><hr><br>
						<h3 > School Information</h3><br>
					
					<p class="para">
						Kamagut High School Is a Extra county school in Uasin Gishu county Founded in 1984. It is a mixed boading school in serene environment away from town providing students with opportunity to have good concentration in their studies. 
					</p>
						Kamagut High is widely known for their exellent performance in national exams. Kamagut high is also vibrant in Drama and Football with their Altra-Modern football pitch providing students with chance to shore case their talents.					
					<p class="para">
						
					</p>
				</div>
				
			</div>
			


</table>

</html>


