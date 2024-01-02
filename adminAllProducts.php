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
        <div class="container row product_cont mt-4 admin">
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
            <div class="col-sm-8 col-lg-9 col-sl-9 col-md-9">
                <h1 class="text-center">OUR DELICACY</h1>
                <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd; ">
                        <div class="container-fluid">
                            <a class="navbar-brand fs-5 fw-bold " style="color: orangered" href="#">MENU</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav fs-5 fw-bold ">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#kolhapur">Kolhapur Specials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#biryani">Biryani</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#chicken">Non Veg</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#paneer">Paneer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#vegetable">Pure Veg</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#chinese">Chinese</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#south">South Indian</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                <div id="food-items" class="d-food-items">
                    

                    <div id="kolhapur" class="d-vegetable">
                        <p class="category-name text-center">Kolhapur Specials</p>
                        <?php
                        include("dbconnect.php");

                        $view = "SELECT * FROM `disesh` WHERE category ='kolhapuri'";
                        $query = mysqli_query($conn, $view);
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>


                            <div id="item-card">
                                <div id="card-top">
                                    <i class="fa fa-star" id="rating"> <?php echo $data['rating'] ?></i>
                                    <a href="adminUpdateFood.php?id=<?php echo $data['id'] ?>"><i class="fa fa-edit edit"></i></a>
                                    <a href="adminDeleteDish.php?id=<?php echo $data['id'] ?>" onclick=" return checkDelete()"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                <img src="<?php echo $data['foodimage'] ?>" alt="<?php echo $data['foodname'] ?>">
                                <p id="item-name"><?php echo $data['foodname'] ?></p>
                                <p id="item-price"><?php echo $data['price'] ?> RS/-</p>
                            </div>
                        <?php
                        };
                        ?>


                    </div>

                    <div id="biryani" class="d-biryani">
                        <p class="category-name text-center">Biryani</p>
                        <?php
                        include("dbconnect.php");

                        $view = "SELECT * FROM `disesh` WHERE category ='biryani'";
                        $query = mysqli_query($conn, $view);
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>


                            <div id="item-card">
                                <div id="card-top">
                                    <i class="fa fa-star" id="rating"> <?php echo $data['rating'] ?></i>
                                    <a href="adminUpdateFood.php?id=<?php echo $data['id'] ?>"><i class="fa fa-edit edit"></i></a>
                                    <a href="adminDeleteDish.php?id=<?php echo $data['id'] ?>" onclick=" return checkDelete()"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                <img src="<?php echo $data['foodimage'] ?>" alt="<?php echo $data['foodname'] ?>">
                                <p id="item-name"><?php echo $data['foodname'] ?></p>
                                <p id="item-price"><?php echo $data['price'] ?> RS/-</p>
                            </div>
                        <?php
                        };
                        ?>
                    </div>

                    <div id="chicken" class="d-chicken">
                        <p class="category-name text-center">Non Veg Delicious</p>
                        <?php
                        include("dbconnect.php");

                        $view = "SELECT * FROM `disesh` WHERE category ='chicken'";
                        $query = mysqli_query($conn, $view);
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>


                            <div id="item-card">
                                <div id="card-top">
                                    <i class="fa fa-star" id="rating"> <?php echo $data['rating'] ?></i>
                                    <a href="adminUpdateFood.php?id=<?php echo $data['id'] ?>"><i class="fa fa-edit edit"></i></a>
                                    <a href="adminDeleteDish.php?id=<?php echo $data['id'] ?>" onclick=" return checkDelete()"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                <img src="<?php echo $data['foodimage'] ?>" alt="<?php echo $data['foodname'] ?>">
                                <p id="item-name"><?php echo $data['foodname'] ?></p>
                                <p id="item-price"><?php echo $data['price'] ?> RS/-</p>
                            </div>
                        <?php
                        };
                        ?>
                    </div>

                    <div id="paneer" class="d-paneer">
                        <p class="category-name text-center">Paneer Mania</p>
                        <?php
                        include("dbconnect.php");

                        $view = "SELECT * FROM `disesh` WHERE category ='paneer'";
                        $query = mysqli_query($conn, $view);
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>


                            <div id="item-card">
                                <div id="card-top">
                                    <i class="fa fa-star" id="rating"> <?php echo $data['rating'] ?></i>
                                    <a href="adminUpdateFood.php?id=<?php echo $data['id'] ?>"><i class="fa fa-edit edit"></i></a>
                                    <a href="adminDeleteDish.php?id=<?php echo $data['id'] ?>" onclick=" return checkDelete()"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                <img src="<?php echo $data['foodimage'] ?>" alt="<?php echo $data['foodname'] ?>">
                                <p id="item-name"><?php echo $data['foodname'] ?></p>
                                <p id="item-price"><?php echo $data['price'] ?> RS/-</p>
                            </div>
                        <?php
                        };
                        ?>
                    </div>

                    <div id="vegetable" class="d-vegetable">
                        <p class="category-name text-center">Pure Veg Dishes</p>
                        <?php
                        include("dbconnect.php");

                        $view = "SELECT * FROM `disesh` WHERE category ='vegetable'";
                        $query = mysqli_query($conn, $view);
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>


                            <div id="item-card">
                                <div id="card-top">
                                    <i class="fa fa-star" id="rating"> <?php echo $data['rating'] ?></i>
                                    <a href="adminUpdateFood.php?id=<?php echo $data['id'] ?>"><i class="fa fa-edit edit"></i></a>
                                    <a href="adminDeleteDish.php?id=<?php echo $data['id'] ?>" onclick=" return checkDelete()"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                <img src="<?php echo $data['foodimage'] ?>" alt="<?php echo $data['foodname'] ?>">
                                <p id="item-name"><?php echo $data['foodname'] ?></p>
                                <p id="item-price"><?php echo $data['price'] ?> RS/-</p>
                            </div>
                        <?php
                        };
                        ?>
                    </div>

                    <div id="chinese" class="d-chinese">
                        <p class="category-name text-center">Chinese Corner</p>
                        <?php
                        include("dbconnect.php");

                        $view = "SELECT * FROM `disesh` WHERE category ='chinese'";
                        $query = mysqli_query($conn, $view);
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>


                            <div id="item-card">
                                <div id="card-top">
                                    <i class="fa fa-star" id="rating"> <?php echo $data['rating'] ?></i>
                                    <a href="adminUpdateFood.php?id=<?php echo $data['id'] ?>"><i class="fa fa-edit edit"></i></a>
                                    <a href="adminDeleteDish.php?id=<?php echo $data['id'] ?>" onclick=" return checkDelete()"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                <img src="<?php echo $data['foodimage'] ?>" alt="<?php echo $data['foodname'] ?>">
                                <p id="item-name"><?php echo $data['foodname'] ?></p>
                                <p id="item-price"><?php echo $data['price'] ?> RS/-</p>
                            </div>
                        <?php
                        };
                        ?>
                    </div>

                    <div id="south" class="d-south-indian">
                        <p class="category-name text-center">South Indian</p>
                        <?php
                        include("dbconnect.php");

                        $view = "SELECT * FROM `disesh` WHERE category ='south_indian'";
                        $query = mysqli_query($conn, $view);
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>


                            <div id="item-card">
                                <div id="card-top">
                                    <i class="fa fa-star" id="rating"> <?php echo $data['rating'] ?></i>
                                    <a href="adminUpdateFood.php?id=<?php echo $data['id'] ?>"><i class="fa fa-edit edit"></i></a>
                                    <a href="adminDeleteDish.php?id=<?php echo $data['id'] ?>" onclick=" return checkDelete()"><i class="fa-solid fa-trash"></i></a>
                                </div>
                                <img src="<?php echo $data['foodimage'] ?>" alt="<?php echo $data['foodname'] ?>">
                                <p id="item-name"><?php echo $data['foodname'] ?></p>
                                <p id="item-price"><?php echo $data['price'] ?> RS/-</p>
                            </div>
                        <?php
                        };
                        ?>
                    </div>
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