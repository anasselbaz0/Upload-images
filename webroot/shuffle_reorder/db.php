<?php
class database{
function __construct(){
	$dbserver = 'localhost';
	$dbusername = 'root';
	$dbpassword = '';
	$dbname = 'db_upload'; 
	$con = mysqli_connect($dbserver,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_errno()){
		die("Error! Failed To Connect To Database: ".mysqli_connect_error());
	}else{
		$this->connect = $con;
	}
}
function getRows(){
	$query = mysqli_query($this->connect,"SELECT * FROM `images` ORDER BY `ordre` ASC") or die(mysql_error());
	while($row = mysqli_fetch_assoc($query))
	{
		$rows[] = $row;
	}
	return $rows;
}
function updateOrder($id_array){
	$count = 1;
	foreach ($id_array as $id){
		$update = mysqli_query($this->connect,"UPDATE `images` SET `ordre` = $count WHERE id = $id");
		$count ++;	
	}
	return true;
	}
}
?>