<?php
// Maintaining Connection To MySql
$con = mysqli_connect('localhost','root','','SHOPPING_CART');

// Condition 'if connection has not established'
if($con!=true)
{
    echo "<script>alert('Database not connected')</script>";
}
?>