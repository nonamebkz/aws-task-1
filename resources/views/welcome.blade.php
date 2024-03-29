@php use Illuminate\Support\Facades\Session; @endphp
    <!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Cleanaa - Cleaning Landing Page Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="images/favicon.html">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- ICONS -->
    <link rel="stylesheet" href="css/ilmosys-icons.css">
    <link rel="stylesheet" href="css/icons/fontawesome/css/style.css">
    <link rel="stylesheet" href="css/icons/style.css">
    <link rel="stylesheet" href="css/icons/icon2/style.css">
    <link rel="stylesheet" href="js/vendors/swipebox/css/swipebox.min.css">


    <!-- THEME / PLUGIN CSS -->
    <link rel="stylesheet" href="js/vendors/slick/slick.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top">

<div class="body">
    <!-- HEADER -->
    <header>
        <nav class="navbar-inverse navbar-lg navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/" class="navbar-brand brand"><img src="images/logo.png" alt="logo"></a>

                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right navbar-login">
                        <li>
                            <a href="tel:1800789123"> <i class="fa fa-phone"></i> 1800 789 123</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">


                        <li class="dropdown mm-menu">
                            <a class="page-scroll" href="#home">Home</a>
                        </li>

                        <li class="dropdown mm-menu">
                            <a class="page-scroll" href="#reviews">Reviews</a>
                        </li>

                        <li class="dropdown mm-menu">
                            <a class="page-scroll" href="#service">Services</a>
                        </li>

                        <li class="dropdown mm-menu">
                            <a class="page-scroll" href="#faq">FAQ</a>
                        </li>

                        <li class="dropdown mm-menu">
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- INTRO -->
    <div id="home" class="intro intro1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row center-content">
                <div class="col-sm-5 col-md-4">
                    <div class="intro-form">
                        <h4>Sydney's #1 Rated House Cleaners.</h4>
                        <form action="/create" method="post">
                            @csrf
                            <input name="form-type" value="contact" type="hidden">
                            <fieldset>
                                <input placeholder="Your Name" name="name" required type="text"
                                       value="{{Session::get('name')}}">
                                <input placeholder="Email" name="email" required type="email"
                                       value="{{Session::get('email')}}">
                                <input placeholder="Password" name="password" required type="password">
                                <button class="btn btn-block btn-lg btn-primary" type="submit">Register</button>
                            </fieldset>
                        </form>
                        Already have an account? <a href="/login">Login</a>
                    </div>
                </div>
                <div class="col-sm-7 col-md-push-1">
                    <h2>Book your professional <br> home cleaner in sec.</h2>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="intro-box">
                                <span class="icon-calendar"></span>
                                <div>
                                    <h4>1. Book a Cleaning</h4>
                                    <p>Lorem ipsum dolor sit amet consec tetur elit amet voluptas accusamus dolorum
                                        veritatis ea odio dolor emque.</p>
                                </div>
                            </div>
                            <div class="intro-box">
                                <span class="icon-lock"></span>
                                <div>
                                    <h4>2. Confirm Booking </h4>
                                    <p>Lorem ipsum dolor sit amet consec tetur elit amet voluptas accusamus dolorum
                                        veritatis ea odio dolor emque.</p>
                                </div>
                            </div>
                            <div class="intro-box">
                                <span class="icon-home"></span>
                                <div>
                                    <h4>3. We’ll Clean it</h4>
                                    <p>Lorem ipsum dolor sit amet consec tetur elit amet voluptas accusamus dolorum
                                        veritatis ea odio dolor emque.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ELEMENTS-CLIENTS -->
    <div class="elements-content bg-primary">
        <div class="container">
            <div class="row">
                <ul class="clients no-padding text-center">
                    <li><img src="images/clients/1.png" class="img-responsive center-block" alt=""/></li>
                    <li><img src="images/clients/2.png" class="img-responsive center-block" alt=""/></li>
                    <li><img src="images/clients/3.png" class="img-responsive center-block" alt=""/></li>
                    <li><img src="images/clients/4.png" class="img-responsive center-block" alt=""/></li>
                    <li><img src="images/clients/5.png" class="img-responsive center-block" alt=""/></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- TESTIMONIALS -->
    <div id="reviews" class="testimonials-white">

        <div class="container">
            <div class="about-inline text-center">
                <p>- REVIEWS -</p>
                <h3>Read what our past customers said <br> about our cleaning and services. </h3>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="quote3">
                        <div>
                            <i class="icon2-Quote"></i>
                            <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live."</p>
                            <span class="author">- Jerry Doe -</span> <br/>
                            <span class="author-job">Web Designer @abc</span>
                        </div>
                        <div>
                            <i class="icon2-Quote"></i>
                            <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live."</p>
                            <span class="author">- Mark Walv -</span> <br/>
                            <span class="author-job">Product Designer @xyz</span>
                        </div>
                        <div>
                            <i class="icon2-Quote"></i>
                            <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live."</p>
                            <span class="author">- Jack Doe -</span> <br/>
                            <span class="author-job">Front End Designer @abc</span>
                        </div>
                        <div>
                            <i class="icon2-Quote"></i>
                            <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts. Separated they live."</p>
                            <span class="author">- Willsam Doe -</span> <br/>
                            <span class="author-job">Back End Developer @xyz</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TESTIMONIALS -->

    <!-- PARALLAX -->
    <section class="parallax-content parallax1 text-center" data-stellar-background-ratio="0.4">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>Over 200+ companies are already using Clenaa.</h4>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="btn btn-lg btn-primary">Learn More <i class="icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ABOUT -->
    <div id="service" class="container">
        <div class="about-inline text-center">
            <div class="container">
                <p>- WHAT WE DO -</p>
                <h3>Check out some of our professional<br> services! </h3>
            </div>
        </div>

        <!-- INFO CONTENT -->
        <div class="info-content">
            <div class="container">
                <div class="row center-content">
                    <div class="col-md-4">
                        <h3>The Awesome Bedroom</h3>
                        <ul class="list">
                            <li><i class="icon-check"></i> Dust and wipe all reachable surfaces</li>
                            <li><i class="icon-check"></i> Wipe mirrors and glass fixtures</li>
                            <li><i class="icon-check"></i>Wipe door handles and light switch</li>
                            <li><i class="icon-check"></i> Vacuum and mop all floors</li>
                            <li><i class="icon-check"></i> Vacuum and mop all floors</li>
                        </ul>
                        <div class="space30"></div>
                        <a href="#" class="btn btn-lg btn-primary">Learn More <i class="icon-arrow-right"></i></a>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="images/services/1.jpg" class="pull-right img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>

        <br> <br><br>

        <!-- INFO CONTENT -->
        <div class="info-content">
            <div class="container">
                <div class="row center-content">
                    <div class="col-md-8 text-center">
                        <img src="images/services/2.jpg" class="pull-right img-responsive" alt="">
                    </div>
                    <div class="col-md-4">
                        <h3>Make a Kitchen Beautiful.</h3>
                        <ul class="list">
                            <li><i class="icon-check"></i> Dust and wipe all reachable surfaces</li>
                            <li><i class="icon-check"></i> Wipe mirrors and glass fixtures</li>
                            <li><i class="icon-check"></i>Wipe door handles and light switch</li>
                            <li><i class="icon-check"></i> Vacuum and mop all floors</li>
                            <li><i class="icon-check"></i> Vacuum and mop all floors</li>
                        </ul>
                        <div class="space30"></div>
                        <a href="#" class="btn btn-lg btn-primary">Learn More <i class="icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <br> <br><br>

        <!-- INFO CONTENT -->
        <div class="info-content">
            <div class="container">
                <div class="row center-content">
                    <div class="col-md-4">
                        <h3>Make a Room Comfortable. </h3>
                        <ul class="list">
                            <li><i class="icon-check"></i> Dust and wipe all reachable surfaces</li>
                            <li><i class="icon-check"></i> Wipe mirrors and glass fixtures</li>
                            <li><i class="icon-check"></i>Wipe door handles and light switch</li>
                            <li><i class="icon-check"></i> Vacuum and mop all floors</li>
                            <li><i class="icon-check"></i> Vacuum and mop all floors</li>
                        </ul>
                        <div class="space30"></div>
                        <a href="#" class="btn btn-lg btn-primary">Learn More <i class="icon-arrow-right"></i></a>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="images/services/3.jpg" class="pull-right img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>

        <br> <br><br>

        <!-- INFO CONTENT -->
        <div class="info-content">
            <div class="container">
                <div class="row center-content">
                    <div class="col-md-8 text-center">
                        <img src="images/services/4.jpg" class="pull-right img-responsive" alt="">
                    </div>
                    <div class="col-md-4">
                        <h3>The Tiptop Bathroom </h3>
                        <ul class="list">
                            <li><i class="icon-check"></i>Dust and wipe all reachable surfaces</li>
                            <li><i class="icon-check"></i>Wipe mirrors and glass fixtures</li>
                            <li><i class="icon-check"></i>Wipe door handles and light switch</li>
                            <li><i class="icon-check"></i>Vacuum and mop all floors</li>
                            <li><i class="icon-check"></i>Vacuum and mop all floors</li>
                        </ul>
                        <div class="space30"></div>
                        <a href="#" class="btn btn-lg btn-primary">Learn More <i class="icon-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <div class="space100"></div>


    <!-- SERVICES -->
    <div class=" bg-light">
        <div class="container">
            <div class="about-inline text-center">
                <div class="container">
                    <p>- reason -</p>
                    <h3>Reasons to love Cleanaaa. </h3>
                    <p>We're different from your typical home cleaning company. We're out to create magic. The goal is
                        to WOW you with outstanding treatment.</p>
                </div>
            </div>

            <div class="service3 icon-box-square">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <span><i class="fa fa-1x fa-magic"></i></span>
                                <div class="services-content">
                                    <h2>Trusted & Vetted Cleaners</h2>
                                    <p>At Cleanaaa you'll only find the best. All our cleaners are carefully vetted by
                                        us - cleaners we'd be happy to have clean our own homes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <span><i class="fa fa-1x fa-codepen"></i></span>
                                <div class="services-content">
                                    <h2>Customer Recommended</h2>
                                    <p>Cleanaaa cleaners are continuously reviewed by our customers. Each and every
                                        cleaner is to maintain a high standard to clean with us.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center">
                                <span><i class="fa fa-1x fa-delicious"></i></span>
                                <div class="services-content">
                                    <h2>Commitment to Trust & Safety</h2>
                                    <p>Your home is your sanctuary. At Clenaa we go above and beyond to create a more
                                        trusted and reliable experience. Peoples love our services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- INFO CONTENT -->
