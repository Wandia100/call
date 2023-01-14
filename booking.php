<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header1.php'); ?>

	
<!-- result -->
<?php 
	$coun_id = isset($_GET['coun_id'])?$_GET['coun_id']:"";
	
 ?>
				<!-- fetching counsellor info -->
					<?php 
					include('connect.php');
					

							$sql="SELECT * FROM counsellor WHERE coun_id = $coun_id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $coun_id   = $row["coun_id"];
							        $name 	= $row["name"];
							        $expertise 	= $row["expertise"];
							        $contact 	= $row["contact"];
									 $userid = $row["userid"];
							    }
							}
							
							$conn->close();

					?>
					<!-- fetching counsellor info -->

	<!-- 	booking info-->
		<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Book Appoinment</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group" enctype="multipath/form-data">
					

					<label>
						counsellor name: <input type="text" name="cname" value="<?php echo $name; ?>" >
					</label><br><br>

 					<label>
						Contact: <input type="text" name="ccontact" value="<?php echo $contact; ?>" />
					</label><br><br>
 					
					<label>
						Category: <input type="text" name="expertise" value="<?php echo $expertise; ?>" >
					</label><br><br>

					
					<label>
						Your Name: <input type="text" name="sname" value="">
					</label><br><br>

 					<label>
						 Contact: <input type="text" name="scontact" value=""/>
					</label><br><br>
					<label>
						 E-mail: <input type="email" name="email" value=""/>
					</label><br><br>
 					
					<label>
						 Address: <input type="text" name="address" value="">
					</label><br><br>
					<label>
						 Date: <input type="date" name="dates" value="">
					</label><br><br>
					<label>
						 Time: <select name="tyme" required>
										<option value="">-select-</option>
										<option value="11.00am">11.00am</option>
										<option value="03.00pm">03.00pm</option>
									</select>
					</label><br><br>
					
					<label>
						  <input type="hidden" name="userid" value="<?php echo $userid; ?>">
					</label><br><br>
					
					<button name="submit" type="submit" style="padding-right:5px;border-radius:3px;margin-right:;">Confirm</button> 
					<a href="search_counsellor.php"><button name="" type="" style="padding-right:5px;border-radius:3px;margin-right:-150px;">Cancel</button></a> <br>


				</form> <br><br>

			</div>
	
	
		</div>
				<!-- 	booking info-->
				
			<!-- confirming booking -->
					<?php

						include('connect.php');
						if(isset($_POST['submit'])){
							

						$sql = " INSERT INTO booking (cname,userid,ccontact,expertise, sname,scontact,email,address,dates,tyme)
							VALUES ('" . $_POST["cname"] . "','" . $_POST["userid"] . "','" . $_POST["ccontact"] . "','" . $_POST["expertise"] . "','" . $_POST["sname"] . "','". $_POST["scontact"] . "','". $_POST["email"] . "','". $_POST["address"] . "','". $_POST["dates"] . "','". $_POST["tyme"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Your booking has been accepted!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					?> 

				<!-- confirming booking -->

	
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
