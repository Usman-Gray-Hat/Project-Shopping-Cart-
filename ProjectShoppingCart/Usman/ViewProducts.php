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

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>View Products
</title>
<link rel="icon" href="img/xfavicon.png.pagespeed.ic.pBryiaU2YA.png">

<link rel="stylesheet" href="css/bootstrap.min.css%2banimate.css%2bowl.carousel.min.css%2bnice-select.css%2ball.css%2bflaticon.css%2bthemify-icons.css%2bmagnific-popup.css%2bslick.css%2bprice_rangs.css" />



<link rel="stylesheet" href="css/A.style.css.pagespeed.cf.ZaQ6zsBcp1.css">
<script nonce="a2afed65-c3c5-4281-9957-127b03e0ed76">(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
<body>

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
Settings
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
<a class="dropdown-item" href="tracking.html">tracking</a>
<a class="dropdown-item" href="checkout.html">product checkout</a>
<a class="dropdown-item" href="cart.html">shopping cart</a>
<a class="dropdown-item" href="confirmation.html">confirmation</a>


<!-- <a class="dropdown-item" href="confirmation.html">confirmation</a> -->

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
<a class="dropdown-toggle" href="cart.html" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
<h2>Shop Category</h2>
<p>Home <span>-</span> Shop Category</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="cat_product_area section_padding">
<div class="container">
<div class="row">
<div class="col-lg-3">
<div class="left_sidebar_area">
<aside class="left_widgets p_filter_widgets">
<div class="l_w_title">
<h3>Browse Categories</h3>
</div>
<div class="widgets_inner">
<ul class="list">
<li>
<a href="#">Frozen Fish</a>
<span>(250)</span>
</li>
<li>
<a href="#">Dried Fish</a>
<span>(250)</span>
</li>
<li>
<a href="#">Fresh Fish</a>
<span>(250)</span>
</li>
<li>
<a href="#">Meat Alternatives</a>
<span>(250)</span>
</li>
<li>
<a href="#">Fresh Fish</a>
<span>(250)</span>
</li>
<li>
<a href="#">Meat Alternatives</a>
<span>(250)</span>
</li>
<li>
<a href="#">Meat</a>
<span>(250)</span>
</li>
</ul>
</div>
</aside>
<aside class="left_widgets p_filter_widgets">
<div class="l_w_title">
<h3>Product filters</h3>
</div>
<div class="widgets_inner">
<ul class="list">
<li>
<a href="#">Apple</a>
</li>
<li>
<a href="#">Asus</a>
</li>
<li class="active">
<a href="#">Gionee</a>
</li>
<li>
<a href="#">Micromax</a>
</li>
<li>
<a href="#">Samsung</a>
</li>
</ul>
<ul class="list">
<li>
<a href="#">Apple</a>
</li>
<li>
<a href="#">Asus</a>
</li>
<li class="active">
<a href="#">Gionee</a>
</li>
<li>
<a href="#">Micromax</a>
</li>
<li>
<a href="#">Samsung</a>
</li>
</ul>
</div>
</aside>
<aside class="left_widgets p_filter_widgets">
<div class="l_w_title">
<h3>Color Filter</h3>
</div>
<div class="widgets_inner">
<ul class="list">
<li>
<a href="#">Black</a>
</li>
<li>
<a href="#">Black Leather</a>
</li>
<li class="active">
<a href="#">Black with red</a>
</li>
<li>
<a href="#">Gold</a>
</li>
<li>
<a href="#">Spacegrey</a>
</li>
</ul>
</div>
</aside>
<aside class="left_widgets p_filter_widgets price_rangs_aside">
<div class="l_w_title">
<h3>Price Filter</h3>
</div>
<div class="widgets_inner">
<div class="range_item">

<input type="text" class="js-range-slider" value="" />
<div class="d-flex">
<div class="price_text">
<p>Price :</p>
</div>
<div class="price_value d-flex justify-content-center">
<input type="text" class="js-input-from" id="amount" readonly />
<span>to</span>
<input type="text" class="js-input-to" id="amount" readonly />
</div>
</div>
</div>
</div>
</aside>
</div>
</div>


<div class="col-lg-9">
<div class="row">
<div class="col-lg-12">
<div class="product_top_bar d-flex justify-content-between align-items-center">
<div class="single_product_menu">
<p><span>10000 </span> Product Found</p>
</div>
<div class="single_product_menu d-flex">
<h5>short by : </h5>
<select>
<option data-display="Select">name</option>
<option value="1">price</option>
<option value="2">product</option>
</select>
</div>
<div class="single_product_menu d-flex">
<h5>show :</h5>
<div class="top_pageniation">
<ul>
<li>1</li>
<li>2</li>
<li>3</li>
</ul>
</div>
</div>


<div class="single_product_menu d-flex">
<div class="input-group">
<input type="text" class="form-control" placeholder="search" aria-describedby="inputGroupPrepend">
<div class="input-group-prepend">
<span class="input-group-text" id="inputGroupPrepend"><i class="ti-search"></i></span>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="row align-items-center latest_product_inner">


<!-- Backend -->
<?php
$query = "select * from PRODUCT";
$result = mysqli_query($con,$query);
// $array = mysqli_fetch_assoc($result);


while($data=mysqli_fetch_assoc($result))
{
    echo "
    <a href='ProductDetails.php?id=$data[ID]'>
    <div class='col-lg-4 col-sm-6'>
    <div class='single_product_item'>
    <img src='$data[IMAGE_PATH]' alt=''>
    <div class='single_product_text'>
    <h4>".$data['NAME']."</h4>
    <h3>Rs.".$data['PRICE']."</h3>
    <a href='#' class='add_cart'>+ add to cart<i class='ti-heart'></i></a>
    </div>
    </div>
    </div>
    </a>";
}
?>


<!-- Pagination -->
<div class="col-lg-12">
<div class="pageination">
<nav aria-label="Page navigation example">
<ul class="pagination justify-content-center">
<li class="page-item">
<a class="page-link" href="#" aria-label="Previous">
<i class="ti-angle-double-left"></i>
</a>
</li>


<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">4</a></li>
<li class="page-item"><a class="page-link" href="#">5</a></li>
<li class="page-item"><a class="page-link" href="#">6</a></li>
<li class="page-item">
<a class="page-link" href="#" aria-label="Next">
<i class="ti-angle-double-right"></i>
</a>
</li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<!-- Footer -->
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
<script src="js/contact.js%2bjquery.ajaxchimp.min.js%2bjquery.form.js%2bjquery.validate.min.js%2bmail-script.js%2bstellar.js.pagespeed.jc.wQGTBhEYqh.js"></script><script>eval(mod_pagespeed_80ekGytx6J);</script>
<script>eval(mod_pagespeed_B9u9tEzFif);</script>
<script>eval(mod_pagespeed_ZfSEmZ$dYf);</script>
<script>eval(mod_pagespeed_nLwfJZTo5w);</script>
<script>eval(mod_pagespeed_OwXKBAn$my);</script>
<script>eval(mod_pagespeed_i1YmdM4NMa);</script>
<script src="js/price_rangs.js"></script>

<script src="js/custom.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ea564cd4a224c26","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>