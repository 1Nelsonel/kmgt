<?php
	include"database.php";
	session_start();
	$sql="delete from teacher where tid={$_GET["id"]}";
	$db->query($sql);
	echo"<script>window.open('view_staff.php?mes=Data Deleted...','_self');</script>";

?>