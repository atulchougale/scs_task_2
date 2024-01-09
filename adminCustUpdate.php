<?php
session_start();
include 'dbconnect.php';
$email2 = $_SESSION['user_email'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("head.php");
    ?>
    <link rel="stylesheet" href="./css/update.css?v-2">
</head>

<body>
    <?php
    include("header.php");


    ?>
    <main>

        <?php
        include 'dbconnect.php';

        $id = $_GET['id'];

        $view = "SELECT * FROM `registration` WHERE id='$id'";
        $query = mysqli_query($conn, $view);
        $data = mysqli_fetch_assoc($query)

        ?>
        <div class="container1 ">
            <div class="wrapper">
                <div class="title"><span>UPDATE DETAILS</span></div>
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <input type="file" placeholder="Profile Photo" name="photo11" >
                    </div>
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Full Name" name="name" value="<?php echo $data['name'] ?>" required>
                    </div>
                    <div class="row">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" value="<?php echo $data['email'] ?>" required>
                    </div>
                    <div class="row">
                        <i class="fas fa-phone"></i>
                        <input type="text" placeholder="Phone No." name="phone" value="<?php echo $data['phone'] ?>" required>
                    </div>
                    <div class="row">
                        <i class="fas fa-thumbtack"></i>
                        <input type="text" placeholder="Pin Code" name="pin_code" value="<?php echo $data['pin_code'] ?>" required>
                    </div>
                    <div class="row">
                        <i class="fas fa-address-book"></i>
                        <input type="text" placeholder="Address" name="address" value="<?php echo $data['address'] ?>" required>
                    </div>
                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" value="<?php echo $data['password'] ?>" required>
                    </div>
                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Conform Password" name="cpassword" value="<?php echo $data['cpassword'] ?>" required>
                    </div>



                    <div class="row button">
                        <input type="submit" name="submit" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
    include("footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php
include 'dbconnect.php';

if (isset($_POST['submit'])) {


    $name    = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $pin_code   = $_POST['pin_code'];
    $address = $_POST['address'];
    $password  = $_POST['password'];
    $cpassword  = $_POST['cpassword'];

    // Check if a new image is uploaded
    if ($_FILES['photo11']['size'] > 0) {
        $file_name = $_FILES['photo11']['name'];
        $file_temp = $_FILES['photo11']['tmp_name'];
        $folder = 'images/' . $file_name;
        move_uploaded_file($file_temp, $folder);

        // Update all fields, including the new image
        $update = "UPDATE `registration` SET `photo`='$folder', `name` ='$name', `email` = '$email', `phone` = '$phone', `pin_code`='$pin_code',
    `address` = '$address', `password` = '$password', `cpassword` = '$cpassword' WHERE id = '$id'";
    } else {
        // No new image, update other fields only
        $update = "UPDATE `registration` SET  `name` ='$name', `email` = '$email', `phone` = '$phone', `pin_code`='$pin_code',
    `address` = '$address', `password` = '$password', `cpassword` = '$cpassword' WHERE id = '$id'";
    }


    $query = mysqli_query($conn, $update);

    if ($query) {
        
            echo  "<script>
            swal({
                title: 'Successfully!',
                text: 'Details Updated Successfully',
                icon: 'success',
                button: 'Ok, Done!',
            }).then(function() {
                window.location.href = 'Profile.php';
            });
          </script>";
        }else {
            echo  "<script>
            swal({
                title: 'Failed!',
                text: 'Details Updated Fail',
                icon: 'error',
                button: 'Ok, Done!',
            }).then(function() {
                window.location.href = 'Profile.php';
            });
          </script>";
        }
    } 

?>


