<?php
include('dbConnection.php');
?>
<!doctype html>
<html lang="zxx">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Signup</title>
<link rel="icon" href="img/xfavicon.png.pagespeed.ic.pBryiaU2YA.png">

<link rel="stylesheet" href="css/A.bootstrap.min.css%2banimate.css%2bowl.carousel.min.css%2ball.css%2bflaticon.css%2bthemify-icons.css%2bmagnific-popup.css%2bslick.css%2cMcc.dmdW2yxl94.css" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Jquery CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!-- Data Table CDN -->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<!-- Data Table Style CDN -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<!-- Sweet Alert CDN -->
<link rel="stylesheet" href="dist/sweetalert2.min.css">
<script src="dist/sweetalert2.min.js"></script>

<link rel="stylesheet" href="css/A.style.css.pagespeed.cf.ZaQ6zsBcp1.css">
<script nonce="65ac19c5-22cb-4fa1-8d2e-91671a7edc24">(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
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
Shop
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
<a class="dropdown-item" href="category.html"> shop category</a>
<a class="dropdown-item" href="single-product.html">product details</a>
</div>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
pages
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
<a class="dropdown-item" href="UserLogin.php"> login</a>
<a class="dropdown-item" href="Signup.php"> Registration</a>
<a class="dropdown-item" href="tracking.html">tracking</a>
<a class="dropdown-item" href="checkout.html">product checkout</a>
<a class="dropdown-item" href="ViewProducts.php">shopping cart</a>
<a class="dropdown-item" href="confirmation.html">confirmation</a>

</div>
</li>

<li class="nav-item">
<a class="nav-link" href="contact.html">Contact</a>
</li>
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
<h2>Tracking Order</h2>
<p>Home <span>-</span> Tracking Order</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="login_part padding_top">


<!-- Signup Form For User -->
<div class="col-lg-6 mx-auto">
<div class="login_part_form">
<div class="login_part_form_iner">
<h1 class="text-center" style="font-weight:900; color:gray">REGISTER YOURSELF!</h1>
<br>


<form action="" method="post">

<!-- First Name -->
<div class="col-md-12 form-group p_star">
<input type="text" class="form-control" name="fname"  placeholder="First Name" required>
</div>

<!-- Last Name -->
<div class="col-md-12 form-group p_star">
<input type="text" class="form-control"  name="lname"  placeholder="Last Name" required>
</div>

<!-- Age -->
<div class="col-md-12 form-group p_star">
<input type="number" class="form-control"  name="age"  placeholder="Age" required>
</div>

<!-- Gender -->
<div class="col-md-12 form-group p_star">
<label>Male</label>
<input type="radio" name="gender" value="Male">

<label>Female</label>
<input type="radio" name="gender" value="Female">
</div>

<!-- City -->
<div class="col-md-12 form-group p_star">
<input type="text" name="city" placeholder="City" class="form-control" required>
</div>

<!-- Email -->
<div class="col-md-12 form-group p_star">
<input type="text" name="email" placeholder="Email" class="form-control" required pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$">
</div>

<!-- Cell No -->
<div class="col-md-12 form-group p_star">
<input type="number" name="contact" placeholder="Cell no" class="form-control" required>
</div>

<!-- Address -->
<div class="col-md-12 form-group p_star">
  <textarea class="form-control" name="address" rows="5" placeholder="Address" class="form-control" required></textarea>
</div>

<!-- Username -->
<div class="col-md-12 form-group p_star">
<input type="text" name="username" placeholder="Username" class="form-control" required>
</div>

<!-- Password -->
<div class="col-md-12 form-group p_star">
<input type="password" name="password" placeholder="Password" class="form-control" required title="Your password must contain Upper case, lower case, 8 letters, digits and special characters" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" id="pass">
</div>

<!-- Confirm Password -->
<div class="col-md-12 form-group p_star">
<input type="password" name="cpassword" placeholder="Re-Enter Password" class="form-control" required id="cpass">
</div>


<!-- Check Box For Show Password -->
<div class="col-md-12 form-group">
<div class="creat_account d-flex align-items-center">
<input type="checkbox" onclick="ShowPassowrd()">
<label for="f-option">Show Password</label>
</div>

<!-- Signup Button -->
<input type="submit" value="Signup" class="btn_3" name="BtnSignup" onclick="return ComparePasswords()">
<a href="UserLogin.php">Already have an account?</a>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>


<!-- BACK-END -->
<?php
if(isset($_POST['BtnSignup']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "insert into USERS values(Null,'$fname','$lname','$age','$gender','$city','$email','$contact','$address','$username','$password')";
    $exec = mysqli_query($con,$query);
    if($exec==true)
    {
        echo "
              <script>
              swal.fire({
                  title: 'REGISTERED SUCCESSFULLY',
                  text: 'Your Username is ".$username." and Password is ".$password."',
                  icon: 'success',
                  confirmButtonColor: 'blue',
                }).then(function(){
                    window.location.href='UserLogin.php';
                })
                </script>";
    }
}
?>



<!-- Compare Password Functionality By Javascript -->
<script>
    function ComparePasswords()
    {
        var pass = document.getElementById("pass");
        var cpass = document.getElementById("cpass");
        if(pass.value == cpass.value)
        {
            return true;
        }
        else
        {
            alert('Password & Confirm Password is not identical');
            return false;
        }
    }
</script>


<!-- Show Password Functionality By Java Script -->
<script>
    function ShowPassowrd()
    {
        var pass = document.getElementById("pass");
        var cpass = document.getElementById("cpass");
        if(pass.type=="password" || cpass.type=="password")
        {
            pass.type="text";
            cpass.type="text";
        }
        else
        {
            pass.type="password";
            cpass.type="password";
        }
    }
</script>


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
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ea564d0ef644c26","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>