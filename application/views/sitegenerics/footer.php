<div class="container">
    <div class="row">
        <div class=" col-sm-12 footer-content-box">
            <div class="col-sm-3">
                <h3>
                    <span>
                        <!-- <i class="fa fa-graduation-cap footer-h-icon"></i> -->
                        <img src="<?php echo base_url() . 'resources/images/agape_logoold.png'; ?>" alt="">
                    </span>
                </h3>
                <p>Our school is committed to providing a safe, nurturing, and intellectually stimulating environment where every student can thrive.</p>
                <ul class="list-unstyled">
                    <li><span><i class="fa fa-phone footer-icon"></i></span>+234 813 323 5555</li>
                    <li><span><i class="fa fa-envelope footer-icon"></i></span>help@agapeintl.edu.ng</li>
                    <li><span><i class="fa fa-map-marker footer-icon"></i></span>Akure, Ondo State</li>
                </ul>
            </div>

            <div class="col-sm-2">
                <h3>Subjects</h3>
                <ul class="list-unstyled">
                    <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Mathematics</a></li>
                    <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>English</a></li>
                    <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Chemistry</a></li>
                    <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Physics</a></li>
                    <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Geography</a></li>
                    <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Economics</a></li>
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
                    <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Charity</a></li>
                    <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Help desk</a></li>
                    <li><a href="#"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Parent's Forums</a></li>
                </ul>
            </div>	

            <div class="col-sm-3">
                <h3>Get in touch</h3>
                <p>Enter your email and we'll send you more information.</p>

                <form action="#" id="subscribeform">
                    <div class="form-group">
                        <input placeholder="Your Email" type="email" id="email" name="email" required="">
                        <div class="submit-btn">
                            <button type="button" class="text-center" onclick="subscribe()">Subscribe</button>
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
                    <p>&copy; Copyright 2023 Agape Intl. | All rights reserved</p>
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
</div><!-- ./ End footer-bottom -->	

<script src="<?php echo base_url() . 'resources/js/baseurl.js'; ?>"></script>

<script>
    baseUrl = window.location.origin+"/agapeintl/";
    
    function subscribe(){
        // alert(baseUrl);     
        let email = $("#email").val().trim();
        if(email == '' ){
            alert("Please enter your email");
            $("#email").focus();
        }else{
            let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if(email.match(mailformat)) { 
                $.post(baseUrl + "clients/subscribe", "email="+email).done(function(data){
                    if(data == 0){
                        alert("Unable to save subscription");
                        $("#email").focus();
                    }else if(data == 1){
                        alert("Subscription saved successfully!");
                        $("#email").val('');
                        $("#email").focus();
                    }else if(data == 2){
                        alert("Email already exist");
                        $("#email").focus();
                    }else{
                        alert("Error occured, please contact the system administrator");
                        $("#email").focus();
                    }
                });	
            }else{
                alert("Email must be in the right format e.g something@something.com");
                $("#email").focus();
            }  				
        }
    }
</script>