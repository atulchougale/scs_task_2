<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("head.php");
    ?>
</head>

<body>
    <?php
    include("header.php");
    ?>

    <main>
        <div class="container row product_cont mt-4 mb-4 admin ">
            <div class="col-sm-4 col-lg-3 col-sl-3 col-md-3">

                <div class="menu1 text-center">

                    <a href="./adminDashboard.php">Dashboard</a>
                </div>

                <div class="menu1 text-center">
                    <a href="./adminAllProducts.php">All Dishes</a>
                </div>

                <div class="menu1 text-center">
                    <a href="./adminAddProducts.php">Add Dish</a>
                </div>

                <div class="menu1 text-center">
                    <a href="./adminCustomers.php">Customers</a>
                </div>
            </div>

            <?php
            include("dbconnect.php");
            $id = $_GET['id'];

            $view = "SELECT * FROM `disesh` WHERE id='$id'";
            $query = mysqli_query($conn, $view);
            $data = mysqli_fetch_assoc($query);
            ?>


            <div class="col-sm-8 col-lg-9 col-sl-9 col-md-9 pb-4">

                <div class="container mt-2 pt-3 pb-5 bg-secondary  ">
                    <div class="col">
                        <div class="col-md-10 ">
                            <div class="card justify-content-center" style="margin-left:100px ;">
                                <div class="card-header head">
                                    <h3 class="text-center">Update Food</h3>
                                </div>
                                <form action="#" method="post" class="card-body" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="" class="text-dark p-1">Food name</label>
                                        <input type="text" class="form-control " value="<?php echo $data['foodname'] ?>" id="name" name="foodname" placeholder="Enter Food name">
                                    </div>


                                    <div class="form-group">
                                        <label class="text-dark p-1 " for="category">Food Category</label>
                                        <select class="form-select " id="category" name="category">

                                            <option value="Kolhapuri" <?php
                                                                        if ($data['category'] == 'Kolhapuri') {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Kolhapuri Special</option>
                                            <option value="chicken" <?php
                                                                    if ($data['category'] == 'chicken') {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Chicken</option>
                                            <option value="biryani" <?php
                                                                    if ($data['category'] == 'biryani') {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Biryani</option>
                                            <option value="vegetable" <?php
                                                                        if ($data['category'] == 'vegetable') {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Pure Veg Dishes</option>
                                            <option value="paneer" <?php
                                                                    if ($data['category'] == 'paneer') {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Paneer Dishes</option>
                                            <option value="chinese" <?php
                                                                    if ($data['category'] == 'chinese') {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Chinese</option>
                                            <option value="south_indian" <?php
                                                                            if ($data['category'] == 'south_indian') {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>South Indian</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="text-dark p-1">Rating</label>
                                        <input type="text" class="form-control " value="<?php echo $data['rating'] ?>" id="rating" name="rating" placeholder="Enter Rating">
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="text-dark p-1">Price</label>
                                        <input type="text" class="form-control " value="<?php echo $data['price'] ?>" id="price" name="price" placeholder="Enter Price">
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="text-dark p-1">Food Image</label>
                                        <input type="file" class="form-control " id="image" name="foodimage" placeholder="Food Image">
                                    </div>
                                    <div class="mt-3 text-center">
                                        <button class="btn btn-primary align-content-center" type="submit" name="submit">Update
                                            Food</button>


                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </main>

    <?php
    include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</body>

</html>


<?php
include 'dbconnect.php';

if (isset($_POST['submit'])) {


    $foodname    = $_POST['foodname'];
    $category    = $_POST['category'];
    $rating    = $_POST['rating'];
    $price   = $_POST['price'];

    // Check if a new image is uploaded
    if ($_FILES['foodimage']['size'] > 0) {
        $file_name = $_FILES['foodimage']['name'];
        $file_temp = $_FILES['foodimage']['tmp_name'];
        $folder = 'foodImg/' . $file_name;
        move_uploaded_file($file_temp, $folder);

        // Update all fields, including the new image
        $update = "UPDATE `disesh` SET `foodname`='$foodname', `category`='$category', `rating`='$rating', `price`='$price', `foodimage`='$folder' WHERE id='$id'";
    } else {
        // No new image, update other fields only
        $update = "UPDATE `disesh` SET `foodname`='$foodname', `category`='$category', `rating`='$rating', `price`='$price' WHERE id='$id'";
    }
    $query = mysqli_query($conn, $update);

    if ($query) {
        echo  "<script>
            swal({
                title: 'Successfully!',
                text: 'Dish Updated Successfully',
                icon: 'success',
                button: 'Ok, Done!',
                
            }).then(function() {
                window.location.href = 'adminAllProducts.php';
            });
          </script>";
    } else {
        echo "<script>
                swal({
                    title: 'Error!',
                    text: 'Dish Updated Failed!',
                    icon: 'error',
                    button: 'Ok, Done!',
                   
                }).then(function() {
                    window.location.href = 'adminUpdateFood.php';
                });
            </script>";
    }
}

?>