<div class="info-content2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Honesty is the best policy.</h3>
                <div class="space10"></div>
                <p>We communicate honestly. No hidden fees, no surprises, no upsells! Only honest work and trustworthy
                    staff.</p>

            </div>
        </div>
    </div>
</div>


<!-- Intro 1 -->
<div class="intro intro-benifits2">
    <div class="container">
        <div class="row center-content">
            <div class="col-md-5">
                <h3>We're Sydney's most trusted house cleaning service!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum in
                    sit amet leo. Mauris feugiat erat tellus.Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                    Bookmarksgrove. Lorem ipsum dolor sit amet consectetur adipiscing elit. Etiam et purus a odio
                    finibus bibendum in sit amet leo. Mauris feugiat erat tellus.</p>
                <a href="#home" class="btn btn-lg btn-primary space20 page-scroll">Book a Cleaning</a>
            </div>

            <div class="col-md-7">
                <img src="images/bg/benifits2.jpg" class="pull-left img-responsive" alt=""/>
            </div>
        </div>
    </div>
</div>

<!-- Intro 2 -->
<div class="intro intro-benifits2">
    <div class="container">
        <div class="row center-content">
            <div class="col-md-7">
                <img src="images/bg/benifits1.jpg" class="pull-left img-responsive" alt=""/>
            </div>
            <div class="col-md-5">
                <h3>Why choose Cleanaaa to clean your home?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum in
                    sit amet leo. Mauris feugiat erat tellus.Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                    Bookmarksgrove. Lorem ipsum dolor sit amet consectetur adipiscing elit. Etiam et purus a odio
                    finibus bibendum in sit amet leo. Mauris feugiat erat tellus.</p>
                <a href="#home" class="btn btn-lg btn-primary space20 page-scroll">Book a Cleaning</a>
            </div>
        </div>
    </div>
