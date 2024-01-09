<?php
session_start();

?>

<?php
include 'dbconnect.php';

$id = $_GET['id'];


$query = "DELETE FROM registration WHERE id = '$id'";
$data = mysqli_query($conn, $query);

if ($data) {
    echo "<script>
        alert('Data Deleted successfully');
        window.location.replace('adminCustomers.php');
    </script>";
} else {

    echo "<script>
        alert('Data Failed to Delete' );
        window.location.replace('adminCustomers.php');
    </script>";
}
 ?>



<?php
include 'dbconnect.php';

$id1 = $_GET['id'];


$query = "DELETE FROM contact WHERE id = '$id1'";
$data = mysqli_query($conn, $query);

if ($data) {
    echo "<script>
        alert('Message Deleted successfully');
        window.location.replace('adminCustomers.php');
    </script>";
} else {

    echo "<script>
        alert('Message Failed to Delete' );
        window.location.replace('adminCustomers.php');
    </script>";
}