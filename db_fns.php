<?php
function db_connect(){
	$result=new mysqli('localhost','root','root','bookmark');
	if (!$result) {
		throw new Exception("Could not connect to database");
	}
	else{
		return $result;
	}
}
?>