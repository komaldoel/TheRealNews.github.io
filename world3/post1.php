<?php
$link = mysqli_connect("localhost", "root", "", "wp");
 if(isset($_POST["but_upload"]))  
 {  
  
 
 // Escape user inputs for security
	 $Firstname=mysqli_real_escape_string($link, $_REQUEST['name']);
	$category=mysqli_real_escape_string($link, $_REQUEST['category']);
	$time=mysqli_real_escape_string($link, $_REQUEST['time']);
	$date=mysqli_real_escape_string($link, $_REQUEST['date']);
	$heading=mysqli_real_escape_string($link, $_REQUEST['heading']);
	$content=mysqli_real_escape_string($link, $_REQUEST['content']);
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
// Attempt insert query execution
$sql =   "INSERT INTO news_post(Name,category,time,date,heading,image,content) VALUES ('$Firstname','$category','$time','$date','$heading','$file','$content')";  
     if(mysqli_query($link, $sql)){
    echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

 }
 }
 mysqli_close($link);
?>

<html>
<head>
  	<link rel="stylesheet" type="text/css" href="registration1_style.css"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		
		<script>
			function openForm() 
			{
				document.getElementById("myForm").style.display = "block";
			}
			function closeForm() 
			{
				document.getElementById("myForm").style.display = "none";
			}
		</script>
		<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
		<style>



/* The popup form - hidden by default */
.form-popup1 {
  display: none;
  position: static;
  bottom: 20px;
  top:40px
  right: 25px;
  left:25px;
  
 
	z-index: 9;
  width:800px
}

/* Add styles to the form container */
.form-container1 {
  align:center;
  max-width:800px;
  padding: 0px;
  background-color: white;
}






/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>


</head>
<body>
<button class="open-button" onclick="openForm()"name='but_upload'><b>Post<b></button>
				<center>
	<div class="form-popup1" id="myForm" align="center">
  <form action="post.php" class="form-container1" method="post" enctype="multipart/form-data">
  <img src="cros.png" style="width:20px;height:20px;border:0;" align="right" onclick="closeForm()">
				
			<h1><u>Post your Lead</u></h1>
			<hr>
			<TABLE>
				<tr>
					<td>
						<table>
							<tr>
								<td width=32%>
									<label for="name"><b>Name:</b></label>
								</td>
								<td>
									<input type="text" placeholder="Enter Name" name="name" required><br>
								</td>
							</tr>
							<tr>
								<td>
									<label for="category"><b>Category:</b></label>
								</td>
								<td>
									<select name="category" width=34% height=10% required>
										<option value=""><b>----<b></option>
										<option value="pathankot">Home</option>
										<option value="sujanpur">Our City</option>
										<option value="gurdaspur">State</option>
										<option value="dinanagar">Sports</option>
									</select><br> <br>
								</td>
							</tr>
							<tr>
								<td>
									<label for="file_upload"><b>File Upload:</b></label>
								</td>
								<td>
									            <input type="file" name="image" id="image" />  
								</td>
							</tr>
							<!tr>
								<!td align="right" colspan="2">
									<!input type="submit" name="submit" value="Upload">
								<!/td>
							<!/tr>
							<tr>
								<td>
									<label for="heading"><b>Heading:</b></label>
								</td>
								
								<td colspan="2">
									<textarea cols="35" rows="8" required name="heading"></textarea><br><br><br><br><br><br>
								</td>
							</tr>
						</table>
					</td>
				
					<td height=	50% width=50%>Content:
						<textarea cols="46" rows="25" required name="content"></textarea><br>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<button type="submit" class="registerbtn" name='but_upload'><b>Post<b></button>
					</td>
				</tr>
				
			<table>
		
			</form>	
		</div>
	</center>
</body>
</html>
