<?php
    include("dbconnect.php");

    $id = $_GET['id'];


    $query = "DELETE FROM disesh WHERE id = '$id'";
    $data = mysqli_query( $conn, $query) ;

    if ($data){
        echo "<script>
        alert('Dish Deleted successfully');
        window.location.replace('adminAllProducts.php');
    </script>";
    }
    else{

        echo "<script>
        alert('Dish Failed to Delete');
        window.location.replace('adminAllProducts.php');
    </script>";
    }
?>