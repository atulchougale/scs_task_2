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
        echo "<script>
            alert('Dish Added successfully');
            window.location.replace('adminAddProducts.php');
        </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "<script>
    alert('Food Doesn't Added.');
    window.location.replace('adminAddProducts.php');
</script>";
}
