<?php
include 'post_data.php';
?>

<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="post.css" />  
           
		   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		
		<script>
			function openForm1() 
			{
				document.getElementById("myForm").style.display = "block";
			}
			function closeForm1() 
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
 <script>
 var uploadField = document.getElementById("image");

uploadField.onchange = function() {
    if(this.files[0].size > 9500){
       alert("File is too big!");
       this.value = "";
    };
};
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
				<div class="col-20" align="center"><br><br><br>
					<img src="TRL-logo11.png" >
				</div>
				
				<div class="col-80">
					<form action="post.php"  id="myForm1" method="post" enctype="multipart/form-data">
						<div class="row1" >	
							
							<div class="row">
								<div class="col-25">
									<label for="name"><b>Name:</b></label>
								</div>
								<div class="col-75">
									<input type="text" placeholder="Enter Name" name="name" required><br>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="category"><b>Category:</b></label>
								</div>
								<div class="col-75">
									<select name="category" width=34% height=10% required>
										<option value=""><b>----<b></option>
										 
										<?php  
											$connect = mysqli_connect("localhost", "root", "", "wp");  
											$query = "SELECT category FROM news_category";  
											$result = mysqli_query($connect, $query);  
											while($row = mysqli_fetch_array($result))  
											{
												echo "<option value='". $row["category"] ."'>" .$row["category"] ."</option>" ; 
											} 
										?>
										
										
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="file_upload"><b>File Upload:</b></label>
								</div>
								<div class="col-75">
									<input type="file" name="image" id="image" />  
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="heading"><b>Heading:</b></label>
								</div>
								<div class="col-75">
									<textarea placeholder="Write something.." style="height:70px" required name="heading">
									</textarea>	
								</div>
							</div>
							<div class="row">
								<div class="col-25">
									<label for="heading"><b>Content</label>
								</div>
								<div class="col-75">
									<textarea placeholder="Write something.." style="height:350px" required name="content">
									</textarea>
								</div>
							</div>
							<br>
							<div class="row" align="center">
								<button type="submit" class="registerbtn1" name='but_upload' id="insert"><b>Post<b></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	
</body>
</html>
