<?php
session_start();
include('dbConnection.php');

// Restriction for accessing page without login
if($_SESSION['UserId']==null)
{
  header("Location:UserLogin.php");
}
?>

<!doctype html>
<html lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/aranoz/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Mar 2022 15:42:03 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Contact</title>
<link rel="icon" href="img/xfavicon.png.pagespeed.ic.pBryiaU2YA.png">

<link rel="stylesheet" href="css/A.bootstrap.min.css%2banimate.css%2bowl.carousel.min.css%2ball.css%2bflaticon.css%2bthemify-icons.css%2bmagnific-popup.css%2bslick.css%2cMcc.dmdW2yxl94.css" />

<link rel="stylesheet" href="css/A.style.css.pagespeed.cf.ZaQ6zsBcp1.css">
<script nonce="b012fa00-389e-4fd4-be41-048aaba333d7">(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
<body>

<!-- Navbar -->
<header class="main_menu home_menu">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-12">
<nav class="navbar navbar-expand-lg navbar-light">
<a class="navbar-brand" href="index.html"> <img src="img/xlogo.png.pagespeed.ic.zI2SKI010u.png" alt="logo"> </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="menu_icon"><i class="fas fa-bars"></i></span>
</button>
<div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="index.html">Home</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


Categories
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
    <a class="dropdown-item" href="ViewProducts.php"> Chairs</a>
    <!-- <a class="dropdown-item" href="skull.php">Skulls</a> -->
  </div>
</li>
</li>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
settings
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
<a class="dropdown-item" href="tracking.html">tracking</a>
<a class="dropdown-item" href="checkout.html">product checkout</a>
<a class="dropdown-item" href="cart.html">shopping cart</a>
<a class="dropdown-item" href="confirmation.html">confirmation</a>

</div>
</li>

<li class="nav-item">
<a class="nav-link" href="Contact.php">Contact</a>
</li>

<!-- Logout Button -->
<?php
if(isset($_SESSION['UserId']))
{
  echo "<li class=nav-item'>
  <a class='nav-link' href='UserLogout.php' title='sign out'>Logout</a>
  </li>";
}
?>
</ul>
</div>
<div class="hearer_icon d-flex">
<a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
<a href="#"><i class="ti-heart"></i></a>
<div class="dropdown cart">
<a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<i class="fas fa-cart-plus"></i>
</a>

</div>
</div>
</nav>
</div>
</div>
</div>
<div class="search_input" id="search_input_box">
<div class="container ">
<form class="d-flex justify-content-between search-inner">
<input type="text" class="form-control" id="search_input" placeholder="Search Here">
<button type="submit" class="btn"></button>
<span class="ti-close" id="close_search" title="Close Search"></span>
</form>
</div>
</div>
</header>


<section class="breadcrumb breadcrumb_bg">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="breadcrumb_iner">
<div class="breadcrumb_iner_item">
<h2>Shop Single</h2>
<p>Home <span>-</span> Shop Single</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="contact-section padding_top">
<div class="container">
<div class="d-none d-sm-block mb-5 pb-4">
<div id="map" style="height: 480px;"></div>
<script>
          function initMap() {
            var uluru = {
              lat: -25.363,
              lng: 131.044
            };
            var grayStyles = [{
                featureType: "all",
                stylers: [{
                    saturation: -90
                  },
                  {
                    lightness: 50
                  }
                ]
              },
              {
                elementType: 'labels.text.fill',
                stylers: [{
                  color: '#ccdee9'
                }]
              }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {
                lat: -31.197,
                lng: 150.744
              },
              zoom: 9,
              styles: grayStyles,
              scrollwheel: false
            });
          }
        </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap"></script>
</div>
<div class="row">
<div class="col-12">
<h2 class="contact-title">Get in Touch</h2>
</div>
<div class="col-lg-8">
<form class="form-contact contact_form" action="https://preview.colorlib.com/theme/aranoz/contact_process.php" method="post" id="contactForm" novalidate>
<div class="row">
<div class="col-12">
<div class="form-group">
<textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder='Enter Message'></textarea>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder='Enter your name'>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder='Enter Subject'>
</div>
</div>
</div>
<div class="form-group mt-3">
<a href="#" class="btn_3 button-contactForm">Send Message</a>
</div>
</form>
</div>
<div class="col-lg-4">
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-home"></i></span>
<div class="media-body">
<h3>Buttonwood, California.</h3>
<p>Rosemead, CA 91770</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-tablet"></i></span>
<div class="media-body">
<h3>00 (440) 9865 562</h3>
<p>Mon to Fri 9am to 6pm</p>
</div>
</div>
<div class="media contact-info">
<span class="contact-info__icon"><i class="ti-email"></i></span>
<div class="media-body">
<h3><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ddaea8adadb2afa99dbeb2b1b2afb1b4bff3beb2b0">[email&#160;protected]</a></h3>
<p>Send us your query anytime!</p>
</div>
</div>
</div>
</div>
</div>
</section>


