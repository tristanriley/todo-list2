<?php
	$mysqli = me mysqli('localhost', 'root', 'root', 'tasks');
	//if $mysqli fails, then it dies and gives message
	if ($mysqli->connect_error){
		die('Connect Error (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
	}
	else{
		echo "Connection Made";
	}
	$mysqli->close();
?>