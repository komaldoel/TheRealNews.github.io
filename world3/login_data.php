<?php
$user = $_POST['username'];
$pass = $_POST['password'];
$server = "localhost";
$username = "root";
$password = "";
$database = "wp";
$tablename = "register";
if ($user&&$pass)

{
$connect = mysql_connect($server,$username,$password) or die("not connecting");
mysql_select_db($database) or die("no db :");
$query = mysql_query("SELECT * FROM $tablename WHERE Username='$user' and
Password='$pass'");
$numrows = mysql_num_rows($query);
if ($numrows!=0)
{
header("Location:user_view.php");
}
else
echo "user does not exist!";
}
else
die("please enter a username and password!");
?>