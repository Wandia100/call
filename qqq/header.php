<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>counselling management system</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>


<?php
		if($_SESSION['adminstatus'] == ""){
			header("location:qqq/header.php");
		}
		
		   

	 ?>


<div class="container-fluid">
		<div class="header_top">
			<span style="font-size:50px;color:#2c2f84;font-weight:bolder;margin-left:15px;">Admin System</span>
		</div>

	<!-- 	this is for menu -->
	<div class="navbar navbar-default nav">
		<nav class="menu">
			<ul>
				
				
				
				<li><a href="addcounsellor.php">Add Counsellor</a></li>
				<li><a href="viewcounsellor.php">View Counsellor</a></li>
				<li><a href="viewstudent.php">View student</a></li>
				<li><a href="viewAppoinment.php">View Appoinment</a></li>
				<li><a href="viewFeedback.php">View Feedback</a></li>
			
				<li><a href="index.php">Logout</a></li>
			</ul>
		</nav>
	</div>
	
