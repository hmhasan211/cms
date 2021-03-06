<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/frontend')}}/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('assets/frontend')}}/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



    <!-- Web Fonts  -->
    <link id="googleFonts" href="https:/fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/theme.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/theme-elements.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/theme-blog.css">
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/theme-shop.css">


    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{asset('assets/frontend')}}/css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend')}}/css/custom.css">

    <!-- Head Libs -->
    <script src="{{asset('assets/frontend')}}/vendor/modernizr/modernizr.min.js"></script>

</head>
<body>

<div class="body">
    {{--    navbar start--}}
    @include('frontend.navbar');
    {{-- end   navbar --}}

{{--   dynamic section--}}

    @yield('content')

    <footer id="footer" class="footer-texts-more-lighten">
        <div class="container">
            <div class="row py-4 my-5">
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <h5 class="text-4 text-color-light mb-3">CONTACT INFO</h5>
                    <ul class="list list-unstyled">
                        <li class="pb-1 mb-2">
                            <span class="d-block font-weight-normal line-height-1 text-color-light">ADDRESS</span>
                            1234 Street Name, City, State, USA
                        </li>
                        <li class="pb-1 mb-2">
                            <span class="d-block font-weight-normal line-height-1 text-color-light">PHONE</span>
                            <a href="tel:+1234567890">Toll Free (123) 456-7890</a>
                        </li>
                        <li class="pb-1 mb-2">
                            <span class="d-block font-weight-normal line-height-1 text-color-light">EMAIL</span>
                            <a href="mailto:mail@example.com">mail@example.com</a>
                        </li>
                        <li class="pb-1 mb-2">
                            <span class="d-block font-weight-normal line-height-1 text-color-light">WORKING DAYS/HOURS </span>
                            Mon - Sun / 9:00AM - 8:00PM
                        </li>
                    </ul>
                    <ul class="social-icons social-icons-clean-with-border social-icons-medium">
                        <li class="social-icons-instagram">
                            <a href="http:/www.instagram.com/" class="no-footer-css" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li class="social-icons-twitter mx-2">
                            <a href="http:/www.twitter.com/" class="no-footer-css" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="social-icons-facebook">
                            <a href="http:/www.facebook.com/" class="no-footer-css" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-2 mb-5 mb-lg-0">
                    <h5 class="text-4 text-color-light mb-3">USEFUL LINKS</h5>
                    <ul class="list list-unstyled mb-0">
                        <li class="mb-0"><a href="contact-us-1.html">Help Center</a></li>
                        <li class="mb-0"><a href="about-us.html">About Us</a></li>
                        <li class="mb-0"><a href="contact-us.html">Contact Us</a></li>
                        <li class="mb-0"><a href="page-careers.html">Careers</a></li>
                        <li class="mb-0"><a href="blog-grid-4-columns.html">Blog</a></li>
                        <li class="mb-0"><a href="#">Our Location</a></li>
                        <li class="mb-0"><a href="#">Privacy Policy</a></li>
                        <li class="mb-0"><a href="sitemap.html">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                    <h5 class="text-4 text-color-light mb-3">RECENT NEWS</h5>
                    <article class="mb-3">
                        <a href="blog-post.html" class="text-color-light text-3-5">Why should I buy a Web Template?</a>
                        <p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
                    </article>
                    <article class="mb-3">
                        <a href="blog-post.html" class="text-color-light text-3-5">Creating Amazing Website with Porto</a>
                        <p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
                    </article>
                    <article>
                        <a href="blog-post.html" class="text-color-light text-3-5">Best Practices for Top UI Design</a>
                        <p class="line-height-2 mb-0"><a href="#">Nov 25, 2020</a> in <a href="#">Design,</a> <a href="#">Coding</a></p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h5 class="text-4 text-color-light mb-3">SUBSCRIBE NEWSLETTER</h5>
                    <p class="mb-2">Get all the latest information on events, sales and offers. Sign up for newsletter:</p>
                    <div class="alert alert-success d-none" id="newsletterSuccess">
                        <strong>Success!</strong> You've been added to our email list.
                    </div>
                    <div class="alert alert-danger d-none" id="newsletterError"></div>
                    <form id="newsletterForm" class="form-style-5 opacity-10" action="php/newsletter-subscribe.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col">
                                <input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <button class="btn btn-primary btn-rounded btn-px-4 btn-py-2 font-weight-bold" type="submit">SUBSCRIBE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-copyright footer-copyright-style-2 pt-4 pb-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="mb-0">Porto Template © 2021. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Vendor -->
<script src="{{asset('assets/frontend')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('assets/frontend')}}/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="{{asset('assets/frontend')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="{{asset('assets/frontend')}}/vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="{{asset('assets/frontend')}}/vendor/popper/umd/popper.min.js"></script>
<script src="{{asset('assets/frontend')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('assets/frontend')}}/vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="{{asset('assets/frontend')}}/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="{{asset('assets/frontend')}}/vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="{{asset('assets/frontend')}}/vendor/lazysizes/lazysizes.min.js"></script>
<script src="{{asset('assets/frontend')}}/vendor/isotope/jquery.isotope.min.js"></script>
<script src="{{asset('assets/frontend')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="{{asset('assets/frontend')}}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="{{asset('assets/frontend')}}/vendor/vide/jquery.vide.min.js"></script>
<script src="{{asset('assets/frontend')}}/vendor/vivus/vivus.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('assets/frontend')}}/js/theme.js"></script>

<!-- Theme Custom -->
<script src="{{asset('assets/frontend')}}/js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('assets/frontend')}}/js/theme.init.js"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http:/www.google.com/analytics/ for more information.
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','/www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12345678-1', 'auto');
    ga('send', 'pageview');
</script>
 -->

</body>
</html>
