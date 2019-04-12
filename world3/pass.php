<?php
include 'post.php';
?>

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
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="post.css">
	
	<script language="Javascript">MyBanners=new Array('TRL-long-banner.png','UPFC-long-banner.png','YI-Cafe-advt-long-banner.png')
		banner=0
		function ShowBanners()
		{ 
			if (document.images)
			{ 
				banner++
				if (banner==MyBanners.length) 
				{
					banner=0
				}
				document.ChangeBanner.src=MyBanners[banner]
				setTimeout("ShowBanners()",1500)
			}
		}
		</script>
		
		
		
	</head>
	<body onload="ShowBanners()">
		<!-- Preloader Start -->
		<div id="preloader">
			<div class="preload-content">
				<div id="Trl-load"></div>
			</div>
		</div>
		<!-- Preloader End -->
		<!-- ***** Header Area Start ***** -->
		<header class="header-area1">
			<div class="container">
				<div class="row">
					<div class="col-12">
                                  <!-- Logo -->
			             <img src="img/core-img/trl-logo.png" alt="Logo" width="250" height="200">
                        <!-- Search Form  -->
                        <div id="search-wrapper" >
                            <form action="#">
                                <input type="text" id="search" placeholder="Search something...">
                                <div id="close-icon"></div>
                                <input class="d-none" type="submit" value="">
                            </form>
                        </div>
                    </div>
                </div>
			</div>
		</header><!-- ***** Header Area End ***** -->
		<header class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-11">
						<nav class="navbar navbar-expand-lg">
						<!-- Navbar Toggler -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav"
								aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span
								class="navbar-toggler-icon"></span></button>
							<!-- Navbar -->
							<div class="collapse navbar-collapse" id="worldNav">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item active">
										<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
										   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our City</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="index.html">Pathankot</a>
											<a class="dropdown-item" href="catagory.html">Sujanpur</a>
											<a class="dropdown-item" href="single-blog.html">Gurdaspur</a>
											<a class="dropdown-item" href="regular-page.html">Dinanagar</a>
											<a class="dropdown-item" href="contact.html">Nurpur</a>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">World</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Countries</a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
										   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">States</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="index.html">Punjab</a>
											<a class="dropdown-item" href="catagory.html">Himachal</a>
											<a class="dropdown-item" href="single-blog.html">Jammu & Kashmir</a>
										</div>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
										   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sports</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="index.html">Cricket</a>
											<a class="dropdown-item" href="catagory.html">Football</a>
											<a class="dropdown-item" href="single-blog.html">Tennis</a>
											<a class="dropdown-item" href="single-blog.html">other sports</a>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Technology</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Entertainment</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="#">Business</a>
									</li><li class="nav-item">
										<a class="nav-link" href="#">Education</a>
									</li>
									 </li><li class="nav-item">
										<a class="nav-link" href="#">Startups</a>
									</li> </li><li class="nav-item">
										<a class="nav-link" href="#">Others</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-1" align="right">
						<img src="user.png" alt="Home" class="open-button" onclick="openForm1()" style="width:55px;height:45px;border:0;">
                    </div >
					</nav>
				</div>
			</div>
			
		</header>
		<div class="main-content-wrapper section-padding-100">
			<div class="container">
				<div class="world-latest-articles">
					<div class="row">
						<div class="col-12 col-lg-8">
							<div>
								<center>

									<hr>Click on Post to add your Lead !!!<hr>
									<img src="photo.png" height="45px" width="45px"> Photo		
									<img src="video.png" height="45px" width="45px">Video
									<input type="submit" value="Post" onclick="openForm11()" width="150">
									</center>
							</div>					
							<div  class="title">
								<h5>BigNews
								Pathankot
								Videos
                            </div>
							<!-- Single Blog Post -->
					<?php  
								$connect = mysqli_connect("localhost", "root", "", "wp");  
								$query = "SELECT * FROM news_post order by post_ID desc";  
								$result = mysqli_query($connect, $query); 
					            while($row = mysqli_fetch_array($result))  
								{
							?>  
							<div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
							<!-- Post Thumbnail -->
								<div class="post-thumbnail">
									<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="150px" width="200px" class="img-thumnail" />';?>
								</div>
								<!-- Post Content -->
								<div class="post-content">
									<a href="#" class="headline">
										<h5><?php echo $row["heading"];  ?></h5>
									</a>
									<p><?php echo $row["content"];  ?></p>
									<!-- Post Meta -->
									<div class="post-meta">
										<p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29,2017 at 9:48 am</a></p>
									</div>
								</div>
							</div>
							<?php }?>
						</div>
						<!-- ========== Sidebar Area ========== -->
						<div class="col-12 col-md-8 col-lg-4">
							<div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
								<!-- Widget Area -->
								<div class="sidebar-widget-area">
                                    <div class="widget-content" >
										<img src="b1.png" name="ChangeBanner"/>                        
									</div>
								</div>
								<!-- Widget Area -->
								<div class="sidebar-widget-area">
									<h5 class="title">Top Stories</h5>
									<div class="widget-content">
										<!-- Single Blog Post -->
										<div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
										<!-- Post Thumbnail -->
											<div class="post-thumbnail">
												<img src="img/blog-img/b11.jpg" alt="">
											</div>
											<!-- Post Content -->
											<div class="post-content">
												<a href="#" class="headline">
													<h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
												</a>
											</div>
										</div>
										<!-- Single Blog Post -->
										<div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
											<!-- Post Thumbnail -->
											<div class="post-thumbnail">
												<img src="img/blog-img/b13.jpg" alt="">
											</div>
											<!-- Post Content -->
											<div class="post-content">
												<a href="#" class="headline">
													<h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
												</a>
											</div>
										</div>
                                    </div>
									<!-- Widget Area -->
									<div class="sidebar-widget-area">
										<h5 class="title">Stay Connected</h5>
										<div class="widget-content">
											<div class="social-area d-flex justify-content-between">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-pinterest"></i></a>
												<a href="#"><i class="fa fa-vimeo"></i></a>
												<a href="#"><i class="fa fa-instagram"></i></a>
												<a href="#"><i class="fa fa-google"></i></a>
											</div>
										</div>
									</div>
									<!-- Widget Area -->
									<div class="sidebar-widget-area">
										<h5 class="title">Today’s Pick</h5>
										<div class="widget-content">
											<!-- Single Blog Post -->
											<div class="single-blog-post todays-pick">
												<!-- Post Thumbnail -->
												<div class="post-thumbnail">
													<img src="img/blog-img/b22.jpg" alt="">
												</div>
												<!-- Post Content -->
												<div class="post-content px-0 pb-0">
													<a href="#" class="headline">
														<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex
															Concepts in Physics?</h5>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="sidebar-widget-area">
										<h5 class="title">Most Popular Videos</h5>
									</div>
								</div>
								<!-- Single Blog Post -->
								<div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
									<div class="sidebar-widget-area">
										<!-- Post Thumbnail -->
										<div class="post-thumbnail">
											<img src="img/blog-img/b7.jpg" alt="">
											<!-- Catagory -->
												<div class="post-cta"><a href="#">travel</a></div>
												<!-- Video Button -->
													<a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i class="fa fa-play"></i></a>
										</div>
										<!-- Post Content -->
										<div class="post-content">
											<a href="#" class="headline">
												<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
											</a>
											<p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
											<!-- Post Meta -->
											<div class="post-meta">
												<p>
													<a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a>
												</p>
											</div>
										</div>
									</div>
								</div>
								<!-- Single Blog Post -->
								<div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
									<div class="sidebar-widget-area">
									<!-- Post Thumbnail -->
										<div class="post-thumbnail">
											<img src="img/blog-img/b8.jpg" alt="">
											<!-- Catagory -->
												<div class="post-cta"><a href="#">travel</a></div>
												<!-- Video Button -->
												<a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i class="fa fa-play"></i></a>
										</div>
										<!-- Post Content -->
										<div class="post-content">
											<a href="#" class="headline">
												<h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
											</a>FD
											<p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
											<!-- Post Meta -->
											<div class="post-meta">
												<p>
													<a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29,2017 at 9:48 am</a>
												</p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- Load More btn -->
					<div class="row">
						<div class="col-12">
							<div class="load-more-btn mt-50 text-center">
								<a href="#" class="btn world-btn">Load More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- ***** Footer Area Start ***** -->
			<footer class="footer-area">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-4">
							<div class="footer-single-widget">
								<a href="#"><img src="img/core-img/logo.png" alt=""></a>
								<div class="copywrite-text mt-30">
									<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
										Copyright &copy;<script>document.write(new Date().getFullYear());</script>
										All rights reserved | This template is made with <i class="fa fa-heart-o"
																							aria-hidden="true"></i> by <a
												href="https://colorlib.com" target="_blank">Colorlib</a>
										<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="footer-single-widget">
								<ul class="footer-menu d-flex justify-content-between">
									<li><a href="#">Home</a></li>
									<li><a href="#">Fashion</a></li>
									<li><a href="#">Lifestyle</a></li>
									<li><a href="#">Contact</a></li>
									<li><a href="#">Gadgets</a></li>
									<li><a href="#">Video</a></li>
								</ul>
							</div>
						</div>
						<div class="col-12 col-md-4">
							<div class="footer-single-widget">
								<h5>Subscribe</h5>
								<form action="#" method="post">
									<input type="email" name="email" id="email" placeholder="Enter your mail">
									<button type="button"><i class="fa fa-arrow-right"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</footer>
							<center>
	<div class="form-popup" id="myForm" align="center">
  <form action="" class="form-container">
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
									<input type="file" name="file" required><br><br>
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
									<textarea cols="50" rows="8" required></textarea><br><br><br><br><br><br>
								</td>
							</tr>
						</table>
					</td>
				
					<td height=	50% width=50%>
						<textarea1 required>Next, use our Get Started docs to setup Tiny!</textarea1>
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
			<!-- ***** Footer Area End ***** -->
			<!-- jQuery (Necessary for All JavaScript Plugins) -->
			<script src="js/jquery/jquery-2.2.4.min.js"></script>
			<!-- Popper js -->
			<script src="js/popper.min.js"></script>
			<!-- Bootstrap js -->
			<script src="js/bootstrap.min.js"></script>
			<!-- Plugins js -->
			<script src="js/plugins.js"></script>
			<!-- Active js -->
			<script src="js/active.js"></script>
	</body>
</html>
