<style>
    
  .list{
    color:white;
    line-height:50px;
    margin-left:15px;
   
    display: inline-block;
    }
    .b{
        color:rgb(224, 207, 110);
        padding: 15px;  
        font-size: 150%; 
    }
    .navbar{
	background:rgb(60, 10, 117);;
	height:60px;
	width:100%;	
    padding-bottom:2%;
    text-align:center;
}
.list li{
	display:inline;
	
}

.list li a{
	
	color:white;
	line-height:50px;
	padding:20px;
	
}

</style>
<div class="navbar">

			<ul class="list">
				<b>Kamagut High School</b>
			<?php
				if(isset($_SESSION["aid"]))
				{
					echo'
				
						<li><a href="teacher_home.php">Home</a></li>
				<li><a href="change_pass.php">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
				}
				elseif(isset($_SESSION["tid"]))
				{
					echo'
				
						<li><a href="teacher_home.php">Teacher Home</a></li>
				<li><a href="teacher_change_pass.php">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
				}
				else{
					echo'
					
					<li><a href="index.php">Admin</a></li>
				<li><a href="teacher_login.php">Teacher</a></li>
				<li><a href="contact.php">Contact Us</a></li>';
				}
			?>
				
			</ul>
		</div>
		