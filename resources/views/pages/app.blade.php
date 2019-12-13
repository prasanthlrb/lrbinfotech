<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

@if(trim($__env->yieldContent('headers')))
@yield('headers')
@else
<title>LRB TECH - Home Page</title>
<meta name="keywords" content="themeforest" />
<meta name="description" content="responsive html website template">
<meta name="author" content="codelayers">
@endif

<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="images/fav-icon.ico">
<link rel="stylesheet" type="text/css" href="js/bootstrap/bootstrap.min.css">

<!-- Google fonts  -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">

<!-- Template's stylesheets -->
<link rel="stylesheet" href="js/megamenu/stylesheets/screen.css">
<link rel="stylesheet" href="css/theme-default.css" type="text/css">
<link rel="stylesheet" href="js/loaders/stylesheets/screen.css">
<link rel="stylesheet" href="css/corporate.css" type="text/css">
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="fonts/et-line-font/et-line-font.css">

<link rel="stylesheet" href="js/parallax/main.css">
<link rel="stylesheet" type="text/css" href="js/cubeportfolio/cubeportfolio.min.css">
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
<link href="js/tabs/css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="js/ytplayer/ytplayer.css" />
<link href="js/accordion/css/smk-accordion.css" rel="stylesheet">
<link rel="stylesheet" href="js/parallax/main.css">
<!-- Template's stylesheets END -->

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Style Customizer's stylesheets -->


<!-- Style Customizer's stylesheets END -->

<!-- Skin stylesheet -->
@yield('extra-css')
<style>
.logo_width{
  max-width: 250px !important;
}
</style>
</head>

<body>
<div class="over-loader loader-live">
  <div class="loader">
    <div class="loader-item style4">
      <div class="cube1"></div>
      <div class="cube2"></div>
    </div>
  </div>
</div>
<!--end loading--> 



<div class="wrapper-boxed">
  <div class="site-wrapper">
    <div class="col-md-12 nopadding" >

      
      <div class="header-section style1 noborder pin-style" id="tr_navbar">
        <div class="container">
          <div class="mod-menu">
            <div class="row">
              <div class="col-sm-2"> <a href="index.html" title="" class="logo style-2 mar-4"> <img src="images/logo/logo2.png" alt="LRB INFO TECH LOGO" class="logo_width" id="logo2"> </a> </div>
              <div class="col-sm-10">
                <div class="main-nav">
                   <ul class="nav navbar-nav top-nav">
                    <li>Call Us Now</li>
                    <li>+91 70103 84622</li>
                   
                  </ul>
                  <div id="menu" class="collapse">
                    <ul class="nav navbar-nav">
                      <li class="right "> <a href="/">Home</a> <span class="arrow"></span></li>
                      <li class="right "> <a href="/about">About Us</a> <span class="arrow"></span></li>
                      <li class="right "> <a href="/service/">Our Service</a> <span class="arrow"></span>
                       <ul>
                              <li> <a href="page-about1.html">Web Design & Developement</a> </li>
                              <li> <a href="page-about2.html">Mobile App Development</a> </li>
                              <li> <a href="page-about3.html">E-commerce Developement</a> </li>
                              <li> <a href="page-about4.html">Digital Marketing</a> </li>
                              <li> <a href="page-about5.html">Customized App Developement</a> </li>
                              <li> <a href="page-about5.html">Domain & Hosting</a> </li>
                            </ul>
                      </li>
                      <li class="right "> <a href="/portfolio">Portfolio</a> <span class="arrow"></span></li>
                      <li class="right "> <a href="/blog">Blog</a> <span class="arrow"></span></li>
                      <li class="right "> <a href="/contact">Contact Us</a> <span class="arrow"></span></li>
                      <li class="right "> <a href="/contact">Contact Us</a> <span class="arrow"></span></li>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end menu--> 
      
    </div>
    <!--end menu-->

    {{-- Import Pages --}}
    @yield('pages')




    
    <section class="sec-padding-6 section-primary">
      <div class="container">
        <div class="row">
          <div id="owl-demo11" class="owl-carousel owl-theme">
            <div class="item">
              <ul class="clients-list grid-cols-5 hover-7 noborder">
                <li><a href="#"><img src="./images/technology/andriod.jpg" alt=""></a></li>
                <li><a href="#"><img src="./images/technology/angularjpg.jpg" alt=""></a></li>
                <li><a href="#"><img src="./images/technology/aws1.jpg"  alt=""></a></li>
                <li><a href="#"><img src="./images/technology/codeigniter-1.jpg"  alt=""></a></li>
                <li><a href="#"><img src="./images/technology/frame1.jpg"  alt=""></a></li>
              </ul>
            </div>
            <!--end carousel item-->
            
            <div class="item">
              <ul class="clients-list grid-cols-5 hover-7 noborder">
               
                <li><a href="#"><img src="./images/technology/ionic.jpg"  alt=""></a></li>
                <li><a href="#"><img src="./images/technology/java.jpg"  alt=""></a></li>
                <li><a href="#"><img src="./images/technology/joomla-1.jpg"  alt=""></a></li>
                <li><a href="#"><img src="./images/technology/jquery.jpg"  alt=""></a></li>
                <li><a href="#"><img src="./images/technology/larawel.jpg"  alt=""></a></li>
              </ul>
            </div>
            <!--end carousel item--> 
            
          </div>
          <!--end carousel--> 
          
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
    
   <div class="section-dark sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-12 colmargin clearfix margin-bottom">
            <div class="fo-map">
              <div class="footer-logo"><img src="images/logo/logo2.png" alt=""/ style="width:200px"></div>
              <p class="text-light">LRB infoTech is an innovative and creative web  design & development company in madurai. In spite of the size of your business, online presence is very important. The relevance of having an online access can only be experienced. It cannot be put in words.</p>
            </div>
          </div>
          <!--end item-->
          
          <div class="col-md-3 col-xs-12 clearfix margin-bottom">
            <h4 class="text-white less-mar3 font-weight-5">OUR Services</h4>
            <div class="clearfix"></div>
            <br/>
            <ul class="footer-quick-links-4 white">
              <li><a href="#"><i class="fa fa-angle-right"></i>Web Designing</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Web Development</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Mobile Application Development</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>Software Development</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> SEO & SMO</a></li>
            </ul>
          </div>
           <!--end item-->
        
          <div class="col-md-3 col-xs-12 clearfix margin-bottom">
            <h4 class="text-white less-mar3 font-weight-5"><br><br></h4>
            <div class="clearfix"></div> 
            <ul class="footer-quick-links-4 white">
              <li><a href="#"><i class="fa fa-angle-right"></i>Domain & Hosting</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>Digital Marketing</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>E-commerce Website Developement</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i>RTG Tracking Application</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            </ul>
          </div>
          <!--end item-->
          
          <div class="col-md-3 col-xs-12 clearfix margin-bottom">
            <h4 class="text-white less-mar3 font-weight-5">Contact Us</h4>
            <div class="clearfix"></div>
            <br/>
           <address class="text-light">
            <strong class="text-white">Address:</strong> <br>
            2/1/30,1st street,koodal nagar,Madurai,Tamil nadu-625018 <br>
            </address>
            <span class="text-light"><strong class="text-white">Phone:</strong> 070103 84622</span><br>
            <span class="text-light"><strong class="text-white">Email:</strong> info@lrbtech.com </span><br>
            <span class="text-light"><strong class="text-white">Tel:</strong> +91 0452-498-4939</span>
            <ul class="footer-social-icons white left-align icons-plain text-center">
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="active" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>
          </div>
          <!--end item--> 
          
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <!-- end section -->
    
    <section class="sec-padding-6 section-medium-dark-2">
      <div class="container">
        <div class="row">
          <div class="fo-copyright-holder text-center"> Copyright © 2019 <a href="https://1.envato.market/codelayers">lrbinfotech</a> | All rights reserved. </div>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section --> 
    
    <a href="#" class="scrollup"><i class="fa fa-angle-up" aria-hidden="true"></i></a><!-- end scroll to top of the page--> 
    
  </div>
  <!--end site wrapper--> 
