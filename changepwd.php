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


<?php include('uptomenu.php'); ?>




	<!-- this is for student registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;;color: #fff;padding: 5px;">Change Password</h3>
		<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center">
					<label>
						<span style="color: #000">Old Password:</span><input type="password" name="password"  placeholder="Current password" required>
					</label><br><br>
					<label>
						<span style="color: #000">new Password:</span><input type="password" name="newpassword"  placeholder="New password" required>
					</label><br><br>
					<label>
						<span style="color: #000">confirm Password:</span><input type="password" name="confpassword"  placeholder=" confirm password" required>
					</label><br><br>
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-right: -51px;">Update Password</button> <br>

					


					<!-- login validation -->
			<?php 
					
							
							include('connect.php');
							if(isset($_POST["submit"])){
							

							$sql= "SELECT * FROM studentreg WHERE email= '" . $_SESSION["email"]."' AND password= '" . $_POST["password"]."'";

							$query=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($query);

							if($row>0){
								//check the new password
								if($newpassword==$confpassword){
								
								$sql1="UPDATE studentreg SET password='" . $_POST["newpassword"]  ."' WHERE email='" .$_SESSION["email"] ."'";
								mysqli_query($conn,$sql1);
								mysqli_close($conn);
								echo "<script>alert('Password Has been Updated');</script>";
								
								}else{
									echo "<script>alert('Password did not match');</script>";

								}


							}else{
								echo "<script>alert('Input Correct Password');</script>";
							}
									
										
								
					}
					
 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>

				
		
				
			
		
	</div>
		
		
			
		
	</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
