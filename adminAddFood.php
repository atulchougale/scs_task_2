<?php
session_start();

?>


<?php
  include("dbconnect.php");

if (isset($_POST['submit'])) {
    $file_name = $_FILES['foodimage']['name'];
    $file_temp = $_FILES['foodimage']['tmp_name'];
    $folder = 'foodImg/' . $file_name;
    move_uploaded_file($file_temp, $folder);

    $foodname    = $_POST['foodname'];
    $category    = $_POST['category'];
    $rating    = $_POST['rating'];
    $price   = $_POST['price'];



    $sql = "INSERT INTO `disesh`(`id`,  `foodname`, `category`, `rating`, `price`, `foodimage`)
            VALUES('',  '$foodname', '$category',  '$rating', '$price', '$folder')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo  "<script>
            swal({
                title: 'Successfully!',
                text: 'Dish Added successfully',
                icon: 'success',
                button: 'Ok, Done!',
            }).then(function() {
                window.location.href = 'adminAddProducts.php';
            });
          </script>";
    }
    else {
    echo "<script>
                swal({
                    title: 'Error!',
                    text: 'Food Doesn't Added.',
                    icon: 'error',
                    button: 'Ok, Done!',
                }).then(function() {
                    window.location.href = 'adminAddProducts.php';
                });
            </script>";
    }
}


?>