</div>


<!-- FREQUENTLY ASKED QUESTIONS -->
<div class="container" id="faq">
    <div class="about-inline text-center">
        <p>- FREQUENTLY ASKED QUESTIONS -</p>
        <h3>Got questions? We’ve got answers. send us <br> email to hello@cleanaa.com </h3>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="faq">
                <h4><span>*</span> What is Cleanaa?</h4>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                    language.</p>
            </div>
        </div>

        <div class="col-md-6 col-sm-6">
            <div class="faq">
                <h4><span>*</span> What is Cleanaa?</h4>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                    language.</p>
            </div>
        </div>

        <div class="col-md-6 col-sm-6">
            <div class="faq">
                <h4><span>*</span> What is Cleanaa?</h4>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                    language.</p>
            </div>
        </div>

        <div class="col-md-6 col-sm-6">
            <div class="faq">
                <h4><span>*</span> What is Cleanaa?</h4>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                    the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                    language.</p>
            </div>
        </div>

    </div>
</div>


<div class="space100"></div>

<!-- PARALLAX -->
<section class="parallax-content parallax2 text-center" data-stellar-background-ratio="0.4">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 tc text-center ">
                <h4>Join Clenaa As A Cleaning Professional!</h4>
                <p>Become a Cleaner with Cleanaaa. We offer great staff incentives, excellent industry opportunities and
                    an unparalleled work culture.</p>
                <a href="#" class="btn btn-lg btn-primary">APPLY AS A CLEANER! </a>
                <p>or email us: hello@cleanaa.com</p>
            </div>
        </div>
    </div>
