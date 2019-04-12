<?php
include 'post_data.php';
?>

<html>
<head>
           <link rel="stylesheet" href="post.css" />  
           
		   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		
		<script>
			function closeForm1() 
			{
				document.getElementById("myForm").style.display = "none";
			}
		</script>
</head>
<body>
	<form id="myForm">
	<a href="user_view.php"><img src="cros.png" style="width:25px;height:25px;border:0;" align="right"></a>
	</form>
		<div class="container">
		<div class="row3">
					<img src="TRL-log.png" height="40px" width="160px">
				</div>
			<div class="row">
				<div class="col-40" align="center"><br><br><br>
					<img src="TRL-logo11.png" >
				</div>
				
				<div class="col-80">
					<form action="post.php"  id="myForm1" method="post">
						<div class="row1" >	<br><br>
							
							<div class="row">
								<div class="col-25">
									<label for="name"><b>User Name:</b></label>
								</div>
								<div class="col-75">
									<input type="text" placeholder="Enter User Name" name="username" required><br>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="category"><b>Your Password:</b></label>
								</div>
								<div class="col-75">
									<input type="text" name="password" required><br><br><br>
								</div>
							</div>
							<div class="row" align="center">
								<button type="submit" class="registerbtn1" name='Get_Password'><b>Get Password<b></button><br><br><br><hr color="grey">
							</div>
							<p align="center"> Type here if you want to change your password !!!</p><br>
							<div class="row">
								<div class="col-25">
									<label for="category"><b> Password:</b></label>
								</div>
								<div class="col-75">
									<input type="text" name="password" required><br>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="category"><b>Confirm Password:</b></label>
								</div>
								<div class="col-75">
									<input type="text" name="conpassword" required><br><br>
								</div>
							</div>
							
							<br>
							<div class="row" align="center">
								<button type="submit" class="registerbtn1" name='Create_Password'><b>Create Password<b></button><br><br>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	
</body>
</html>
