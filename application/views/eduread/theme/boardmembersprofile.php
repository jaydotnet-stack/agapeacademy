<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from ecologytheme.com/theme/eduread/teachers-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 12:16:58 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="Agape Intl.">
	<meta name="keywords" content="education, institute, school, teacher">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agape Intl - AGAPE Internatiional Primary & Secondary School</title> 
	<link rel="shortcut icon" href="<?php echo base_url() . 'resources/images/agape_favicon.ico'; ?>" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'resources/css/assets/bootstrap.min.css'; ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'resources/css/assets/font-awesome.min.css'; ?>">
    <!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700&amp;7COpen+Sans:400,600" rel="stylesheet">     
	<!-- Popup -->
	<link href="<?php echo base_url() . 'resources/css/assets/magnific-popup.css'; ?>" rel="stylesheet"> 
	<!-- Slick Slider -->
	<link href="<?php echo base_url() . 'resources/css/assets/slick.css'; ?>" rel="stylesheet"> 	
	<link href="<?php echo base_url() . 'resources/css/assets/slick-theme.css'; ?>" rel="stylesheet"> 	   
	<!-- owl carousel -->
	<link href="<?php echo base_url() . 'resources/css/assets/owl.carousel.css'; ?>" rel="stylesheet">
	<link href="<?php echo base_url() . 'resources/css/assets/owl.theme.css'; ?>" rel="stylesheet">
	<!-- Main Menu-->
	<link rel="stylesheet" href="<?php echo base_url() . 'resources/css/assets/meanmenu.css'; ?>">   
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'resources/css/style.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'resources/css/responsive.css'; ?>">	
</head>
<body class="t-profile-01">
<!-- Preloader -->
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<header id="header">
	<?php 
        echo $header;
    ?>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="intro-text ">
						<h1>
							<?php 
								$profiler = "";
								if($_GET['boardmemberid'] == 'bishop'){
									$profiler = "Bishop Felix Remi Adejumo's ";
								}else if($_GET['boardmemberid'] == 'fola-adebayo'){
									$profiler = "Prof. Fola-Adebayo's ";
								}else {
									$profiler = "Akinrinwa Akinbowale's ";
								}
								echo $profiler.'Profile';
							?> 
						</h1>
						<p>
							<span><a href="#">Home <i class='fa fa-angle-right'></i></a></span><span class="b-active"> 
							<?php 
								$profiler = "";
								if($_GET['boardmemberid'] == 'bishop'){
									$profiler = "Bishop Felix Remi Adejumo";
								}else if($_GET['boardmemberid'] == 'fola-adebayo'){
									$profiler = "Prof. Fola-Adebayo";
								}else {
									$profiler = "Akinrinwa Akinbowale";
								}
								echo $profiler;
							?> 
							</span>
						</p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
    </div><!-- closing div for header body inside $header array variable -->

</header>
<!--  End header section-->

