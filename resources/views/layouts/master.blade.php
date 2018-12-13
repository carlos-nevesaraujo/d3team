<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>D3Team | Fábrica de Software</title>
        <!--Favicon add-->
        <link rel="shortcut icon" type="image/png" href="assets/img/logo/fevicon.png">
        <!--bootstrap Css-->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!--font-awesome Css-->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet">
        <!--Jquery Circleful Css-->
        <link href="assets/css/jquery.circliful.css" rel="stylesheet">
        <!-- Lightcase  Css-->
        <link href="assets/css/lightcase.css" rel="stylesheet">
        <!--Slick Slider Css-->
        <link href="assets/css/slick.css" rel="stylesheet">
        <!--Swiper  Css-->
        <link href="assets/css/swiper.min.css" rel="stylesheet">
        <!--Style Switcher Css-->
        <link href="assets/js/style-swicher/style-swicher.css" rel="stylesheet">
        <!--Style Css-->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>
    <body data-spy="scroll">
    <!--loader-->

    <div id="preloader">
      <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
      </div>
    </div>
    <!--loader-->

    @section('header')

    <!--support bar  top start-->
    <div class="support-bar-top" id="raindrops-green">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                  <div class="contact-info">
                    <ul>
                      <li><a href="#"> <i class="fa fa-envelope email" aria-hidden="true"></i> support@d3team.com </a></li>
                      <li><i class="fa fa-phone" aria-hidden="true"></i> +55 27 9 98020366</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="contact-admin">
                     
                      <div class="support-bar-social-links">
                          <a href="#"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                          <a href="#"><i class="fa fa-linkedin"></i></a>
                          <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--support bar  top end-->
    <header>
      <!-- Header bottom start -->
      <div class="header-bottom header header-wrapper navbar-landing">
        <nav class="navbar navbar-default ">
          <div class="container">
              <div class="row">
                <div class="col-md-12">
                    <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                            </button>
                                <a class="navbar-brand " href="#"><img class="img-logo" src="assets/img/logo/logo.png" alt="logo"></a>
                      </div>
                              <!-- Collect the nav links, forms, and other content for toggling -->
                              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav" id="header-menu">
                                    <li class="active" ><a class="page-scroll" href="body" > Home<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li><a class="page-scroll" href="#service"> Serviços</a></li>
                                    <li><a class="page-scroll" href="#portfolio"> portfolio</a></li>
                                    <li><a class="page-scroll" href="#about"> Sobre</a></li>
                                    <li><a class="page-scroll" href="#contact"> Contato</a></li>
                                </ul>
                          </div><!-- /.navbar-collapse -->
                </div>
            </div>
          </div>
        </nav><!-- nav -->
      </div>
       <!-- header-bottom end -->
    </header>
   
    @show


   @yield('content')

     
<div class="clearfix"></div>
<!--footer area start-->
<footer class="footer-area">
        <div class="footer-support-bar">
          <!-- Footer Support List Start -->
          <div class="footer-support-list">
            <ul>
              <li>
                <div class="footer-thumb"><i class="fa fa-headphones"></i></div>
                <div class="footer-content">
                  <p>Suporte</p>
                </div>
              </li>
              <li>
                <div class="footer-thumb"><i class="fa fa-envelope"></i></div>
                <div class="footer-content">
                  <p><a href="html/contact.html">support@d3team.com</a></p>
                </div>
              </li>
              <li>
                <div class="footer-thumb"><i class="fa fa-comments-o"></i></div>
                <div class="footer-content">
                  <p>chat de suporte</p>
                </div>
              </li>
              <li>
                <div class="footer-thumb"><i class="fa fa-phone"></i></div>
                <div class="footer-content">
                  <p>+55 27 99802 0366</p>
                </div>
              </li>
              </ul>
            </div>
            <!-- Footer Support End -->
         </div>
         
         <div class="footer-bottom">
             <div class="container">
                     <div class="row">
                         <div class="col-md-4 col-sm-12">
                             <p class="copyright-text">
                                 © 2018 D3Team.
                             </p>
                         </div>
                         <div class="col-md-6 col-sm-9">
                             <div class="footer-menu">
                                 <ul>                                         
                                     <li><a class="page-scroll" href="body">Home</a></li>
                                     <li><a class="page-scroll" href="#service">Serviços</a></li>
                                     <li><a class="page-scroll" href="#portifolio">Portifolio</a></li>
                                     <li><a class="page-scroll" href="#about">Sobre</a></li>
                                     <li><a class="page-scroll" href="#contact">Contato</a></li>
                                 </ul>
                             </div>
                         </div>
                       
                 </div>
             </div>
         </div>
             <div id="back-to-top" class="scroll-top back-to-top" data-original-title="" title="" >
                <i class="fa fa-angle-up"></i>
            </div>
</footer>
 
    </div>



    <!-- ========== end style swicher ========== --> 
    
    <script src="assets/js/jquery.js"></script>
    <!--Bootstrap v3 script load here-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--Swiper script load-->
    <script src="assets/js/swiper.min.js"></script>
    <!-- Highlight script load-->
    <script src="assets/js/highlight.min.js"></script>
    <!--Isotope File Load-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Custom Isotope File Load-->
    <script src="assets/js/custom-isotope.js"></script>
    <!--Jquery Ui Slider script load-->
    <script src="assets/js/jquery-ui-slider.min.js"></script>
    <!--Circleful Js File Load-->
    <script src="assets/js/jquery.circliful.js"></script>
    <!-- Custom Circleful Js File Load-->
    <script src="assets/js/custom-circliful.js"></script>
    <!--CounterUp script load-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--WayPoints script load-->
    <script src="assets/js/waypoints.min.js"></script>
    <!--Lightcase Js File Load-->
    <script src="assets/js/lightcase.js"></script>
    <!-- Map Js File Load -->
    <!--RainDrops script load-->
    <script src="assets/js/raindrops.js"></script>
    <!--RainDrops script load-->
    <script src="assets/js/custom-raindrops.js"></script>
    <!--Particles script load-->
    <script src="assets/js/particles.min.js"></script>
    <!-- Custom Particles script load-->
    <script src="assets/js/custom-particles.js"></script>
    <!--Slick Slider Js File Load-->
    <script src="assets/js/slick.min.js"></script>
    <!-- Custom Slick Slider Js File Load-->
    <script src="assets/js/custom-slick.js"></script>
    <!--Slick Slider Js File Load-->
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <!--Slick Slider Js File Load-->
    <script src="assets/js/custom-scroll.js"></script>
        <!--Style Switcher-->
    <script src="assets/js/style-swicher/custom.js"></script>
    <!--Style Switcher-->
    <script src="assets/js/style-swicher/style-swicher.js"></script>
    <!--Main js file load-->
    <script src="assets/js/main.js"></script>
    </body>
</html>
