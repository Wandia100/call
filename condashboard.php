<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Guidance and Counselling</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>
<?php include('header.php'); ?>







	<!-- this is for student registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Counsellor Panel</h3>
		
		
	<span class="adminDashboard" style="font-size: 85px;font-weight: bold;color: blue;font-family: serif;margin-left: 180px;background-color: black;">Welcome To Counsellors Panel</span>
		
			
		
	</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
