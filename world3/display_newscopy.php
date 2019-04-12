<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title  -->
    <title>The Real Leader News</title>
    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
	</HEAD>
<body>
<div class="main-content-wrapper section-padding-100">
			<div class="container">
				<div class="world-latest-articles">
					<div class="row">
						<div class=" col-md-8">
		
                    <div class="single-blog-content mb-100">
                        <!-- Post Meta -->
                        <?php 
							if(isset($_GET['id'])){							
							$a=$_GET['id'];
								$connect = mysqli_connect("localhost", "root", "", "wp");  
								$query = "SELECT * FROM news_post where post_ID ='$a' order by post_ID desc";  
								$result = mysqli_query($connect, $query); 
					            while($row = mysqli_fetch_array($result))  
								{
							?>  
							<div class="imgi" align="center">
							<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"  />';?>
								
							</div>
							<div class="post-meta mt-50">
										<p><a href="#" class="post-author"><?php echo $row["Name"];  ?></a> on <a href="#" class="post-date"><?php echo $row["date"];  ?> at <?php echo $row["time"];  ?></a></p>
									</div>
									 <div class="post-content">
						 <blockquote class="mb-30">
                                <h6><?php echo $row["heading"];  ?> <div class="post-author">
                                   
                                </div>
                            </blockquote>
                       <h6><?php echo $row["content"];  ?></h6>
                          <div class="post-meta second-part">
										<p><a href="#" class="post-author"><?php echo $row["Name"];  ?></a> on <a href="#" class="post-date"><?php echo $row["date"];  ?> at <?php echo $row["time"];  ?></a>
</p>
									
									</div>
												
<?php }}?>
						       </div><div align="right"><button type="submit"><img src='edit-icon.png' height='10px'></button></div>
                        
                                </div></div></div></div></div></div>
								
</body>
</html>