<!-- Teachers Area section -->
<section class="teacher-prolile-01">
	<div class="container">
		<div class="row">
			<div class="col-sm-3 t-profile-left">
				<div class="teacher-contact">
					<?php 
						if($_GET['boardmemberid'] == 'bishop'){?>
							<img src="<?php echo base_url() . 'resources/images/page-images/board-members/bishop.jpg'; ?>" alt="" class="img-responsive">								
						<?php }else if($_GET['boardmemberid'] == 'fola-adebayo'){?>
							<img src="<?php echo base_url() . 'resources/images/page-images/board-members/bishop.jpg'; ?>" alt="" class="img-responsive">												
						<?php }else {?>
							<img src="<?php echo base_url() . 'resources/images/page-images/AKINRINWA-AKINBOWALE-PRINCIPAL.jpg'; ?>" alt="" class="img-responsive">											
						<?php }
					?> 					
					<h3>Contact Info</h3>
					<?php 
						if($_GET['boardmemberid'] == 'bishop'){
							echo "<p><span>Email:</span> info@funkefelixadejumo.org</p>";
							echo "<p><span>Phone:</span> +234 803 506 6656</p>";			
						}else if($_GET['boardmemberid'] == 'fola-adebayo'){
							echo "<p><span>Email:</span> tjfolaadebayo@futa.edu.ng</p>";
							echo "<p><span>Phone:</span> +234 803 666 8949</p>";									
						}else {
							echo "<p><span>Email:</span> akinrinwaakinbowale@gmail.com</p>";
							echo "<p><span>Phone:</span> +234 803 566 1205</p>";									
						}
					?> 					
					<ul class="list-unstyled">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter "></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-9 t-profile-right">
				<div class="row all-corsess-wapper">
					<div class="col-sm-12">
						<div class="all-courses">
							<h3>
							<?php 
								if($_GET['boardmemberid'] == 'bishop'){
									echo "Bishop Felix Remi Adejumo";			
								}else if($_GET['boardmemberid'] == 'fola-adebayo'){
									echo "Prof. Fola-Adebayo";			
								}else {
									echo "Akinrinwa Akinbowale";			
								}
							?> 	
							</h3>
							<div class="profile__courses__inner">
                                <ul class="profile__courses__list list-unstyled">
                                    <li><i class="fa fa-graduation-cap"></i>Degree:</li>
                                    <li><i class="fa fa-star"></i>Experience:</li>
                                    <li><i class="fa fa-heart"></i>Hobbies:</li>
                                    <li><i class="fa fa-bookmark"></i>My Courses:</li>
                                </ul>
                                <ul class="profile__courses__right list-unstyled">
								<?php 
									if($_GET['boardmemberid'] == 'bishop'){
										echo "<li>Seminary</li>";
										echo "<li>Over 20 Years in ministry</li>";
										echo "<li>Preaching, Teacher, Leader, Public speaking, Family, sport, and Travelling</li>";
										echo "<li>Teaching the Word of God</li>";
									}else if($_GET['boardmemberid'] == 'fola-adebayo'){
										echo "<li>Prof. of Communication and Language Arts</li>";
										echo "<li>Over 20 Years of university experience</li>";
										echo "<li>Lecuring, Public speaking, Reading, Travelling</li>";
										echo "<li>Communicating For Development Purposes, Nurturing Linguistic And Communicative Proficiency, Realizations And Pragmatic Functions e.t.c</li>";								
									}else {
										echo "<li>PHD in Mathmatics</li>";
										echo "<li>5 Years in university Math</li>";
										echo "<li>Leader, Public speaking, Family, sport, and Travelling</li>";
										echo "<li>Higher Math, Math Puzzle</li>";								
									}
								?> 											
                                </ul>
                            </div>
							<?php 
								if($_GET['boardmemberid'] == 'bishop'){
									echo "<p>Bisho Felix Remi Adejumo's brief statement.</p>";
								}else if($_GET['boardmemberid'] == 'fola-adebayo'){
									echo "<p>Prof. Fola Adebayo's brief statement.</p>";
								}else {
									echo "<p>Mr. Akinrinwa Akinbowale's brief statement.</p>";							
								}
							?> 								
						</div>
					</div>
				</div>

                <!-- <div class="row">
                    <div class="teacher_skill clearfix">
                        <div class="col-md-6 col-lg-6">
							<h3>My Shedule</h3>
						   <div class="row">

								<div class="col-sm-12">
									<div class="progress-bar-linear">
										<p class="progress-bar-text">Teaching</p>
										<div class="progress-cont">
											<span class="main-color progress-bar-text">98%</span>
										</div>
										<div class="progress-bar-skills">
											<div class="progress-bar-line main-color-bg" data-percent="98"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="progress-bar-linear">
										<p class="progress-bar-text">Arts</p>
										<div class="progress-cont">
											<span class="main-color progress-bar-text">85%</span>
										</div>
										<div class="progress-bar-skills">
											<div class="progress-bar-line main-color-bg" data-percent="85"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="progress-bar-linear">
										<p class="progress-bar-text">Creative Writing</p>
										<div class="progress-cont">
											<span class="main-color progress-bar-text">96%</span>
										</div>
										<div class="progress-bar-skills">
											<div class="progress-bar-line main-color-bg" data-percent="96"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="progress-bar-linear">
										<p class="progress-bar-text">Exercise</p>
										<div class="progress-cont">
											<span class="main-color progress-bar-text">90%</span>
										</div>
										<div class="progress-bar-skills">
											<div class="progress-bar-line main-color-bg" data-percent="90"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="progress-bar-linear">
										<p class="progress-bar-text">Games</p>
										<div class="progress-cont">
											<span class="main-color progress-bar-text">92%</span>
										</div>
										<div class="progress-bar-skills">
											<div class="progress-bar-line main-color-bg" data-percent="92"></div>
										</div>
									</div>
								</div>

							</div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="teacher_shedule_list">
                                <h3>My Shedule</h3>
                                <ul class="list-unstyled teachers-time-shedule">
                                    <li>Monday <span>9AM - 3PM</span></li>
                                    <li>Tuesday <span>9AM - 3PM</span></li>
                                    <li>Wednesday <span>9AM - 3PM</span></li>
                                    <li>Thursday <span>9AM - 3PM</span></li>
                                    <li>Friday <span>9AM - 3PM</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row courses-instuctor">
                	<div class="col-sm-12">
                		<h3 class="courses-title">Courses By Martin</h3>
                		<div class="row item-margin">
							<div class="col-sm-6 instractor-single">
								<div class="instractor-courses-single">
									<div class="img-box">
										<img src="<?php echo base_url() . 'resources/images/page-images/teachers/session/adedotun-JSS-1-class-in-session.jpg'; ?>" alt="" class="img-responsive">
									</div>
									<div class="instractor-courses-text">
										<div class="instractor-parson">
									        <div class="parson-img">
									          	<img src="<?php echo base_url() . 'resources/images/page-images/teachers/HEAD-OF-ADMIN-Abiola-Adedotun.jpg'; ?>" alt="" class="img-circle">
									        </div>
									        <p><a href="#">Abiola Adedotun</a> / <span>Head of Admin</span></p>
										</div>
										<div class="text-bottom">
											<h3><a href="#">Mathematics and Statistics</a></h3>
											<p>Algebra, Standard deviation, Probability.</p>
										</div>
									</div>
									<div class="price">
										<ul class="list-unstyled">
											<li><i class="fa fa-user"></i>50 Students</li>
											<li></li>
										</ul>
									</div>
								</div>                  				
                			</div>

							<div class="col-sm-6 instractor-single">
								<div class="instractor-courses-single">
									<div class="img-box">
										<img src="<?php echo base_url() . 'resources/images/page-images/teachers/session/adedotun-JSS-1-class-in-session.jpg'; ?>" alt="" class="img-responsive">
									</div>
									<div class="instractor-courses-text">
										<div class="instractor-parson">
									        <div class="parson-img">
									          	<img src="<?php echo base_url() . 'resources/images/page-images/teachers/HEAD-OF-ADMIN-Abiola-Adedotun.jpg'; ?>" alt="" class="img-circle">
									        </div>
									        <p><a href="#">Abiola Adedotun</a> / <span>Head of Admin</span></p>
										</div>
										<div class="text-bottom">
											<h3><a href="#">Mathematics and Statistics</a></h3>
											<p>Algebra, Standard deviation, Probability.</p>
										</div>
									</div>
									<div class="price">
										<ul class="list-unstyled">
											<li><i class="fa fa-user"></i>50 Students</li>
											<li><span></span></li>
										</ul>
									</div>
								</div>                  				
                			</div>


                		</div>

                		<div class="row item-margin">
							<div class="col-sm-6 instractor-single">
								<div class="instractor-courses-single">
									<div class="img-box">
										<img src="<?php echo base_url() . 'resources/images/page-images/teachers/session/adedotun-JSS-1-class-in-session.jpg'; ?>" alt="" class="img-responsive">
									</div>
									<div class="instractor-courses-text">
										<div class="instractor-parson">
									        <div class="parson-img">
									          	<img src="<?php echo base_url() . 'resources/images/page-images/teachers/HEAD-OF-ADMIN-Abiola-Adedotun.jpg'; ?>" alt="" class="img-circle">
									        </div>
									        <p><a href="#">Abiola Adedotun</a> / <span>Head of Admin</span></p>
										</div>
										<div class="text-bottom">
											<h3><a href="#">Mathematics and Statistics</a></h3>
											<p>Algebra, Standard deviation, Probability.</p>
										</div>
									</div>
									<div class="price">
										<ul class="list-unstyled">
											<li><i class="fa fa-user"></i>50 Students</li>
											<li><span></span></li>
										</ul>
									</div>
								</div>                  				
                			</div>

							<div class="col-sm-6 instractor-single">
								<div class="instractor-courses-single">
									<div class="img-box">
										<img src="<?php echo base_url() . 'resources/images/page-images/teachers/session/adedotun-JSS-1-class-in-session.jpg'; ?>" alt="" class="img-responsive">
									</div>
									<div class="instractor-courses-text">
										<div class="instractor-parson">
									        <div class="parson-img">
									          	<img src="<?php echo base_url() . 'resources/images/page-images/teachers/HEAD-OF-ADMIN-Abiola-Adedotun.jpg'; ?>" alt="" class="img-circle">
									        </div>
									        <p><a href="#">Abiola Adedotun</a> / <span>Head of Admin</span></p>
										</div>
										<div class="text-bottom">
											<h3><a href="#">Mathematics and Statistics</a></h3>
											<p>Algebra, Standard deviation, Probability.</p>
										</div>
									</div>
									<div class="price">
										<ul class="list-unstyled">
											<li><i class="fa fa-user"></i>50 Students</li>
											<li><span></span></li>
										</ul>
									</div>
								</div>                  				
                			</div>

                		</div>
                	</div>
                </div> -->
				
			</div>															
		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->


