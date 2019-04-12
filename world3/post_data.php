<?php
	$link = mysqli_connect("localhost", "root", "", "wp");
	if(isset($_POST["but_upload"]))  
	{  
		$Firstname=mysqli_real_escape_string($link, $_REQUEST['name']);
		$category=mysqli_real_escape_string($link, $_REQUEST['category']);
		date_default_timezone_set('Asia/Kolkata');
		$time = date("h:i:s ");
		$date =  date("Y-m-d ");
		$heading=mysqli_real_escape_string($link, $_REQUEST['heading']);
		$content=mysqli_real_escape_string($link, $_REQUEST['content']);
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
		$sql =   "INSERT INTO news_post(Name,category,time,date,heading,image,content) VALUES ('$Firstname','$category','$time','$date','$heading','$file','$content')";  
		if(mysqli_query($link, $sql))
		{
			echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
		} 
		else
		{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
	}
 mysqli_close($link);
 ?>
 