</section>


<!-- CONTACT US -->
<div class="container" id="contact">
    <div class="about-inline text-center">
        <p>- CONTACT US -</p>
        <h3>Customer satisfaction is our top priority, <br> Don’t hesitate to contact us </h3>
    </div>
</div>

<!-- CONTACT INFO -->
<div id="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="c-info">
                    <i class="icon-phone"></i>
                    <h5><b>Call Us</b></h5>
                    <p>(080) 123 456 7890</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="c-info">
                    <i class="icon-envelope"></i>
                    <h5><b>Email</b></h5>
                    <p><a href="">hello@cleanaa.com</a></p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="c-info">
                    <i class="icon-map-marker"></i>
                    <h5><b>Address</b></h5>
                    <p>72, Wallstreet, NY 20110</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="c-info">
                    <i class="icon-lifesaver"></i>
                    <h5><b>WEBSITE</b></h5>
                    <p><a href=""> www.cleanaa.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- GOOGLE MAP -->
<div class="google-map">
    <div class="container-fluid no-padding">
        <div id="map"></div>
    </div>
</div>


<!-- FOOTER -->
<footer class="footer2" id="footer2">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="index-2.html" class="footer-logo"><img src="images/logo.png" alt="logo"></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et purus a odio finibus bibendum in
                    sit amet leo. Mauris feugiat erat tellus.</p>
                <div class="space20"></div>
                <div class="footer-social space30">
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-dribbble"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
            </div>

            <div class="col-md-2 footerP">
                <h5>RELATED LINKS</h5>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#"><p>Why Buy With Us?</p></a></li>
                    <li><a href="#"><p>Our Team</p></a></li>
                    <li><a href="#"><p>Contact Us</p></a></li>
                </ul>
            </div>

            <div class="col-md-2 footerP">
                <h5>OTHER LINKS</h5>
                <ul>
                    <li><a href="#"><p>Register</p></a></li>
                    <li><a href="#"><p>Forum</p></a></li>
                    <li><a href="#"><p>Affiliate</p></a></li>
                    <li><a href="#"><p>FAQ</p></a></li>
                </ul>
            </div>

            <div class="col-md-5">
                <h5>PAYMENT METHODS</h5>
                <img src="images/payment/1.png" alt=""> &nbsp;
                <img src="images/payment/2.png" alt=""> &nbsp;
                <img src="images/payment/3.png" alt=""> &nbsp;
                <img src="images/payment/4.png" alt="">
                <p>© 2018. Cleanaa. All Rights Reserved. <br> Designed by Divine-Store</p>

            </div>
        </div>
    </div>
</footer>

<!-- COPYRIGHT -->
<div class="footer-copy">
    <div class="container">
        &copy; 2018. Cleanaa. All rights reserved.
    </div>
</div>


<!-- JAVASCRIPT =============================-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/vendors/slick/slick.min.js"></script>
<script src="js/vendors/jquery.easing.min.js"></script>
<script src="js/vendors/stellar.js"></script>
<script src="js/vendors/isotope/isotope.pkgd.js"></script>
<script src="js/vendors/swipebox/js/jquery.swipebox.min.js"></script>
<script src="js/main.js"></script>
<script src="js/vendors/mc/jquery.ketchup.all.min.js"></script>
<script src="js/vendors/mc/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
{{--<script src="js/vendors/gmap.js"></script>--}}
</body>

</html>


