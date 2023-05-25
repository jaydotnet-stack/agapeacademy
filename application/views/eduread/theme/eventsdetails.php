<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from ecologytheme.com/theme/eduread/event-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2022 12:16:54 GMT -->
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
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700%7COpen+Sans:400,600" rel="stylesheet">     
	<!-- Popup -->
	<link href="<?php echo base_url() . 'resources/css/assets/magnific-popup.css'; ?>" rel="stylesheet"> 
	<!-- Main Menu-->
	<link rel="stylesheet" href="<?php echo base_url() . 'resources/css/assets/meanmenu.css'; ?>">   
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url() . 'resources/css/style.css'; ?>">
	<link rel="stylesheet" href="<?php echo base_url() . 'resources/css/responsive.css'; ?>">
</head>
<body class="event-details-1">
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
							Events Details
						</h1>
						<p><span><a href="#">Home <i class='fa fa-angle-right'></i></a></span>
							<span class="b-active">Events details
							</span>
						</p>
					</div>
				</div>
			</div><!-- /.row -->
		</div><!-- /.container -->
    </div><!-- closing div for header body inside $header array variable -->
</header>
	<!--  End header section-->


<div class="event-details">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 post_left-side">
				<div class="row">
					<div class="col-sm-12 ">
						<div class="post-img-box">
							<?php 
								if($_GET['eventid'] == 'drama'){?>
									<img src="<?php echo base_url() . 'resources/images/page-images/events/drama-presentation-(2).jpg'; ?>" alt="" class="img-responsive">									
								<?php }else if($_GET['eventid'] == 'nta'){?>
									<img src="<?php echo base_url() . 'resources/images/page-images/events/excursion-to-NTA-Akure.jpg'; ?>" alt="" class="img-responsive">									
								<?php }else {?>
									<img src="<?php echo base_url() . 'resources/images/page-images/events/parents-during-christmas.jpg'; ?>" alt="" class="img-responsive">																		
								<?php }
							?> 								
						</div>
						<div class="clock-countdown">
							<div class="site-config"></div>
							<div class="coundown-timer">
								<?php 
									if($_GET['eventid'] == 'drama'){
										echo "<div class='single-counter'><span class='days'>21</span><span class='normal'>Days</span></div>";
										echo "<div class='single-counter single-chag-color'><span class='hours'>12</span><span class='normal'>Hours</span></div>";
										echo "<div class='single-counter'><span class='minutes'>25</span><span class='normal'>Minutes</span></div>";
										echo "<div class='single-counter single-chag-color'><span class='seconds'>48</span><span class='normal'>Seconds</span></div>";
									}else if($_GET['eventid'] == 'nta'){
										echo "<div class='single-counter'><span class='days'>43</span><span class='normal'>Days</span></div>";
										echo "<div class='single-counter single-chag-color'><span class='hours'>3</span><span class='normal'>Hours</span></div>";
										echo "<div class='single-counter'><span class='minutes'>6</span><span class='normal'>Minutes</span></div>";
										echo "<div class='single-counter single-chag-color'><span class='seconds'>4</span><span class='normal'>Seconds</span></div>";									
									}else {
										echo "<div class='single-counter'><span class='days'>23</span><span class='normal'>Days</span></div>";
										echo "<div class='single-counter single-chag-color'><span class='hours'>9</span><span class='normal'>Hours</span></div>";
										echo "<div class='single-counter'><span class='minutes'>1</span><span class='normal'>Minutes</span></div>";
										echo "<div class='single-counter single-chag-color'><span class='seconds'>7</span><span class='normal'>Seconds</span></div>";									
									}
								?> 									
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="description-content">
							<div class="description-heading">
								<?php 
									if($_GET['eventid'] == 'drama'){
										echo "<h3><a href='#'>Drama presentation</a></h3>";
										echo "<p>";
											echo "<span><i class='fa fa-calendar'></i>21st August, 2022</span>";
											echo "<span><i class='fa fa-map-marker'></i>Absolute address of event</span>";
										echo "</p>";										
									}else if($_GET['eventid'] == 'nta'){
										echo "<h3><a href='#'>Apage Intl. Student excursion to NTA-Akure</a></h3>";
										echo "<p>";
											echo "<span><i class='fa fa-calendar'></i>3rd July, 2023</span>";
											echo "<span><i class='fa fa-map-marker'></i>Absolute address of event</span>";
										echo "</p>";										
									}else {
										echo "<h3><a href='#'>Parents Christmas Carol</a></h3>";
										echo "<p>";
											echo "<span><i class='fa fa-calendar'></i>17th Dec, 2022</span>";
											echo "<span><i class='fa fa-map-marker'></i>Absolute address of event</span>";
										echo "</p>";										
									}
								?> 	


							</div>
							<div class="description-text">
								<div class="row">
									<!-- <div class="col-sm-1">
										<div class="description-side-left">
											<ul class="pst-social-icon list-unstyled">
											  	<li><a href="#" class="fa fa-facebook facebook"></a></li>
											  	<li><a href="#" class="fa fa-google-plus google"></a></li>
											 	<li><a href="#" class="fa fa-twitter twitter"></a></li>
											 	<li><a href="#" class="fa fa-linkedin linkedin"></a></li>
											 	<li><a href="#" class="fa fa-instagram instagram"></a></li>
											 	<li><a href="#" class="fa fa-youtube youtube"></a></li>
											 	<li><a href="#" class="fa fa-pinterest-p pinterest"></a></li>
											 </ul>
										</div>
									</div> -->
									<div class="col-sm-11">
										<div class="description-text-right">
											<?php 
												if($_GET['eventid'] == 'drama'){
													echo "<p>Agape Intl. drama presentation acted by the student under the supervision of some of the teachers.</p>";
													echo "<p class='description-speech'>";
														echo "<i class='fa fa-quote-right'></i>";
														echo "Agape Intl. drama presentation acted by the student under the supervision of some of the teachers.";
													echo "</p>";
													echo "<p>Agape Intl. drama presentation acted by the student under the supervision of some of the teachers.";
													echo "</p>";
												}else if($_GET['eventid'] == 'nta'){
													echo "<p>Student excursion to NTA-Akure was partificipated by some members of staff, where student learnt about public speaking and radio broadcasting.</p>";
													
													echo "<p>Student excursion to NTA-Akure was partificipated by some members of staff, where student learnt about public speaking and radio broadcasting.";
													echo "</p>";													
												}else {
													echo "<p>Parents registered their presenct at the christmas carol celebration which was a wonderful and unforgetable experience.</p>";
													echo "<p class='description-speech'>";
														echo "<i class='fa fa-quote-right'></i>";
														echo "Parents registered their presenct at the christmas carol celebration which was a wonderful and unforgetable experience.";
													echo "</p>";
													echo "<p>Parents registered their presenct at the christmas carol celebration which was a wonderful and unforgetable experience.";
													echo "</p>";													
												}
											?> 												
										</div>
									</div>
								</div>								
							</div>
						</div>
					</div>

					<div class="col-sm-12 col-md-12">
						<div class="more-events">
							<div class="row">
								<h3>Upcoming Events</h3>
								<div class="col-sm-6 col-md-4 event-single">
									<div class="event-single-box">
										<div class="img-box">
											<img src="<?php echo base_url() . 'resources/images/page-images/events/drama-presentation-(2).jpg'; ?>" alt="" class="img-responsive">
										</div>
										<div class="blog-content">
											<h4><a href="#">Drama presentation</a></h4>
											<p class="blog-time">
												<span>
													<i class="fa fa-calendar event-icon"></i>
													21st August, 2023
												</span>
												<span>
													<i class="fa fa-comment"></i>
													12										
												</span>
											</p>
											<div class="content-bottom">
												<p>Agape Intl. drama presentation acted by the student under the supervision of some of the teachers.</p>
												<span class="first-item"><a href="<?php echo base_url() .'clients/eventsdetails?eventid=drama'; ?>">Read More<i class="fa fa-long-arrow-right blog-btn-icon"></i></a></span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-6 col-md-4 event-single">
									<div class="event-single-box">
										<div class="img-box">
											<img src="<?php echo base_url() . 'resources/images/page-images/events/excursion-to-NTA-Akure.jpg'; ?>" alt="" class="img-responsive">
										</div>
										<div class="blog-content">
											<h4><a href="#">Apage Intl. Student excursion to NTA-Akure</a></h4>
											<p class="blog-time">
												<span>
													<i class="fa fa-calendar event-icon"></i>
													3rd July, 2023
												</span>
												<span>
													<i class="fa fa-comment"></i>
													17										
												</span>
											</p>
											<div class="content-bottom">
												<p>Student excursion to NTA-Akure was partificipated by some members of staff, where student learnt about public speaking and radio broadcasting.</p>
												<span class="first-item"><a href="<?php echo base_url() .'clients/eventsdetails?eventid=nta'; ?>">Read More<i class="fa fa-long-arrow-right blog-btn-icon"></i></a></span>
											</div>
										</div>
									</div>
								</div>

								<div class="col-sm-6 col-md-4 event-single">
									<div class="event-single-box">
										<div class="img-box">
											<img src="<?php echo base_url() . 'resources/images/page-images/events/parents-during-christmas.jpg'; ?>" alt="" class="img-responsive">
										</div>
										<div class="blog-content">
											<h4><a href="#">Parents Christmas Carol</a></h4>
											<p class="blog-time">
												<span>
													<i class="fa fa-calendar event-icon"></i>
													17th Dec, 2023
												</span>
												<span>
													<i class="fa fa-comment"></i>
													18										
												</span>
											</p>
											<div class="content-bottom">
												<p>Parents registered their presenct at the christmas carol celebration which was a wonderful and unforgetable experience.</p>
												<span class="first-item"><a href="<?php echo base_url() .'clients/eventsdetails?eventid=chrismas'; ?>">Read More<i class="fa fa-long-arrow-right blog-btn-icon"></i></a></span>	
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>		
					</div><!--End .row-->

					<div class="col-sm-12">
						<div class="leave-comment-box">
	                        <div class="comment-respond">
	                            <div class="comment-reply-title">
	                                <h3>Join Event</h3>
	                            </div>
	                            <div class="comment-form">
	                                <form id="formJoinEvent">
		                                <div class="row">
		                               		<div class="col-sm-12">
			                                	<div class="form-group">
			                                        <textarea class="form-control" rows="8" id="comment" name="comment" placeholder="Type Your Comments"></textarea>
			                                    </div>
		                                    </div>
		                                    <div class="col-sm-4">
			                                    <div class="form-group">
			                                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Your Name">
			                                    </div>
		                                    </div>
		                                    <div class="col-sm-4">
			                                    <div class="form-group">
			                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your E-mail">
			                                    </div>
		                                    </div>
		                                    <div class="col-sm-4">
			                                    <div class="form-group">
			                                        <input type="text" class="form-control" id="url" name="url" placeholder="Website URL">
			                                    </div>
		                                    </div>		
		                                    <div class="col-sm-12">                                    
			                                    <div class="full-width">
			                                        <input value="Join Now" onclick="" id="joinNow" type="submit">
			                                    </div>
		                                    </div>	
	                                    </div>
	                                </form>
	                            </div>
	                        </div>
						</div>
					</div>
				</div>	
			</div>


			<div class="col-sm-4">
				<div class="sidebar-text-post">							
					<div class="row">
						<div class="col-sm-12">
							<h3>Events by Month</h3>
							<div class="categories-item-post">
								<ul class="list-unstyled">
									<li><a href="#"><i class="fa fa-angle-right"></i>Jan <span>(4)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Feb<span>(4)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Mar<span>(2)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>April<span>(6)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>May <span>(34)</span></a></li>
									<!-- <li><a href="#"><i class="fa fa-angle-right"></i>Jun <span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Jul <span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Aug <span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Sep <span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Oct <span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Nov <span>(23)</span></a></li>
									<li><a href="#"><i class="fa fa-angle-right"></i>Dec <span>(23)</span></a></li> -->
								</ul>
							</div>
						</div>
					</div>

					<!-- <div class="row">
						<div class="col-sm-12 blog-padding-none">
							<h3>Event tags</h3>
							<div class="populer-tags">		
								<div class="tagcloud">
									<a href="#">USA</a>
									<a href="#">Russia</a>
									<a href="#">Events</a>
									<a href="#">Learning</a>
									<a href="#">Norway</a>
									<a href="#">Australia</a>
									<a href="#">Speakers</a>
									<a href="#">Audio</a>
									<a href="#">Singapur</a>
								</div>
							</div>
						</div>	
					</div>		 -->
				</div>						
			</div>
		</div>
	</div>	
