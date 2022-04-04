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
				if(isset($_SESSION["tid"]))
				{
					echo'
				
						<li><a href="index.php">Home</a></li>
				<li><a href="teacher_change_pass.php">Settings</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
				}
				
			?>
				
			</ul>
		</div>
		