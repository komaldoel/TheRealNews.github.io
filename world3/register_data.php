<?php
$link = mysqli_connect("localhost", "root", "", "wp");
 if($link === false)
	{
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
 // Escape user inputs for security
	 $Firstname=mysqli_real_escape_string($link, $_REQUEST['name']);
	$Username=mysqli_real_escape_string($link, $_REQUEST['lastname']);
	$email=mysqli_real_escape_string($link, $_REQUEST['email']);
	$Password=mysqli_real_escape_string($link, $_REQUEST['psw']);
	$Area=mysqli_real_escape_string($link, $_REQUEST['area']);
	$Subarea=mysqli_real_escape_string($link, $_REQUEST['subarea']);
	$Gender=mysqli_real_escape_string($link, $_REQUEST['gender']);
 
// Attempt insert query execution
$sql = ("INSERT INTO register(Firstname,Username,email,Password,Gender,Area,Subarea)values('$Firstname','$Username','$email','$Password','$Gender','$Area','$Subarea')");
if(mysqli_query($link, $sql)){
    echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
	header("Location: registration.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>