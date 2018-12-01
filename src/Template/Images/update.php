<?php
include_once('db.php');
	$db = new database();
	$idArray = explode(",",$_POST['ids']);
	$db->updateOrder($idArray);
?>