<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>




	<!-- this is for donor registraton -->
	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Add counsellor</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:320px; margin-bottom:30px;background-color: #101011;color:#d4530d;;">
		<form enctype="multipart/form-data" method="post" class="text-center" style="margin-left: 110px">
			 <div class="col-md-12">
				  
			 		<label>
					    <input type="text" name="counsellor_id" value="" placeholder="counsellor_id" required>
					</label><br><br>
					<label>
					    <input type="text" name="name" value="" placeholder="Full name" required>
					</label><br><br>
					<label>
						 <input type="text" name="userid" value="" placeholder="userid" required>
					</label><br><br>
					<label>
					<label>
						 <input type="text" name="address" value="" placeholder="address" required>
					</label><br><br>
					<label>
						 <input type="text" name="contact" value="" placeholder="contact" required>
					</label><br><br>

					<label>
						 <input type="email" name="email"  value="" placeholder="email" required>
					</label><br><br>
					<label>
						 <input type="password" name="password"  value="" placeholder="password" required>
					</label><br><br>
					<label>
						 <select name="expertise" required>
										<option>-Expert in-</option>
										<option>Mental health</option>
										<option>Drug Abuse</option>
										<option>Coureer _Guidance</option>
										<option>Academics</option>
										
									</select>
					</label><br><br>
					<label>
					     <input type="text" name="id" value="" placeholder="id" required>
					</label><br><br>
					
					
					
					<button name="submit" type="submit" style="margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px">Add</button> <br>
				
			</div>	<!-- col-md-12 -->


				</form>
			</div>




	</div>
	
	

 <!-- validation and insertion -->


			<?php
						include('connect.php');
						if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO counsellor (counsellor_id,name,userid,address,contact,email,password,expertise,id)
							VALUES ('" . $_POST["counsellor_id"] ."','" . $_POST["name"] . "','" . $_POST["userid"] . "','" . $_POST["address"] . "','" . $_POST["contact"] . "','" . $_POST["email"] . "','". $_POST["password"] . "','" . $_POST["expertise"] . "','" . $_POST["id"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('New Counsellor Has been Added Successfully!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					?> 



	<!-- validation and insertion End-->

	
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


	



</body>
</html>