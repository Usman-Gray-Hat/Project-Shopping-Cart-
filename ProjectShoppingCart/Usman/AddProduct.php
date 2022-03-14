<?php
include('dbConnection.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Add Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Sweet Alert2 File Links -->
    <link rel="stylesheet" href="dist/sweetalert2.min.css">
    <script src="dist/sweetalert2.min.js"></script>
  </head>
  <body>

      <!-- Using Bootstrap Grid System -->
      <div class="container" style="margin-top:100px;">
          <div class="row">
              <div class="col-md-4 offset-3" style="-webkit-box-shadow: 0px 1px 12px -1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 1px 12px -1px rgba(0,0,0,0.75);
box-shadow: 0px 1px 12px -1px rgba(0,0,0,0.75);
Copy Text
">

              <!-- Form For Adding Product -->
                  <form action="" method="post" enctype="multipart/form-data">
                      <br>
                      <!-- Form Heading -->
                      <h1 class="text-center" style="font-weight:900">ADD NEW PRODUCT</h1>
                      

                      <!-- Product Name -->
                      <input type="text" name="name" placeholder="Enter Product Name" class="form-control" required>
                      <br>

                      <!-- Product Price -->
                      <input type="number" name="price" placeholder="Enter Product Price" class="form-control" required>
                      <br>

                      <!-- Product Description -->
                      <div class="form-group">
                        <textarea class="form-control" name="description" placeholder="Specify about your product" rows="5"></textarea>
                      </div>

                      <!-- Product Image -->
                      <input type="file" name="image" required>
                      <br><br>

                      <!-- Insert Button -->
                      <input type="submit" value="Add Product" name="BtnAdd" class="btn btn-success btn-block">

                      <!-- View Product On Panel -->
                      <a href="Retrieval.php" class="btn btn-info btn-block">View Records On Panel</a>

                      <!-- View Product On Web -->
                      <a href="ViewProducts.php" class="btn btn-primary btn-block">View Records On Web</a>
                      <br>
                  </form>
              </div>
          </div>
      </div>

      <!-- Backend -->
      <?php
      if(isset($_POST['BtnAdd']))
      {
          $name = $_POST['name'];
          $price = $_POST['price'];
          $description = $_POST['description'];

        //   For image
        $image_name = $_FILES['image']['name'];
        $image_temp_name = $_FILES['image']['tmp_name'];
        $image_type = $_FILES['image']['type'];
        $image_size = $_FILES['image']['size'];

        // Image Validations....

        // Validation For Image Format 
        if(strtolower($image_type)=="image/png" || strtolower($image_type)=="image/jpg" || strtolower($image_type)=="image/jpeg")
        {
            // Validation For Image Size
            if($image_size<2000000)
            {
                // Folder location
                $folder = "images/".$image_name;
                // Query
                $query = "insert into PRODUCT values(Null,'$name','$price','$description','$folder')";
                // Executing query
                $exec =mysqli_query($con,$query);

                if($exec==true)
                {
                    echo "
                    <script>
                    swal.fire({
                        title: 'Data Added!',
                        text: 'New Record has been created successfully',
                        icon: 'success',
                        confirmButtonColor: 'blue',
                        timer: 3000
                    });
                    </script>";
                    move_uploaded_file($image_temp_name,$folder);
                }
                else
                {
                    echo "
                <script>
                swal.fire({
                    title: 'Failed',
                    text: 'Data Not Added',
                    icon: 'error',
                    confirmButtonColor: 'blue',
                    timer: 3000
                })
                </script>";
                }
            }
            else
            {
                echo "
                <script>
                swal.fire({
                    title: 'Too Large!',
                    text: 'Image size shoulde be less than 1MB',
                    icon: 'error',
                    confirmButtonColor: 'blue',
                    timer: 3000
                })
                </script>";
            }
        }
        else
        {
            echo "
            <script>
            swal.fire({
                title: 'Invalid Format!',
                text: 'Format not supported',
                icon: 'error',
                confirmButtonColor: 'blue',
                timer: 3000
            })
            </script>";
        }


      }
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>