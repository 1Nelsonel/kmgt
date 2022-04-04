<?php
	include "database.php";
	session_start();
	$sql="delete from mtiani where EID={$_GET["id"]}";
	$db->query($sql);
	echo "<script>window.open('view_exam.php?mes=Data Deleted...','_self');</script>";


?>