<footer class="footer_part">
<div class="container">
<div class="row justify-content-around">
<div class="col-sm-6 col-lg-2">
<div class="single_footer_part">
<h4>Top Products</h4>
<ul class="list-unstyled">
<li><a href="#">Managed Website</a></li>
<li><a href="#">Manage Reputation</a></li>
<li><a href="#">Power Tools</a></li>
<li><a href="#">Marketing Service</a></li>
</ul>
</div>
</div>
<div class="col-sm-6 col-lg-2">
<div class="single_footer_part">
<h4>Quick Links</h4>
<ul class="list-unstyled">
<li><a href="#">Jobs</a></li>
<li><a href="#">Brand Assets</a></li>
<li><a href="#">Investor Relations</a></li>
<li><a href="#">Terms of Service</a></li>
</ul>
</div>
</div>
<div class="col-sm-6 col-lg-2">
<div class="single_footer_part">
<h4>Features</h4>
<ul class="list-unstyled">
<li><a href="#">Jobs</a></li>
<li><a href="#">Brand Assets</a></li>
<li><a href="#">Investor Relations</a></li>
<li><a href="#">Terms of Service</a></li>
</ul>
</div>
</div>
<div class="col-sm-6 col-lg-2">
<div class="single_footer_part">
<h4>Resources</h4>
<ul class="list-unstyled">
<li><a href="#">Guides</a></li>
<li><a href="#">Research</a></li>
<li><a href="#">Experts</a></li>
<li><a href="#">Agencies</a></li>
</ul>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="single_footer_part">
<h4>Newsletter</h4>
<p>Heaven fruitful doesn't over lesser in days. Appear creeping
</p>
<div id="mc_embed_signup">
<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" class="subscribe_form relative mail_part">
<input type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
<button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">subscribe</button>
<div class="mt-10 info"></div>
</form>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="footer_icon social_icon">
<ul class="list-unstyled">
<li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
<li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
<li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</footer>



<script src="js/jquery-1.12.1.min.js"></script>

<script src="js/popper.min.js%2bbootstrap.min.js.pagespeed.jc.i78k19mshX.js"></script><script>eval(mod_pagespeed_ZAswXqM8Ud);</script>

<script>eval(mod_pagespeed_EfrDYFnu4j);</script>

<script src="js/jquery.magnific-popup.js"></script>

<script src="js/swiper.min.js"></script>

<script src="js/masonry.pkgd.js"></script>

<script src="js/owl.carousel.min.js%2bjquery.nice-select.min.js%2bslick.min.js%2bjquery.counterup.min.js%2bwaypoints.min.js.pagespeed.jc.I5OJqcvoDe.js"></script><script>eval(mod_pagespeed_9Z4qIwpEkb);</script>
<script>eval(mod_pagespeed_MPlfZyvWKT);</script>

<script>eval(mod_pagespeed_S$S579wDQw);</script>
<script>eval(mod_pagespeed_Mc5PivJ711);</script>
<script>eval(mod_pagespeed_FHbok_8bU7);</script>
<script src="js/contact.js%2bjquery.ajaxchimp.min.js%2bjquery.form.js%2bjquery.validate.min.js%2bmail-script.js%2bcustom.js.pagespeed.jc.ntpiCA2YNB.js"></script><script>eval(mod_pagespeed_80ekGytx6J);</script>
<script>eval(mod_pagespeed_B9u9tEzFif);</script>
<script>eval(mod_pagespeed_ZfSEmZ$dYf);</script>
<script>eval(mod_pagespeed_nLwfJZTo5w);</script>
<script>eval(mod_pagespeed_OwXKBAn$my);</script>

<script>eval(mod_pagespeed_ZivL3dKadY);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ea564e1f89efa58","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/aranoz/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Mar 2022 15:42:03 GMT -->
</html>