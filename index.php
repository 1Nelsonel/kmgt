<?php
	include "database.php";
	session_start();
?>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	

</head>

<body>
	<?php include "topnav.php" ?>
<hr>		
<table width="80%" align="center" cellspacing="0" cellpadding="8" class="tableWidth">
	<tr>
	<td id="subTitle"> -Learn Rise and Shine- </td>
	</tr>
</table>
<table width="80%" align="center" cellspacing="8" cellpadding="0" class="tableWidth">
<tr class="blak">
<td>
	<table width="80%"  align="center" cellspacing="8" cellpadding="0">
	<tr>
	<td> 
		<table width="80%"  align="center" cellspacing="8" cellpadding="0">
		<tr> 
		<td id="pageContent"> 
<!-- ==================== End prologue ==================== -->

<h1>Admin Login</H1>

<?php
				if(isset($_POST["login"]))
				{
					$sql="select * from admin where username='{$_POST["Username"]}' and password='{$_POST["Password"]}'";
					$res=$db->query($sql);
					if($res->num_rows>0)
					{
						$ro=$res->fetch_assoc();
						$_SESSION["aid"]=$ro["aid"];
						$_SESSION["username"]=$ro["username"];
						echo "<script>window.open('admin_home.php','_self');</script>";
					}
					else
					{
						echo "<div class='error'>Invalid Username or Password</div>";
					}
					
				}
				if(isset($_GET["mes"]))
				{
					echo "<div class='error'>{$_GET["mes"]}</div>";
				}
				
			?>

  <table width="100%"  cellpadding="8">

		<TR>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
          <div class="imgcontainer">
          </div>
        
          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="Username" required>
        
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="Password" required>
                
            <button type="submit" class="btn" name="login">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
		  </div> 

		  <script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
        
         
        </form>
        </TR>
		 
	</TABLE>
	<BR>
	
	

<!-- ==================== Start epilogue ==================== -->
		</td>
		</tr>
		</table>
	</td>
	</tr>
	</table>
</td>
</tr>
</table>
<hr>

<table width="80%"  align="center" valign="bottom" cellspacing="5" cellpadding="0">
	<tr>
	<td id="footer"><small>&copy; 2021 Nelson Mokoro- Software Developer: Nelsonel Tech Solutions.</small></td>
	</tr>
</table>

</body>

</html>


