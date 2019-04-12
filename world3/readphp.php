<html>
<head>
<title>Read Data From Database Using PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<style>
@import "http://fonts.googleapis.com/css?family=Droid+Serif";
/* Above line is to import google font style */
.maindiv {
margin:0 auto;
width:980px;
height:500px;
background:#fff;
padding-top:20px;
font-size:14px;
font-family:'Droid Serif',serif
}
.title {
width:100%;
height:70px;
text-shadow:2px 2px 2px #cfcfcf;
font-size:16px;
text-align:center;
font-family:'Droid Serif',serif
}
.divA {
width:70%;
float:left;
margin-top:30px
}
.form {
width:400px;
float:left;
background-color:#fff;
font-family:'Droid Serif',serif;
padding-left:30px
}
.divB {
width:100%;
height:100%;
background-color:#fff;
border:dashed 1px #999
}
.divD {
width:200px;
height:480px;
padding:0 20px;
float:left;
background-color:#f0f8ff;
border-right:dashed 1px #999
}
p {
text-align:center;
font-weight:700;
color:#5678C0;
font-size:18px;
text-shadow:2px 2px 2px #cfcfcf
}
.form h2 {
text-align:center;
text-shadow:2px 2px 2px #cfcfcf
}
a {
text-decoration:none;
font-size:16px;
margin:2px 0 0 30px;
padding:3px;
color:#1F8DD6
}
a:hover {
text-shadow:2px 2px 2px #cfcfcf;
font-size:18px
}
.clear {
clear:both
}
span {
font-weight:700
}
</style>
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Read Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("company", $connection); // Selecting Database
//MySQL Query to read data
$query = mysql_query("select * from employee", $connection);
while ($row = mysql_fetch_array($query)) {
	 echo '<a href="readphp.php?id=' . $row['employee_id'] . '">' . $row['employee_name'] . '</a>';

echo "<br/>";
}
?>
</div>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$query1 = mysql_query("select * from employee where employee_id=$id", $connection);
while ($row1 = mysql_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>Name:</span> <?php echo $row1['employee_name']; ?>
<span>E-mail:</span> <?php echo $row1['employee_email']; ?>
<span>Contact No:</span> <?php echo $row1['employee_contact']; ?>
<span>Address:</span> <?php echo $row1['employee_address']; ?>
</div>
<?php
}
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysql_close($connection); // Closing Connection with Server
?>
</body>
</html>