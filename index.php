<!DOCTYPE html>
<html>
	<head>
		<title>Todo-List</title>
		<!-- links main css file -->
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<div class="wrap"></div>
		<div class="task-list">
			<ul>
				<!-- inserts connect.php file into this div -->
				<?php require("includes/connect.php"); ?>
			</ul>
		</div>
		<!-- inserts a box for inserting text -->
		<form class="add-new-task" autocomplete = "off">
			<input type="text" name="new-task" placeholder="Add new item..."/> 
		</form>
	</body>
</html>