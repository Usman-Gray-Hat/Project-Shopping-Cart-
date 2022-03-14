<?php
include('dbConnection.php');
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
    <title>Retrieval</title>
</head>
<body>
<?php

$query = "select * from PRODUCT";
$result = mysqli_query($con,$query);
$totalRows = mysqli_num_rows($result);
if($totalRows>0)
{
    ?>
    <div class="container" style="margin-top:50px;">
    <div class="row">
        <div class="col-md-3 offset-8">
    <a class="btn btn-primary float-right" href="AddProduct.php">Add Record</a>
    <br> <br>
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