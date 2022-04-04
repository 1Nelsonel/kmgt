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
		<title>Kamagut High School</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
			<?php include"admin2_navbar.php";?><br>
			
			
			<div id="section">
			
				
					<h3 class="text"><center>Welcome <?php echo $_SESSION["username"]; ?></center></h3><br><hr><br>
				
				<div class="content">
					
						<h3 >Set Exam Time Table Details</h3><br>
					<?php
						if(isset($_POST["submit"]))
						{
							$edate=$_POST["ye"].'-'.$_POST["mo"].'-'.$_POST["da"];
							
							$sq="insert into mtiani (ENAME,ETERM,EDATE,EROOM,CLASS,SUB) values ('{$_POST["ename"]}','{$_POST["etype"]}','{$edate}','{$_POST["ses"]}','{$_POST["cla"]}','{$_POST["sub"]}')";
							if($db->query($sq))
							{
								echo "<div class='success'>Insert Success</div>";
							}
							else
							{
								echo "<div class='error'>Insert Failed</div>";
							}
						}
					?>
			
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					<div class="lbox">
						<label> Exam Name</label><br>
							<select class="input3" name="ename">
								<option value="">Select Exam Name</option>
								<option value="C.A.T 1">C.A.T 1</option>
								<option value="C.A.T 2">C.A.T 2 </option>
								<option value="C.A.T 3">C.A.T 3 </option>
								<option value="C.A.T 4">C.A.T 4 </option>
								<option value="C.A.T 5">C.A.T 5 </option>
								<option value="C.A.T 6">C.A.T 6 </option>
								<option value="C.A.T 7">C.A.T 7 </option>
								<option value="C.A.T 8">C.A.T 8 </option>
								<option value="C.A.T 9">C.A.T 9 </option>
								<option value="End of Term Exam">End of Term Exam</option>
							</select>

						<label> Select Term</label><br>
							<select name="etype" required class="input3">
						       <option value="">Select</option>
						       <option value="I-Term">Term I</option>
						       <option value="II-Term">Term II</option>
						       <option value="III-Term">Term II</option>
							</select>
					<br><br>
					
					<label> Exam Date</label><br>
					
					<select name="da" class="input5">
						<option value="">Date</option>
						<option value="1">1 </option>
						<option value="2">2 </option>
						<option value="3">3 </option>
						<option value="4">4 </option>
						<option value="5">5 </option>
						<option value="6">6 </option>
						<option value="7">7 </option>
						<option value="8">8 </option>
						<option value="9">9 </option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						</select>
					<select name="mo" class="input5">
						<option> Month</option>
						<option value="01">Jan</option>
						<option value="02">Feb</option>
						<option value="03">Mar</option>
						<option value="04">Apr</option>
						<option value="05">May</option>
						<option value="06">Jun</option>
						<option value="07">Jul</option>
						<option value="08">Aug</option>
						<option value="09">Sep</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
					</select>
					<select name="ye" class="input5">
						<option value="">Select Year</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
						<option value="2027">2027</option>
						<option value="2028">2028</option>
						<option value="2029">2029</option>
						<option value="2030">2030</option>
						<option value="2031">2031</option>
						<option value="2032">2032</option>
						<option value="2033">2033</option>
						<option value="2034">2034</option>
						<option value="2035">2035</option>
						<option value="2036">2036</option>
						<option value="2037">2037</option>
						<option value="2038">2038</option>
					</select>
				</div>
				
				<div class="rbox">
					<label>Exam Room</label>
						<select name="ses" required class="input3">
							<option value="">Select</option>
							<option value="ER 1">ER 1</option>
							<option value="ER 2">ER 2</option>
							<option value="ER 3">ER 3</option>
							<option value="ER 4">ER 4</option>
							<option value="ER 5">ER 5</option>
							<option value="ER 6">ER 6</option>
							<option value="ER 7">ER 7</option>
							<option value="ER 8">ER 8</option>
							<option value="ER 9">ER 9</option>
							<option value="ER 10">ER 10</option>
							<option value="ER 11">ER 11</Option>
							<option value="ER 12">ER 12</option>
							<option value="ER 13">ER 13</option>
							<option value="ER 14">ER 14</option>
							<option value="ER 15">ER 15</option>
							<option value="ER 16">ER 16</option>
							<option value="ER 17">ER 17</option>
							<option value="ER 18">ER 18</option>
							<option value="ER 19">ER 19</option>
							<option value="ER 20">ER 20</option>
						</select>
					<br><br>
					
					
					<label>Form</label>
					<select name="cla" required class="input3">
						<?php
							$sl="select DISTINCT(CNAME) from class";
							$r=$db->query($sl);
							if($r->num_rows>0)
							{
								echo 	"<option value=''>Select</option>";
								while($ro=$r->fetch_assoc())
								{
									echo "<option value='{$ro["CNAME"]}'>{$ro["CNAME"]}</option>";
								}
								
							}
						?>	
						
					</select>
					
					<br><br>
					
					
					<label>Subject</label><br>
					<select name="sub" required class="input3">
						<?php
							$s="select * from subject";
							$re=$db->query($s);
							if($re->num_rows>0)
							{
								echo "<option value=''>select</option>";
								while($r=$re->fetch_assoc())
								{
									echo "<option value='{$r["SNAME"]}'>{$r["SNAME"]}</option>";
								}
							}
						?>
						
					</select>
					<br><br>
				</div>
					<button type="submit" class="btn" name="submit">Add Exam Details</button>
				</form>
				
				
				</div>
				
				
			</div>
	</body>
</html>