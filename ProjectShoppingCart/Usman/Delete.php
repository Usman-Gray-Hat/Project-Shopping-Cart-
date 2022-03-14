<?php
include('dbConnection.php');

$DeletedId = $_GET['id']??"";
$query1 = "select * from PRODUCT where ID='$DeletedId'";
$result = mysqli_query($con,$query1);
$data = mysqli_fetch_assoc($result);

$img = $data['IMAGE_PATH'];

$query2 = "delete from PRODUCT where ID='$DeletedId'";
$exec = mysqli_query($con,$query2);
if($exec==true)
{
    $_SESSION['Deletion'] = $data['ID'];
    unlink($img);
    header("Location:Retrieval.php");
}
?>