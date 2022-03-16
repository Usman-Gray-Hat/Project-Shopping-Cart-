<?php
session_start();
include('dbConnection.php');
if($_SESSION['AdminName']==null)
{
    header("Location:AdminLogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <!-- Nav links -->
    <link rel="icon" href="img/xfavicon.png.pagespeed.ic.pBryiaU2YA.png">
    
    
    
    <link rel="stylesheet" href="css/A.style.css.pagespeed.cf.ZaQ6zsBcp1.css">
    <script nonce="a2afed65-c3c5-4281-9957-127b03e0ed76">(function(w,d){!function(a,e,t,r,z){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zarazData.tracks=[],a.zaraz={deferred:[]};var s=e.getElementsByTagName("title")[0];s&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.dataLayer=a.dataLayer||[],a.zaraz.track=(e,t)=>{for(key in a.zarazData.tracks.push(e),t)a.zarazData["z_"+key]=t[key]},a.zaraz._preSet=[],a.zaraz.set=(e,t,r)=>{a.zarazData["z_"+e]=t,a.zaraz._preSet.push([e,t,r])},a.dataLayer.push({"zaraz.start":(new Date).getTime()}),a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r);z.defer=!0,z.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
    <link rel="stylesheet" href="css/bootstrap.min.css%2banimate.css%2bowl.carousel.min.css%2bnice-select.css%2ball.css%2bflaticon.css%2bthemify-icons.css%2bmagnific-popup.css%2bslick.css%2bprice_rangs.css" />
    <title>Retrieval</title>
</head>
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
        settings
    </a>

<div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
<a class="dropdown-item" href="AdminLogout.php"> <?php if(isset($_SESSION['AdminName'])) {  echo "logout </a>"; } ?>
<a class="dropdown-item" href="AddProduct.php">Add new product</a>
<a class="dropdown-item" href="ViewProducts.php">Go to main web</a>
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


<?php

$query = "select * from PRODUCT";
$result = mysqli_query($con,$query);
$totalRows = mysqli_num_rows($result);
if($totalRows>0)
{
    ?>
    <div class="container" style="margin-top:100px;">
    <div class="row">
        <div class="col-md-3 offset-8">
    <a class="btn_1 float-right" href="AddProduct.php">Add Record</a>
    <br> <br> <br>
</div>
</div>
        <div class="row">
            <div class="col-md-10 offset-1">
            <table id="MyTable" class="table table-bordered table-hover table-striped">
                
        <thead>
            <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Description</th>
            <th>Product Image</th>
            <th>Edit</th>
            <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php
            while($data=mysqli_fetch_assoc($result))
            {
                echo "<tr>
                <td>".$data['ID']."</td>
                <td>".$data['NAME']."</td>
                <td>".$data['PRICE']."</td>
                <td>".$data['DESCRIPTION']."</td>
                <td> <img src='$data[IMAGE_PATH]' height='70' width='70'> </td>
                <td> <a class='btn btn-success' href='Update.php?id=$data[ID]'>Edit</a></td>
                <td> <a class='btn btn-danger' href='Delete.php?id=$data[ID]' onclick='return Confirmation()'>Delete</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
            </div>
        </div>
    </div>
    <?php
}
else
{
    echo "
            <script>
            swal.fire({
                title: 'No Rows Found!',
                text: 'Table is empty :(',
                icon: 'error',
                confirmButtonColor: 'blue',
                timer: 2000
            })
            </script>
            ";
}
?>

<script>
    function Confirmation()
    {
        return confirm('Are you sure you want to delete this record?');
    }

    $(document).ready(function () {
        $("#MyTable").dataTable();
    });
</script>


</body>
</html>