</div>
<!--end wrapper boxed--> 
<!-- Scripts --> 
<script src="js/jquery/jquery.js"></script> 
<script src="js/bootstrap/bootstrap.min.js"></script> 
<!-- Scripts END --> 

<!-- Template scripts --> 
<script src="js/megamenu/js/main.js"></script> 
<script type="text/javascript" src="js/ytplayer/jquery.mb.YTPlayer.js"></script> 
<script type="text/javascript" src="js/ytplayer/elementvideo-custom.js"></script> 
<script type="text/javascript" src="js/ytplayer/play-pause-btn.js"></script> 
<!-- REVOLUTION JS FILES --> 
<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> 
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) --> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script> 
<script src="js/revolution-slider/slider-custom-1.js"></script> 
<script src="js/revolution-slider/rev-video-1.js"></script>             
<script src="js/loaders/loading-custom.js"></script> 
<script src="js/parallax/parallax-background.min.js"></script> 
<script src="js/parallax/parallax-custom.js"></script>
<script src="js/tabs/js/responsive-tabs.min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 
<script type="text/javascript" src="js/cubeportfolio/mosaic-flat.js"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script> 
<script src="js/owl-carousel/custom.js"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script> 
<script src="js/accordion/js/smk-accordion.js"></script> 
<script src="js/accordion/js/custom.js"></script> 
<script src="js/progress-circle/raphael-min.js"></script> 
<script src="js/progress-circle/custom.js"></script> 
<script src="js/progress-circle/jQuery.circleProgressBar.js"></script> 
<script src="js/functions/functions.js"></script>
<script>

$(window).on("scroll", function() {
	//var scrollHeight = $(document).height();
	var scrollPosition = $(window).height() + $(window).scrollTop();
	if (scrollPosition > 850) {
	  $('#logo2').removeClass('logo_width');
	}else{
	  $('#logo2').addClass('logo_width');

  }

});

 
    var new_scroll_position = 0;
    var last_scroll_position;
    var trNavbar = document.getElementById("tr_navbar");

    window.addEventListener('scroll', function(e) {
        last_scroll_position = window.scrollY;

        // Scrolling down
        if (new_scroll_position < last_scroll_position && last_scroll_position > 80) {
            trNavbar.classList.remove("slideDown");
            trNavbar.classList.add("slideUp");

        // Scrolling up
        } else if (new_scroll_position > last_scroll_position) {
            trNavbar.classList.remove("slideUp");
            trNavbar.classList.add("slideDown");
        }

      new_scroll_position = last_scroll_position;
    });

 


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("tr_navbar").style.top = "0";
  } else {
    document.getElementById("tr_navbar").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}

</script>

</body>
</html>