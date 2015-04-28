<meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link href='http://fonts.googleapis.com/css?family=Black+Ops+One' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/main.css"> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css.map">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width">
		<meta name="viewport" content="width=320">
		<title>Blogs</title>
	</head>
	
	<header id="header">
		Welcome to Tristans webpage.
	</header>

	<body>

	<div class="links">
		<ul>
			<button type="button" class="btn btn-default btn-lg link">
				<a href="<?php echo $path . "register.php"?>"><span class="glyphicon glyphicon-user "></span></p> Register </a>
			</button>
			<button type="button" class="btn btn-default btn-lg link">
				<a href="<?php echo $path . "login.php"?>"> <span class="glyphicon glyphicon-log-in"></span></p>Login </a>
			</button>

			<button type="button" class="btn btn-default btn-lg link">
				<a href="<?php echo $path . "controller/logout-user.php"?>"><span class="glyphicon glyphicon-log-out"></span></p> Logout </a>
			</button>
		</ul>
	</div>

	<div id="homemogul" class="button active">
		  <div class="square square-1"></div>
		  <div class="square square-2"></div>
		  <div class="square square-3"></div>
		  <div class="square square-4"></div>
		  <div class="square square-5"></div>
		  <div class="square square-6"></div>
		  <div class="circle" data-toggle="modal" data-target="#myModal">
		    <img src="https://acanvasoftheminds.files.wordpress.com/2014/11/dont-raise-your-voice.jpg" class="img-circle">
		  </div>
	</div>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		    <h4 class="modal-title" id="myModalLabel">Webpage Poject.</h4>
		  </div>
		  <div class="modal-body">
		    <img class="img-responsive"	id="mogulpara"	src="http://quotesnsmiles.com/wp-content/uploads/2012/12/Albert-Einstein-Simple-Picture-Quote.jpg">

			<p>
				This webpage is a blog for my app academy class.
							
	