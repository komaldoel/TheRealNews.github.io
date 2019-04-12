


<a class="active"  href="a.php?category=pathankot">Category</a> 
<a href="a.php?category=sujanpur">Cat</a> 




<?php
if(isset($_GET['category'])){
$a=$_GET['category'];

							
								$connect = mysqli_connect("localhost", "root", "", "wp");  
								$query = "SELECT * FROM news_post where category ='$a' order by post_ID desc";  
								$result = mysqli_query($connect, $query); 
					            while($row = mysqli_fetch_array($result))  
								{
								
								   
    $string = $row['content'];
    if (strlen($string) > 150) {
        // truncate string
        $stringCut = substr($string, 0, 150);
        // make sure it ends in a word...
        $string = substr($stringCut, 0, strrpos($stringCut, ' '))."....."; 
    }
    echo ".$string."  ;
								
								}
								
}

?>