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
        <div class="container">
          <h1 class="text-center">CUSTOMERS</h1>
          <div class="conntainer-fluid">
            <table class="table table-dark table-striped mt-5 rounded text-center">
              <tr class="">
                <th>ID</th>
                <th>PHOTO</th>
                <th>FUll NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>PIN CODE</th>
                <th>ADDRESS</th>
                <th>ACTIONS</th>
              </tr>

              <?php
              include 'dbconnect.php';

              $view = "SELECT * FROM `registration`";
              $query = mysqli_query($conn, $view);
              while ($data = mysqli_fetch_assoc($query)) {

              ?>
                <tr>
                  <td><?php echo $data['id'] ?></td>
                  <td>
                    <img src="<?php echo $data['photo'] ?>" alt="<?php echo $data['name'] ?>" width="80px" height="60px">

                  </td>
                  <td><?php echo $data['name'] ?></td>
                  <td><?php echo $data['email'] ?></td>
                  <td><?php echo $data['phone'] ?></td>
                  <td><?php echo $data['pin_code'] ?></td>
                  <td><?php echo $data['address'] ?></td>
                  
                  <td>
                    <a href="adminCustDelete.php?id=<?php echo $data['id'] ?>" class="btn btn-danger" onclick=" return checkDelete()">Delete</a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </table>
          </div>
        </div>

        <div class="container mt-4">
          <h1 class="text-center">Customers Feedback/Suggestions</h1>
          <div class="container-fluid">
            <table class="table table-dark table-striped mt-5 rounded text-center">
              <tr class="">
                <th>ID</th>

                <th>FUll NAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>SUBJECT</th>
                <th>MASSAGE</th>
                <th>ACTION</th>

              </tr>

              <?php
              include 'dbconnect.php';

              $view = "SELECT * FROM `contact`";
              $query = mysqli_query($conn, $view);
              while ($data = mysqli_fetch_assoc($query)) {

              ?>
                <tr>
                  <td><?php echo $data['id'] ?></td>

                  <td><?php echo $data['name'] ?></td>
                  <td><?php echo $data['email'] ?></td>
                  <td><?php echo $data['phone'] ?></td>
                  <td><?php echo $data['subject'] ?></td>
                  <td><?php echo $data['message'] ?></td>
                  <td><a href="adminCustDelete.php?id=<?php echo $data['id'] ?>" class="btn btn-danger" onclick=" return checkDelete()">Delete</a></td>

                </tr>
              <?php
              }
              ?>
            </table>
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



</html>