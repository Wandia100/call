<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script src="index.js"></script>

    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
    ></script>
    <script src="index.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init("HCkXdydJCcrzrIbkT");
   })();
</script>
  </head>
<body>


<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Inform us</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					<img src="../photo/<?php echo @$pic; ?>" style="padding-left:40px;width:165px;height:115px;float: left;margin-bottom:10px;margin-left:35px;"/>
					<label>
						 <input type="file" name="pic" value="<?php {echo @$pic;} ?>">
					</label><br><br>

					<label>
						Your Name: <input type="text" name="name" value="<?php echo $name; ?>" required>
					</label><br><br>

 					<label>
						Address: <input type="text" name="address" value="<?php echo $address; ?>"  required>
					</label><br><br>

					
					<label>
						Contact: <input type="text" name="contact" value="<?php echo $contact; ?>"  required="required" />
					</label><br><br>
 					<label>
						Email: <input type="email" name="email" value="<?php echo $email; ?>" " required>
					</label><br><br>
					<label>
						Userid: <input type="text" name="userid" value="<?php echo $userid; ?>"  disabled>
					</label><br><br>
					<label>
						Expert in: <input type="email" name="email" value="<?php echo $expertise; ?>"  disabled>
					</label><br><br>

					

					
					
					<button name="submit" type="submit" style="margin-left:30px;width:108px;border-radius: 3px;">UpdateProfile</button> <br>


			</form> <br><br>

	</div>
	
	
</div>


			<!-- update information -->

				<?php

						include('connect.php');
						if(isset($_POST['submit'])){
							

							$sql="UPDATE counsellor SET name='" .$_POST["name"]. "' ,address='" .$_POST["address"]."' , contact='" .$_POST["contact"]. "',email='" .$_POST["email"]. "' ,pic='" .$_POST["pic"]. "' WHERE userid='" . $_SESSION["userid"] . "'";
		
							if (mysqli_query($conn, $sql)) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 
			<!-- update information End -->


  <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>



</body>