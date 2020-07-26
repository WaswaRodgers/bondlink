<?php 
    include('includes/header.php');
    $active_page = 'home'; 
?>

                            <style>
                                #more1 {
                                    display: none;
                                }

                                #more2 {
                                    display: none;
                                }

                                #more3 {
                                    display: none;
                                }

                                #more4 {
                                    display: none;
                                }

                                #more5 {
                                    display: none;
                                }
                            </style>
                            <script>
                                function handleReadMoreLess() {
                                    var dots1 = document.getElementById('dots1');
                                    var dots2 = document.getElementById('dots2');
                                    var dots3 = document.getElementById('dots3');
                                    var dots4 = document.getElementById('dots4');
                                    var dots5 = document.getElementById('dots5');
                                    var moreText1 = document.getElementById('more1');
                                    var moreText2 = document.getElementById('more2');
                                    var moreText3 = document.getElementById('more3');
                                    var moreText4 = document.getElementById('more4');
                                    var btnText1 = document.getElementById('myBtn1');
                                    var btnText2 = document.getElementById('myBtn2');
                                    var btnText3 = document.getElementById('myBtn3');
                                    var btnText4 = document.getElementById('myBtn4');
                                    var btnText5 = document.getElementById('myBtn5');

                                   
                                    
                                    if(dots1.style.display === "none") {
                                        dots1.style.display = "inline";
                                        btnText1.innerHTML = "Read more";
                                        moreText1.style.display = "none";
                                        btnText1.style.color = "white";
                                    } else {
                                        dots1.style.display = "none";
                                        btnText1.innerHTML = "Read less";
                                        btnText1.style.color = "white";
                                        moreText1.style.display = "inline";
                                    }

                                    if(dots2.style.display === "none") {
                                        dots2.style.display = "inline";
                                        btnText2.innerHTML = "Read more";
                                        moreText2.style.display = "none";
                                        btnText2.style.color = "white";
                                    } else {
                                        dots2.style.display = "none";
                                        btnText2.innerHTML = "Read less";
                                        btnText2.style.color = "white";
                                        moreText2.style.display = "inline";
                                    }

                                    if(dots3.style.display === "none") {
                                        dots3.style.display = "inline";
                                        btnText3.innerHTML = "Read more";
                                        moreText3.style.display = "none";
                                        btnText3.style.color = "white";
                                    } else {
                                        dots3.style.display = "none";
                                        btnText3.innerHTML = "Read less";
                                        btnText3.style.color = "white";
                                        moreText3.style.display = "inline";
                                    }

                                    if(dots4.style.display === "none") {
                                        dots4.style.display = "inline";
                                        btnText4.innerHTML = "Read more";
                                        moreText4.style.display = "none";
                                        btnText4.style.color = "white";
                                    } else {
                                        dots4.style.display = "none";
                                        btnText4.innerHTML = "Read less";
                                        btnText4.style.color = "white";
                                        moreText4.style.display = "inline";
                                    }
                                }

                            </script>

        <section id="home" class="home">
            <!-- Carousel -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel-inner -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/slider_img.jpg" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>We are certified Bank Guarantors</h3>
                                <h1>Bank Guarantees Services</h1>
                                <h1 class="second_heading">Try with us</h1>
                                <p>We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies. 

                            </div>					
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider_img2.jpg" alt="Construction">
                        <div class="overlay">
                             <div class="carousel-caption">
                                <h3>We are certified Bank Guarantors</h3>
                                <h1>Bank Guarantees Services</h1>
                                <h1 class="second_heading">Try with us</h1>
                                <p>We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies</p>
                        
                            </div>  			
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider_img3.jpg" alt="Construction">
                        <div class="overlay">
                             <div class="carousel-caption">
                                <h3>We are certified Bank Guarantors</h3>
                                <h1>Bank Guarantees Services</h1>
                                <h1 class="second_heading">Try with us</h1>
                                <p>We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies</p>
                               
                            </div>  				
                        </div>
                    </div>
                </div><!-- Carousel-inner end -->



                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- Carousel end-->

        </section>


        <!-- About -->
        <section id="about">
            <div class="container about_bg">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="about_content">
                            <h2>About Our Company</h2>
                            <p>We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies</p>
                            <p>We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies</p>
                            <span id="dots1">...</span>
                            
                            <span id="more1">We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies. 
                                    We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies. 
                                    We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies. 
                                    We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies</span></p>
                                <!--<a  class="btn know_btn">Read More</a>-->
                                <button onclick = "handleReadMoreLess()" id="myBtn1" class="btn bg-primary text-white">Read more</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-lg-offset-1">
                        <div class="about_banner">
                            <img src="images/man.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- About end -->

        <!-- Why us -->
        <section id="why_us">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                            <h2>WHY CHOOSE US?</h2>
                            <p>We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-leaf"></span>
                            <h4>We deliver quality</h4>
                            <p>We process legit Bid bonds, Performance bonds and Advanced Guarantee Payments from highly reputable banks and insurance companies</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-futbol-o"></span>
                            <h4>Always on time</h4>
                            <p>We have trusted riders who deliver bid bonds to clients within minutes.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-group"></span>
                            <h4>We are passionate</h4>
                            <p>We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-line-chart"></span>
                            <h4>Professional Services</h4>
                            <p>We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Why us end -->

        <!-- Services -->
        <section id="services">
            <div class="container">
                <h2>OUR SERVICES</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="images/service_img1.png" alt="Our Services" />
                            <h3>BID BONDS</h3>
                            <p>We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            <span id="dots2">...</span>
                            <span id="more2">We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            </span></p>
                            <!--<a href="#services" class="btn know_btn">Read More</a>-->
                            <button onclick = "handleReadMoreLess()" id="myBtn2" class="btn bg-primary text-white">Read more</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="images/service_img2.jpg" alt="Our Services" />
                            <h3>PERFORMANCE BONDS</h3>
                            <p>We process bank performance bonds and insurance performance bonds at affordable prices from highly reputable banks and insurers respectively.</p>
                            <span id="dots3">...</span>
                            <span id="more3">We process bank performance bonds and insurance performance bonds at affordable prices from highly reputable banks and insurers respectively.
                            We process bank performance bonds and insurance performance bonds at affordable prices from highly reputable banks and insurers respectively.
                            We process bank performance bonds and insurance performance bonds at affordable prices from highly reputable banks and insurers respectively.
                            We process bank performance bonds and insurance performance bonds at affordable prices from highly reputable banks and insurers respectively.
                            We process bank performance bonds and insurance performance bonds at affordable prices from highly reputable banks and insurers respectively.

                            </span>
                            <!--<a href="#services" class="btn know_btn">Read More</a>-->
                            <button onclick = "handleReadMoreLess()" id="myBtn3" class="btn bg-primary text-white">Read more</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="images/service_img1.png" alt="Our Services" />
                            <h3>ADVANCE PAYMENT GUARANTEES(AGPs)</h3>
                            <p>AGPs are like Performance bonds, but the difference is AGPs are pre-paid while Performance bonds are post paid.</p>
                            <span id="dots4">...</span>
                            <span id="more4">AGPs are like Performance bonds, but the difference is AGPs are pre-paid while Performance bonds are post paid.
                            AGPs are like Performance bonds, but the difference is AGPs are pre-paid while Performance bonds are post paid.
                            AGPs are like Performance bonds, but the difference is AGPs are pre-paid while Performance bonds are post paid.
                            AGPs are like Performance bonds, but the difference is AGPs are pre-paid while Performance bonds are post paid.
                            AGPs are like Performance bonds, but the difference is AGPs are pre-paid while Performance bonds are post paid.
                            AGPs are like Performance bonds, but the difference is AGPs are pre-paid while Performance bonds are post paid.
                            </span>
                            <!--<a href="#services" class="btn know_btn">Read More</a>-->
                            <button onclick = "handleReadMoreLess()" id="myBtn4" class="btn bg-primary text-white">Read more</button>

                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="images/service_img1.png" alt="Our Services" />
                            <h3>BID BONDS</h3>
                            <p>We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            <span id="dots2">...</span>
                            <span id="more2">We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            We process bank bid bonds and insurance bid bonds at friedly prices from highly reputable banks and insurers respectively.
                            </span></p>
                            <!--<a href="#services" class="btn know_btn">Read More</a>-->
                            <button onclick = "handleReadMoreLess()" id="myBtn2" class="btn bg-primary text-white">Read more</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="images/service_img2.jpg" alt="Our Services" />
                            <h3>PERFORMANCE BONDS</h3>
                            <p>We process bank performance bonds and insurance performance bonds at affordable prices from highly reputable banks and insurers respectively.</p>
                            <span id="dots3">...</span>
                            <span id="more3">We process bank performance bonds and insurance performance bonds at affordable prices from highly reputable banks and insurers respectively.
                            We process bank performance bonds and insurance performance bonds at affordable prices from highly reputable banks and insurers respectively.
                            We process bank performance bonds and insurance performance bonds at affordable prices from highly reputable banks and insurers respectively.
                            We process bank performance bonds and insurance performance bonds at affordable prices from highly reputable banks and insurers respectively.
                            We process bank performance bonds and insurance performance bonds at affordable prices from highly reputable banks and insurers respectively.

                            </span>
                            <!--<a href="#services" class="btn know_btn">Read More</a>-->
                            <button onclick = "handleReadMoreLess()" id="myBtn3" class="btn bg-primary text-white">Read more</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="images/service_img1.png" alt="Our Services" />
                            <h3>ADVANCE PAYMENT GUARANTEES(AGPs)</h3>
                            <p>AGPs are like Performance bonds, but the difference is AGPs are pre-paid while Performance bonds are post paid.</p>
                            <span id="dots4">...</span>
                            <span id="more4">AGPs are like Performance bonds, but the difference is AGPs are pre-paid while Performance bonds are post paid.
                            AGPs are like Performance bonds, but the difference is AGPs are pre-paid while Performance bonds are post paid.
                            AGPs are like Performance bonds, but the difference is AGPs are pre-paid while Performance bonds are post paid.
                            AGPs are like Performance bonds, but the difference is AGPs are pre-paid while Performance bonds are post paid.
                            AGPs are like Performance bonds, but the difference is AGPs are pre-paid while Performance bonds are post paid.
                            AGPs are like Performance bonds, but the difference is AGPs are pre-paid while Performance bonds are post paid.
                            </span>
                            <!--<a href="#services" class="btn know_btn">Read More</a>-->
                            <button onclick = "handleReadMoreLess()" id="myBtn4" class="btn bg-primary text-white">Read more</button>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Services end -->

        

        <!-- Testimonial -->
        <section id="testimonial">
            <div class="container text-center testimonial_area">
                <h2>Customer Reviews</h2>
                <p>Our customers remain satisfied by our services as portrayed by testimonials below</p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content text-left">
                                <p>We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies</p>
                            </div>
                            <img src="images/testimonial_img1.jpg" alt="Testimonial" />
                            <p class="worker_name">Alice Sitandayi</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content">
                                <p>We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies</p>
                            </div>
                            <img src="images/testimonial_img2.jpg" alt="Testimonial" />
                            <p class="worker_name">Kaminini Edwin</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content">
                                <p>We Process Bid bonds, Performance bonds and Advanced Guarantee Payments at friendly prices from highly reputable banks and insurance companies</p>
                            </div>
                            <img src="images/testimonial_img1.jpg" alt="Testimonial" />
                            <p class="worker_name">Alice Sitandayi</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Testimonial end -->

        <!-- Contact form -->
        <section id="contact_form">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Interested in knowing more about our products?</h3>
                        <h4 class="">Feel free to shoot us a message!</h4>
                    </div>
                    <form role="form" class="form-inline text-right col-md-6" >
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="msg" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn submit_btn">Send</button>
                    </form>				
                </div>
            </div>
        </section><!-- Contact form end -->

        <?php include('includes/footer.php'); ?>