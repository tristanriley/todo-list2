<!DOCTYPE html>
<html>
	<head>
		<title>Todo-List</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/reset.css">
	</head>
	<body>
		<div class="wrap"></div>
		<div class="task-list">
			<ul>
				<?php require("inludes/connect.php"); ?>
			</ul>
		</div>
		<form class="add-new-task" autocomplete = "off">
			<input type="text" name="new-task" placeholder="Add new item..."/> 
		</form>
	</body>
</html>