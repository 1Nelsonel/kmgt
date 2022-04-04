<?php
	include "database.php";
	session_start();
	$sql="delete from subject where SID={$_GET["id"]}";
	$db->query($sql);
	echo "<script>window.open('add_sub.php?mes=Data Deleted..','_self');</script>";
?>