<!-- Footer Area section -->
<footer>
	<!-- <div class="container">
		<div class="row">
			<div class=" col-sm-12 footer-content-box">
				<div class="col-sm-3">
					<h3><span><i class="fa fa-graduation-cap footer-h-icon"></i></span> EduRead</h3>
					<p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream. Please send email and get latest news.</p>
					<ul class="list-unstyled">
						<li><span><i class="fa fa-phone footer-icon"></i></span>0123-456-789</li>
						<li><span><i class="fa fa-envelope footer-icon"></i></span>hello@education.com</li>
						<li><span><i class="fa fa-map-marker footer-icon"></i></span>01 Central Park, NYC</li>
					</ul>
				</div>

				<div class="col-sm-2">
					<h3>Courses</h3>
					<ul class="list-unstyled">
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Web Design</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Apps Developer</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Graphic Design</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>PHP Tranning</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>IOS Developer</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>App Design</a></li>
					</ul>
				</div>

				<div class="col-sm-2">
					<h3>Links</h3>
					<ul class="list-unstyled">
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>About Us</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Teacher</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Blog</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Events</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Gallery</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Contact</a></li>
					</ul>
				</div>

				<div class="col-sm-2">
					<h3>Support</h3>
					<ul class="list-unstyled">
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Documentation</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Forums</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Language Packs</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Release Status</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Documentation</a></li>
						<li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Forums</a></li>
					</ul>
				</div>	

				<div class="col-sm-3">
					<h3>Get in touch</h3>
					<p>Enter your email and we'll send you more information.</p>

					<form action="#">
						<div class="form-group">
							<input placeholder="Your Email" type="email" required="" >
							<div class="submit-btn">
								<button type="submit" class="text-center">Subscribe</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom-inner">
				<div class="row">
					<div class="col-md-6 col-sm-12 footer-no-padding">
						<p>&copy; Copyright 2019 EcologyTheme | All rights reserved</p>
					</div>
					<div class="col-md-6 col-sm-12 footer-no-padding">
						<ul class="list-unstyled footer-menu text-right">
							<li>Follow us:</li>
							<li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus google"></i></a></li>
							<li><a href="#"><i class="fa fa-skype skype"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	
	<?php 
		echo $footer;	
	?>	

	<!-- ./ End footer-bottom -->		
