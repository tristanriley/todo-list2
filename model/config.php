<?php

	require_once(__DIR__ . "/Database.php");
	//starts the session
	session_start();
	//prevents hackers from using previusly authenticated users to access the website
	session_regenerate_id(true);

	//displays the post page
	$path = "/todo-list2/"; 
	//a variable that stores the string "localhost"
	$host = "localhost"; 
	//a variable that stores the string "root" 			//database.php contnents now integrated into config.php file
	$username = "root"; 
	//a variable that stores the string "root"
	$password = "root"; 
	//a variable that stores the string "todo2"
	$database = "todo2";

	//checks if the session variable exists.  if it doesn't, the connection gets created
	if(!isset($_SESSION["connection"])){
		$connection = new Database($host, $username, $password, $database);
		//session variable.  saves database object so that it only gets created once
		$_SESSION["connection"] = $connection;
	}