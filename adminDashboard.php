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
        <h1 class="text-center fw-bold">ADMIN DASHBOARD</h1>
        <div class=" container row rounder m-4 coll p-5">
          <?php
          include("dbconnect.php");

          $view = "SELECT * FROM `registration` WHERE email ='admin@gmail.com'";
          $query = mysqli_query($conn, $view);
          while ($data = mysqli_fetch_assoc($query)) {
          ?>
            <div class=" mb-3  col-lg-6">
              <h3 class="d-inline fs-2 fw-bold">Name :- </h3> <span class="d-inline fw-bold" style="color:black; font-size:25px;"><?php echo $data['name'] ?></span>
            </div>
            <div class=" mb-3 col-lg-6">
              <h3 class="d-inline fs-2 fw-bold">Email :- </h3> <span class="d-inline fw-bold" style="color:black; font-size:25px;"><?php echo $data['email'] ?></span>
            </div>
            <div class=" mb-3 col-lg-6">
              <h3 class="d-inline fs-2 fw-bold">Phone no. :- </h3> <span class="d-inline fw-bold" style="color:black; font-size:25px;"><?php echo $data['phone'] ?></span>
            </div>
            <div class=" mb-3 col-lg-6">
              <h3 class="d-inline fs-2 fw-bold">Pin Code :- </h3> <span class="d-inline fw-bold" style="color:black; font-size:25px;"><?php echo $data['pin_code'] ?></span>
            </div>
            <div class=" mb-3 col-lg-6">
              <h3 class="d-inline fs-2 fw-bold">Address :- </h3> <span class="d-inline fw-bold" style="color:black; font-size:25px;"><?php echo $data['address'] ?></span>
            </div>
            <div class=" mb-3 col-lg-6 text-center">
              <a href="adminCustUpdate.php?id=<?php echo $data['id'] ?>" class="btn btn-outline-primary">Edit</a>
            </div>
          <?php
          };
          ?>
        </div>
        <div class="container row rounder m-4 ">
          
            <a href="./adminCustomers.php" class=" col-lg-5 rounder text-center coll p-5 text-decoration-none">

              <?php
              include 'dbconnect.php';

              $view = "SELECT COUNT(email) AS totalCustomers FROM `registration`";
              $query = mysqli_query($conn, $view);
              $row = mysqli_fetch_assoc($query);
              ?>
              <h1 class="p-3 mb-2">Total Customers </h1>
              <h3 class="fs-1 text-dark fw-bolder"><?php echo $row['totalCustomers'] ?></h3>
            </a>
        
          <div class="col-lg-2"></div>
          <a href="./adminAllProducts.php" class=" col-lg-5 rounder text-center coll p-5 text-decoration-none">
            <?php
            include 'dbconnect.php';

            $view1 = "SELECT COUNT(foodname) AS totalDishes FROM `disesh`";
            $query1 = mysqli_query($conn, $view1);
            $row1 = mysqli_fetch_assoc($query1);
            ?>
            <h1 class="p-3 mb-2">Total Food Dishes </h1>
            <h3 class="fs-1 text-dark fw-bolder"><?php echo $row1['totalDishes'] ?></h3>
          </a>

        </div>
        <div class="container row  m-4 p-3 coll ">
          <h3 class="text-center fs-1 fw-bolder text-dark ">Menu Statistics</h3>
          <div class="col-lg-3 col-md-6 container rounder text-center coll p-3 m-1 mb-5">

            <?php
            include 'dbconnect.php';

            $view2 = "SELECT COUNT(foodname) AS totalDishes FROM `disesh` WHERE category='Kolhapuri'";
            $query2 = mysqli_query($conn, $view2);
            $row2 = mysqli_fetch_assoc($query2);
            ?>

            <h1 class="p-3 mb-2">kolhapuri Special</h1>
            <h3 class="fs-1 text-dark fw-bolder"><?php echo $row2['totalDishes'] ?></h3>
          </div>

          <div class="col-lg-3 col-md-6 container rounder text-center coll p-3 m-1 mb-5">
            <?php
            include 'dbconnect.php';

            $view3 = "SELECT COUNT(foodname) AS totalDishes FROM `disesh` WHERE category='chicken'";
            $query3 = mysqli_query($conn, $view3);
            $row3 = mysqli_fetch_assoc($query3);
            ?>
            <h1 class="p-3 mb-2">Chicken Delicious</h1>
            <h3 class="fs-1 text-dark fw-bolder"><?php echo $row3['totalDishes'] ?></h3>
          </div>

          <div class="col-lg-3 col-md-6 container rounder text-center coll p-3 m-1 mb-5">
            <?php
            include 'dbconnect.php';

            $view4 = "SELECT COUNT(foodname) AS totalDishes FROM `disesh` WHERE category='paneer'";
            $query4 = mysqli_query($conn, $view4);
            $row4 = mysqli_fetch_assoc($query4);
            ?>
            <h1 class="p-3 mb-2">Panier Mania</h1>
            <h3 class="fs-1 text-dark fw-bolder"><?php echo $row4['totalDishes'] ?></h3>
          </div>

          <div class="col-lg-3 col-md-6 container rounder text-center coll p-3 m-1 mb-5">
            <?php
            include 'dbconnect.php';

            $view5 = "SELECT COUNT(foodname) AS totalDishes FROM `disesh` WHERE category='vegetable'";
            $query5 = mysqli_query($conn, $view5);
            $row5 = mysqli_fetch_assoc($query5);
            ?>
            <h1 class="p-3 mb-2">Pure Veg Dishes</h1>
            <h3 class="fs-1 text-dark fw-bolder"><?php echo $row5['totalDishes'] ?></h3>
          </div>

          <div class="col-lg-3 col-md-6 container rounder text-center coll p-3 m-1 mb-5">
            <?php
            include 'dbconnect.php';

            $view6 = "SELECT COUNT(foodname) AS totalDishes FROM `disesh` WHERE category='chinese'";
            $query6 = mysqli_query($conn, $view6);
            $row6 = mysqli_fetch_assoc($query6);
            ?>
            <h1 class="p-3 mb-2">Chinese Corner</h1>
            <h3 class="fs-1 text-dark fw-bolder"><?php echo $row6['totalDishes'] ?></h3>
          </div>

          <div class="col-lg-3 col-md-6 container rounder text-center coll p-3 m-1 mb-5">
            <?php
            include 'dbconnect.php';

            $view7 = "SELECT COUNT(foodname) AS totalDishes FROM `disesh` WHERE category='biryani'";
            $query7 = mysqli_query($conn, $view7);
            $row7 = mysqli_fetch_assoc($query7);
            ?>
            <h1 class="p-3 mb-2">Biryani</h1>
            <h3 class="fs-1 text-dark fw-bolder"><?php echo $row7['totalDishes'] ?></h3>
          </div>

          <div class="col-lg-3 col-md-6 container rounder text-center coll p-3 m-1 mb-5">
            <?php
            include 'dbconnect.php';

            $view8 = "SELECT COUNT(foodname) AS totalDishes FROM `disesh` WHERE category='south_indian'";
            $query8 = mysqli_query($conn, $view8);
            $row8 = mysqli_fetch_assoc($query8);
            ?>
            <h1 class="p-3 mb-2">South Indian</h1>
            <h3 class="fs-1 text-dark fw-bolder"><?php echo $row8['totalDishes'] ?></h3>
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