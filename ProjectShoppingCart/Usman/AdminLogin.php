<?php
session_start();
include('dbConnection.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Admin Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Sweet Alert2 File Links -->
    <script src="dist/sweetalert2.min.js"></script>
    
    <!-- Navlinks -->
    <link rel="icon" href="img/xfavicon.png.pagespeed.ic.pBryiaU2YA.png">
    
    <link rel="stylesheet" href="css/bootstrap.min.css%2banimate.css%2bowl.carousel.min.css%2bnice-select.css%2ball.css%2bflaticon.css%2bthemify-icons.css%2bmagnific-popup.css%2bslick.css%2bprice_rangs.css" />
    
    
    <link rel="stylesheet" href="css/A.style.css.pagespeed.cf.ZaQ6zsBcp1.css">
    <script nonce="a2afed65-c3c5-4281-9957-127b03e0ed76">(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
    <link rel="stylesheet" href="dist/sweetalert2.min.css">
    
    
    <body>
        <!-- Navbar Started -->
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
                                            <a class="dropdown-item" href="ViewProducts.php"> Chairs</a>
                                            <a class="dropdown-item" href="#">Skulls</a>

                                        </div>
                                    </li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        pages
    </a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
<a class="dropdown-item" href="AdminLogin.php"> login</a>
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
        <a class="dropdown-toggle" href="cart.html" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-cart-plus"></i>
        </a>
        
    </div>
</div>
</nav>
</div>
</div>
</div>

</header>
<!-- Navbar Ended -->


<!-- Admin Login Form -->
<section class="login_part padding_top">
<div class="col-lg-6 col-md-6 mx-auto">
<div class="login_part_form">
<div class="login_part_form_iner">
<h1 class="text-center" style="font-weight:900; color:gray">ADMIN LOGIN</h1>
<br>

<form action="" method="post">
<div class="col-md-12 form-group p_star">

<!-- Email -->
<input type="text" class="form-control" name="email" placeholder="Enter Email" required value="<?php if(isset($_COOKIE['email'])) { echo $_COOKIE['email']; } ?>">
</div>

<!-- Password -->
<div class="col-md-12 form-group p_star">
<input type="password" class="form-control" name="password" placeholder="Enter Password" required value="<?php if(isset($_COOKIE['password'])) { $decode = base64_decode($_COOKIE['password']); echo $decode; } ?>">
</div>

<!-- Remember Me Check Box -->
<div class="col-md-12 form-group">
<div class="creat_account d-flex align-items-center">
<input type="checkbox" id="f-option" name="RememberMe" <?php if(isset($_COOKIE['email'])) { ?> checked <?php } ?>>
<label for="f-option">Remember me</label>
</div>

<!-- Login Button -->
<input type="submit" value="log in" class="btn_3" name="LoginBtn">

</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>



<?php
      if(isset($_POST['LoginBtn']))
      {
          $email = $_POST['email'];
          $password = $_POST['password'];
          
          $query = "select * from ADMINS where EMAIL='$email' and PASSWORD='$password'";
          $result = mysqli_query($con,$query);
          $totalRows = mysqli_num_rows($result);
          $data = mysqli_fetch_assoc($result);
          
          if($totalRows==1)
          {
              $_SESSION['AdminName'] = $data['NAME'];
              echo "
              <script>
              swal.fire({
                  title: 'Login Successful!',
                  text: 'Welcome ".$_SESSION['AdminName']."',
                  icon: 'success',
                  confirmButtonColor: 'blue',
                  timer: 3000
                }).then(function(){
                    window.location.href='AddProduct.php';
                })
                </script>";
                //   Remember Me Functionality
                if(isset($_POST['RememberMe']))
                {
                    setcookie('email',$email,time()+24*24*24*24);
                    setcookie('password',base64_encode($password),time()+24*24*24*24);
                }
                else
                {
                    setcookie('email','',time()-24*24*24*24);
                    setcookie('password','',time()-24*24*24*24);
                }
            }
            else
            {
            echo "
            <script>
            swal.fire({
                title: 'Login Failed!',
                text: 'Email or Password is incorrect',
                icon: 'error',
                confirmButtonColor: 'blue',
                timer: 3000
            })
            </script>
            ";
        }
    }
    
    ?>

<!-- Show Password Functionality By Java Script -->
<script>
    function ShowPassword()
    {
        var pass = document.getElementById("pass");
        if(pass.type == "text")
        {
            pass.type="password";
        }
        else
        {
            pass.type="text";
        }
    }
    </script>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
</head>