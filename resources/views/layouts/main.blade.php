<!DOCTYPE html>
<html>
  <head>
    <title>Suka Ekspor</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SCOPE MOBILE VERSION RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />

    <!-- SCOPE ADD TO HOMESCREEN AND THEME COLOR -->
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-title" content="PT. Apecsa Optima Solusi">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- SCOPE COLOR FOR BROWSER CHROME, FIREFOX AND OPERA -->
    <meta name="theme-color" content="#F17127" />

    <!-- SCOPE BROWSER WINDOWS PHONE -->
    <meta name="msapplication-navbutton-color" content="#F17127">

    <!-- SCOPE BROWSER IOS, SAFARI BROWSER -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="HandheldFriendly" content="true" />

    <!-- SCOPE SHARE FACEBOOK -->
    <meta property="og:url" content="http://urlnya.com/"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="PT. Apecsa Optima Solusi"/>
    <meta property="og:description" content="PT. Apecsa Optima Solusi"/>
    <meta property="og:image" content="URL IMAGE WEBSITE"/>

    <!-- SCOPE SHARE TWITTER -->
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="apecsa"/>
    <meta name="twitter:title" content="PT. Apecsa Optima Solusi">
    <meta name="twitter:description" content="PT. Apecsa Optima Solusi"/>
    <meta name="twitter:creator" content="Fathan Rohman"/>
    <meta name="twitter:image:src" content="https://website.com/image250X250.png"/>
    <meta name="twitter:domain" content="website.com"/>

    <!-- SCOPE SHARE GOOGLE PLUS -->
    <meta itemprop="name" content="PT. Apecsa Optima Solusi"/>
    <meta itemprop="description" content="Apecsa Optima Solusi (ApecsaOS) Bergerak di jasa pembuatan aplikasi, e-gov, erp, custom software, mobile application"/>
    <meta itemprop="image" content="https://website.com/image250X250.png"/>

    <!-- SCOPE STLYESHEET -->
    <link rel="icon" type="image/ico" href="assets2/images/logo/logo_ekspor_2.png"/>
    <link rel="stylesheet" href="assets2/css/bootstrap.css">
    <link rel="stylesheet" href="assets2/css/font-awesome.css">
    <link rel="stylesheet" href="assets2/css/animate.min.css">
    <link rel="stylesheet" href="assets2/css/revolution-slider.css">
    <link rel="stylesheet" href="assets2/css/owl.carousel.css">
    <link rel="stylesheet" href="assets2/css/owl.transitions.css">
    <link rel="stylesheet" href="assets2/css/main.css">
    <link rel="stylesheet" href="assets2/css/main-responsive.css">


    <script src="assets2/js/jquery-3.1.0.min.js"></script>
  </head>
  <body>
    <div class="apecsaos-wrapper">

      @include('partials.navbar')
      @yield('home')
      @yield('ekspor')
      @yield('harga')
      @include('partials.footer')
      <a href="" id="back-to-top" data-toggle="tooltip" data-placement="top" title="Back to top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
  </body>

  <!-- SCOPE JAVASCRIPT -->
  <script src="assets2/js/bootstrap.js"></script>
  <script src="assets2/js/jquery.scrolltofixed.js"></script>
  <script src="assets2/js/revolution.min.js"></script>
  <script src="assets2/js/wow.min.js"></script>
  <script src="assets2/js/owl.carousel.js"></script>
  <script src="assets2/js/wow.min.js"></script>
  <script src="assets2/js/jquery.scrollspeed.js"></script>
  <script src="assets2/js/main.js"></script>
  <script>
    (function($) {

      "use strict";

      //Main Slider
      if($('.slider-apecsa .tp-banner').length){
        jQuery('.slider-apecsa .tp-banner').show().revolution({
          delay:10000,
          startwidth:1200,
          startheight:620,
          hideThumbs:600,

          thumbWidth:80,
          thumbHeight:50,
          thumbAmount:5,

          navigationType:"bullet",
          navigationArrows:"0",
          navigationStyle:"preview4",

          touchenabled:"on",
          onHoverStop:"off",

          swipe_velocity: 0.7,
          swipe_min_touches: 1,
          swipe_max_touches: 1,
          drag_block_vertical: false,

          parallax:"mouse",
          parallaxBgFreeze:"on",
          parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

          keyboardNavigation:"off",

          navigationHAlign:"center",
          navigationVAlign:"bottom",
          navigationHOffset:0,
          navigationVOffset:20,

          soloArrowLeftHalign:"left",
          soloArrowLeftValign:"center",
          soloArrowLeftHOffset:20,
          soloArrowLeftVOffset:0,

          soloArrowRightHalign:"right",
          soloArrowRightValign:"center",
          soloArrowRightHOffset:20,
          soloArrowRightVOffset:0,

          shadow:0,
          fullWidth:"on",
          fullScreen:"off",

          spinner:"spinner4",

          stopLoop:"off",
          stopAfterLoops:-1,
          stopAtSlide:-1,

          shuffle:"off",

          autoHeight:"off",
          forceFullWidth:"on",

          hideThumbsOnMobile:"on",
          hideNavDelayOnMobile:1500,
          hideBulletsOnMobile:"on",
          hideArrowsOnMobile:"on",
          hideThumbsUnderResolution:0,

          hideSliderAtLimit:0,
          hideCaptionAtLimit:0,
          hideAllCaptionAtLilmit:0,
          startWithSlide:0,
          videoJsPath:"",
          fullScreenOffsetContainer: ".slider-apecsa"
        });
      }

    })(window.jQuery);
  </script>
  <script>
    $(document).ready(function() {

      var owl = $("#owl-slide-testimonial");
     
      owl.owlCarousel({
          items : 2, //10 items above 1000px browser width
          itemsDesktop : [1000,2], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,2], // betweem 900px and 601px
          itemsTablet: [600,1], //2 items between 600 and 0
          itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
      });

      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })
    });
  </script>
</html>
