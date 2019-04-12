
<html>
<head>
  	 <link rel="stylesheet" href="post.css">  
	 	<script>
	function checkPass()
{
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message = document.getElementById('error-nwl');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
 	
    if(pass1.value.length > 5)
    {
        message.style.color = goodColor;
        message.innerHTML = "character number ok!"
		 Register.disabled = true;
    }
    else
    {
        message.style.color = badColor;
        message.innerHTML = " you have to enter at least 6 digit password!"
        return;
		Register.disabled = true;
    }
  
    if(pass1.value == pass2.value)
    {
        message.style.color = goodColor;
        message.innerHTML = "ok!"
		Register.disabled = false;
    }
	else
    {
        message.style.color = badColor;
        message.innerHTML = " These passwords don't match"
		Register.disabled = true;
    }
}  
	</script>
<script type="text/javascript">
function validate()
{
var str;
var t=1;
var message = document.getElementById('error-nw');
     var goodColor = "#66cc66";
    var badColor = "#ff6666";
str =document.getElementById('email').value;
if(document.getElementById('email').value==" ")
{
message.style.color = badColor;
        message.innerHTML ="Empty"
Register.disabled = true;
}
var res = str.split('@');
if(str.split('@').length!=2)
{
message.style.color = badColor;
        message.innerHTML ="Invalid Email address"
t=0;
Register.disabled = true;
}
var part1=res[0];
var part2=res[1];

// part1
if(part1.length==0)
{
message.style.color = badColor;
        message.innerHTML ="Empty"

t=0;
Register.disabled = true;
}
if(part1.split(" ").length>2)
{
	message.style.color = badColor;
        message.innerHTML ="Invalid:Space before @"
t=0;
Register.disabled = true;
}

//chk afr @ content:  part2
var dotsplt=part2.split('.');  //alert("After @ :"+part2);
if(part2.split(".").length<2)
{
message.style.color = badColor;
        message.innerHTML ="Invalid Email address "
t=0;
Register.disabled = true;
}
if(dotsplt[0].length==0 )
{
	message.style.color = badColor;
        message.innerHTML ="no content b/w @ and dot"
t=0;
Register.disabled = true;
}
if(dotsplt[1].length<2 ||dotsplt[1].length>4)
{message.style.color = badColor;
        message.innerHTML ="err aftr dot"
t=0;
Register.disabled = true;
}

if(t==1){
 message.style.color = goodColor;
        message.innerHTML = "ok!"
		Register.disabled = false;
}
}

</script>

</script>	
  </head>
	<body>
	
	<a href="home.php"><img src="cros.png" style="width:25px;height:25px;border:0;" align="right"></a>
		<div class="container">
		<div class="row3">
					<img src="TRL-log.png" height="40px" width="160px">
				</div>
			<div class="row">
				<div class="col-20" align="center"><br><br><br>
					<img src="TRL-logo11.png" >
				</div>
				<div class="col-80">
					<form action="register_data.php"  method="post">
					<div class="row2" >	<center>
						<h1><u>Register</u></h1>
						<p>Please fill in this form to create an account.</p></center>
						<hr color="grey">
							<div class="row">
								<div class="col-25">
									<label for="name"><b>Name</b></label>
								</div>
								<div class="col-75">
									<input type="text" placeholder="Enter Name" name="name" required><br>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
								<label for="lastname"><b>User Name</b></label>
								</div>
								<div class="col-75">
									<input type="text" placeholder="Enter User Name" name="lastname" required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="email"><b>Email ID</b></label>
								</div>
								<div class="col-75">
									<input type="text" placeholder="Enter Email" name="email" id="email" onkeyup="validate(); return false;">
								</div>
							</div>
<div id="error-nw" align="center"></div>
							<div class="row">
								<div class="col-25">
									<label for="psw"><b>Password</b></label>
								</div>
								<div class="col-75">
									<input  type="password" placeholder="Enter Password" name="psw"  id="pass1" onkeyup="checkPass(); return false;" required>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="psw-repeat"><b>Confirm Password</b></label>
								</div>
								<div class="col-75">
									<input type="password" placeholder="Confirm Password" name="psw-repeat" id="pass2" onkeyup="checkPass(); return false;" required>
								</div>
							</div><div id="error-nwl" align="center"></div>
							<div class="row">
								<div class="col-25">
									<label for="area"><b>Select Area</b></label>
								</div>
								<div class="col-75">
									<select name="area" class="drop" required>
										<option><b>-------</b></option>
										<option>
										<?php  
											$connect = mysqli_connect("localhost", "root", "", "wp");  
											$query = "SELECT * FROM area";  
											$result = mysqli_query($connect, $query); 
											while($row = mysqli_fetch_array($result))  
											{
												echo $row["area_name"];  
											}
										?>
										</option>
										
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="area"><b>Select SubArea</b></label>
								</div>
								<div class="col-75">
									<select name="subarea" class="drop" required>
										<option><b>-------</b></option>
										<option>
										<?php  
											$connect = mysqli_connect("localhost", "root", "", "wp");  
											$query = "SELECT * FROM subarea";  
											$result = mysqli_query($connect, $query); 
											while($row = mysqli_fetch_array($result))  
											{
												echo $row["subarea"];  
											}
										?>
										</option>
										
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="gender"><b>Gender</b></label>
								</div>
								<div class="col-75">
									<input type="radio" name="gender" value="F" required>Female
									<input type="radio" name="gender" value="M" required>Male
								</div>
							</div>
							<br><br>
							<div class="row" align="center">
								<button type="submit"  name='Register' disabled="true" id="Register"><b>Register<b></button>
							</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