</div>




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
	<!-- My custom JS -->
	<script src="<?php echo base_url() . 'resources/js/baseurl.js'; ?>"></script>	
</body>
<script>
	$("#joinNow").click(function(e){
		e.preventDefault();
		let comment = $("#comment").val().trim();
		let fullname = $("#fullname").val().trim();
		let email = $("#email").val().trim();
		let url = $("#url").val().trim();
		if(comment == "" || fullname == "" || url == "" || email == ""){
			alert("All field are required");
			$("#comment").focus();
		}else{
			// validate email
			var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			if(email.match(mailformat)) { 
				formdata = $("form#formJoinEvent").serialize();
				$.post(baseUrl + "clients/joinevent", formdata).done(function(data){
					if(data == 1){
						alert("Application successful");
						clearFields();
					}else if(data == 2){
						alert("Application updated successfuly");
						clearFields();
					}else if(data == 0){
						alert("Unable to save/update application");
					}else{
						alert("Error occured, please contact the system adminstrator");
					}
				});					
			}else{
				alert("Email format is required");	
				$("#email").focus();						
			} 	
		}
	});

	function clearFields(){
		$("#comment").val('');
		$("#fullname").val('');
		$("#email").val('');
		$("#url").val('');
		$("#comment").focus();
	}

</script>
</html>