</footer><!-- ./ End Footer Area -->
    <!-- ============================
    JavaScript Files
    ============================= -->
    <!-- jQuery -->
	<script src="<?php echo base_url() . 'resources/js/vendor/jquery-1.12.4.min.js'; ?>"></script>
	<!-- Bootstrap JS -->
	<script src="<?php echo base_url() . 'resources/js/assets/bootstrap.min.js'; ?>"></script>
	<!-- Sticky JS -->
	<script src="<?php echo base_url() . 'resources/js/assets/jquery.sticky.js'; ?>"></script>
	<!-- Popup -->
    <script src="<?php echo base_url() . 'resources/js/assets/jquery.magnific-popup.min.js'; ?>"></script>
	<!-- Counter Up -->
    <script src="<?php echo base_url() . 'resources/js/assets/jquery.counterup.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'resources/js/assets/waypoints.min.js'; ?>"></script>
 	<!-- owl carousel -->
    <script src="<?php echo base_url() . 'resources/js/assets/owl.carousel.min.js'; ?>"></script>
   <!-- Slick Slider-->
    <script src="<?php echo base_url() . 'resources/js/assets/slick.min.js'; ?>"></script>
    <!-- Main Menu -->
	<script src="<?php echo base_url() . 'resources/js/assets/jquery.meanmenu.min.js'; ?>"></script>
	<!-- Custom JS -->
	<script src="<?php echo base_url() . 'resources/js/custom.js'; ?>"></script>
</body>

<!-- Mirrored from ecologytheme.com/theme/eduread/teachers-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 12:16:59 GMT -->
</html>
