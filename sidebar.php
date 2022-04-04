<style>
.sidebar{
	width:17%;
	height:auto;
	margin-top:10px;
	margin-right:10px;
	float:left;
	background: rgb(25, 216, 223);
	
}
.s{
	list-style:none;
	text-align: left;

	
}
.text{
	text-align:center;		
	
}



</style>
<div class="sidebar"><br>
<h3 class="text">Dashboard</h3><br><br><hr>
<ul class="s">
<?php
	if(isset($_SESSION["tid"]))
	{
		echo'
			<li class="li"><a href="teacher_home.php">Profile</a></li>
			<li class="li"><a href="handle_class.php"> Handled Class</a></li>
			<li class="li"><a href="view_stud_teach.php" target="_blank"> View Student</a></li>
 			<li class="li"><a href="tech_view_exam.php">View Exam</a></li>
			<li class="li"><a href="add_mark.php">Add Marks</a></li>
			<li class="li"><a href="view_mark.php">View Marks</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>

		
		';
	}


?>
	

</ul>

</div>