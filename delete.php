<?php
	include"database.php";
	session_start();
	
	$sql="delete from class where CID={$_GET["id"]}";
	$db->query($sql);
	echo "<script>window.open('admin_add_class.php?mes=Data Deleted.','_self');</script>"
?>