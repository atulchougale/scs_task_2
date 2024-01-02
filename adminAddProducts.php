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
            <div class="col-sm-8 col-lg-9 col-sl-9 col-md-9 pb-4">

                <div class="container mt-2 pt-3 pb-5 bg-secondary  ">
                    <div class="col">
                        <div class="col-md-10 ">
                            <div class="card justify-content-center" style="margin-left:100px ;">
                                <div class="card-header head">
                                    <h3 class="text-center">Add Food</h3>
                                </div>
                                <form action="adminAddFood.php" method="post" class="card-body" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="" class="text-dark p-1">Food name</label>
                                        <input type="text" class="form-control black_gold" id="name" name="foodname" placeholder="Enter Food name">
                                    </div>

                                   
                                    <div class="form-group">
                                        <label class="text-dark p-1 " for="category">Food Category</label>
                                        <select class="form-select " id="category" name="category">
                                            <option selected>Select Food Category</option>
                                            <option value="Kolhapuri">Kolhapuri Special</option>
                                            <option value="chicken">Chicken</option>
                                            <option value="biryani">Biryani</option>
                                            <option value="vegetable">Pure Veg Dishes</option>
                                            <option value="paneer">Paneer Dishes</option>
                                            <option value="chinese">Chinese</option>
                                            <option value="south_indian">South Indian</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="text-dark p-1">Rating</label>
                                        <input type="text" class="form-control black_gold" id="rating" name="rating" placeholder="Enter Rating">
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="text-dark p-1">Price</label>
                                        <input type="text" class="form-control black_gold" id="price" name="price" placeholder="Enter Price">
                                    </div>

                                    <div class="form-group">
                                        <label for="" class="text-dark p-1">Food Image</label>
                                        <input type="file" class="form-control black_gold" id="image" name="foodimage" placeholder="Food Image">
                                    </div>
                                    <div class="mt-3 text-center">
                                        <button class="btn btn-primary align-content-center" type="submit" name="submit">Add
                                            Food</button>


                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-2 pt-3 pb-5 bg-secondary  ">
                    <table class="table table-dark table-striped mt-5 rounded text-center">
                        <tr class="">
                            <th>ID</th>
                            <th>FOOD NAME</th>
                            <th>CATEGORY</th>
                            <th>RATING</th>
                            <th>PRISE</th>
                            <th>FOOD IMAGE</th>
                            <th>ACTIONS</th>
                        </tr>

                        <?php
                        include("dbconnect.php");

                        $view = "SELECT * FROM `disesh`";
                        $query = mysqli_query($conn, $view);
                        while ($data = mysqli_fetch_assoc($query)) {

                        ?>
                            <tr>
                                <td><?php echo $data['id'] ?></td>
                                <td><?php echo $data['foodname'] ?></td>
                                <td><?php echo $data['category'] ?></td>
                                <td><?php echo $data['rating'] ?></td>
                                <td><?php echo $data['price'] ?></td>
                                <td>
                                    <img src="<?php echo $data['foodimage'] ?>" alt="<?php echo $data['foodname'] ?>" width="80px" height="60px">
                                </td>
                                <td> <a href="adminUpdateFood.php?id=<?php echo $data['id'] ?>" class="btn btn-primary me-5">Update</a>
                                    <a href="adminDeleteDish.php?id=<?php echo $data['id'] ?>" class="btn btn-danger" onclick=" return checkDelete()">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>


            </div>
        </div>
    </main>

    <?php
    include("footer.php");
    ?>
    <script>
        function checkDelete() {
            return confirm("Are you sure you want to delete this record ?");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</body>

</html>