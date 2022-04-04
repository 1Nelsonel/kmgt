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
	if(isset($_SESSION["aid"]))
	{
		echo'
			<li class="li"><a href="admin_home.php">School Information</a></li>
			<li class="li"><a href="admin_add_class.php">Add Class</a></li>
			<li class="li"><a href="add_sub.php">Add Subject</a></li>
			<li class="li"><a href="add_staff.php">Add Staff</a></li>
			<li class="li"><a href="view_staff.php">View Staff</a></li>
			<li class="li"><a href="set_exam.php">Set Exam</a></li>
			<li class="li"><a href="view_exam.php">View Exam</a></li>
			<li class="li"><a href="admin_student.php"> View Student</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>
		
		';

	}


?>
	

</ul>

</div>