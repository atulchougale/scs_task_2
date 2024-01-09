<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include 'dbconnect.php';
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form | FOODII</title>
    <link rel="stylesheet" href="./css/style.css?v=2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <style>
        .wrapper form .error {
            margin-top: 0px;
            color: red;
        }
    </style>
</head>

<body>
    <div class="container1 ">
        <div class="wrapper">
            <div class="title"><span>Registration Form</span></div>
            <form action="#" method="post" enctype="multipart/form-data" id="projectForm">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="file" placeholder="Profile Photo" name="photo11" required>
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Full Name" name="name" id="name" required>
                </div>
                <p class="error" id="name_error"></p>
                <div class="row">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" id="email" required>
                </div>
                <p class="error" id="email_error"></p>
                <div class="row">
                    <i class="fas fa-phone"></i>
                    <input type="text" placeholder="Phone No." name="phone" id="phone" required>
                </div>
                <p class="error" id="phone_error"></p>
                <div class="row">
                    <i class="fas fa-thumbtack"></i>
                    <input type="text" placeholder="Pin Code" name="pin_code" id="pin_code" required>
                </div>
                <p class="error" id="pin_code_error"></p>
                <div class="row">
                    <i class="fas fa-address-book"></i>
                    <input type="text" placeholder="Address" name="address" id="address" required>
                </div>
                <p class="error" id="address_error"></p>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" id="password" required>
                </div>
                <p class="error" id="password_error"></p>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Conform Password" name="cpassword" id="cpassword" required>
                </div>
                <p class="error" id="cpassword_error"></p>

                <div class="row button">
                    <input type="submit" name="submit" value="Register">
                </div>
                <div class="signup-link">You have Already Account Go To <a href="loginPage.php">Login now</a></div>
            </form>
        </div>
    </div>
    <!-- validation -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        var projectForm = document.getElementById('projectForm');

        projectForm.addEventListener('submit', function(e) {
            if (!validateForm()) {
                e.preventDefault(); // Prevent form submission if validation fails
            }
        });

        function validateForm() {
            var isValid = true;

            var name = document.getElementById('name');
            var email = document.getElementById('email');
            var phone = document.getElementById('phone');
            var pin_code = document.getElementById('pin_code');
            var address = document.getElementById('address');
            var password = document.getElementById('password');
            var cpassword = document.getElementById('cpassword');

            setError('name_error', '');
            setError('email_error', '');
            setError('phone_error', '');
            setError('pin_code_error', '');
            setError('address_error', '');
            setError('password_error', '');
            setError('cpassword_error', '');

            if (name.value.trim() === '') {
                setError('name_error', 'Name is required');
                isValid = false;
            } else if (!/^[a-zA-Z\s]+$/.test(name.value.trim())) {
                setError('name_error', 'Invalid characters in name');
                isValid = false;
            }

            if (email.value.trim() === '') {
                setError('email_error', 'Email is required');
                isValid = false;
            }

            if (phone.value.trim() === '') {
                setError('phone_error', 'Phone Number is required');
                isValid = false;
            } else if (!/^\d{10}$/.test(phone.value.trim())) {
                setError('phone_error', 'Phone Number must contain exactly 10 digits and no characters or spaces');
                isValid = false;
            }

            if (pin_code.value.trim() === '') {
                setError('pin_code_error', 'Pin Code Number is required');
                isValid = false;
            } else if (!/^\d{6}$/.test(pin_code.value.trim())) {
                setError('pin_code_error', 'Pin Code Number must contain exactly 6 digits and no characters or spaces');
                isValid = false;
            }

            if (address.value.trim() === '') {
                setError('address_error', 'Address is required');
                isValid = false;
            }

            if (password.value.trim() === '') {
                setError('password_error', 'Password is required');
                isValid = false;
            } else {
                setError('password_error', '');

                if (!/(?=.*[a-zA-Z])/.test(password.value.trim())) {
                    setError('password_error', 'Password must include at least one letter');
                    isValid = false;
                }

                if (!/(?=.*\d)/.test(password.value.trim())) {
                    setError('password_error', 'Password must include at least one digit');
                    isValid = false;
                }

                if (!/(?=.*[!@#$%^&*(),.?":{}|<>])/.test(password.value.trim())) {
                    setError('password_error', 'Password must include at least one special character (!@#$%^&*(),.?":{}|<>)');
                    isValid = false;
                }

                if (!/^.{8,}$/.test(password.value.trim())) {
                    setError('password_error', 'Password must be at least 8 characters long');
                    isValid = false;
                }
            }

            if (cpassword.value.trim() === '') {
                setError('cpassword_error', 'Confirm Password is required');
                isValid = false;
            } else if (cpassword.value.trim() !== password.value.trim()) {
                setError('cpassword_error', 'Passwords do not match');
                isValid = false;
            }

            return isValid;
        }

        function setError(id, message) {
            const errorElement = document.getElementById(id);
            errorElement.innerHTML = message;
        }
    </script>

    <?php
    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $pin_code = mysqli_real_escape_string($conn, $_POST['pin_code']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

        // Profile Photo 
        $file_name = $_FILES['photo11']['name'];
        $file_temp = $_FILES['photo11']['tmp_name'];
        $folder = 'profile/' . $file_name;

        // Check if the file was uploaded successfully
        if (move_uploaded_file($file_temp, $folder)) {
            echo "File uploaded successfully.<br>";
        } else {
            // File upload failed
            die("Error uploading file: " . $_FILES['photo11']['error']);
        }

        // Check if the data already exists in the database
        $checkQuery = "SELECT * FROM registration WHERE email = '$email' OR phone = '$phone'";
        $checkResult = mysqli_query($conn, $checkQuery);

        if (!$checkResult) {
            // Query execution failed, provide detailed error information
            die("Error checking data: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($checkResult) > 0) {
            echo "<script>
                swal({
                    title: 'Failed',
                    text: 'Data already exists',
                    icon: 'error',
                    button: 'OK'
                });
              </script>";
        } else {
            // Data doesn't exist, proceed with insertion
            $sql = "INSERT INTO registration (id,photo, name, email, phone, pin_code, address, password, cpassword) VALUES ('','$folder', '$name', '$email','$phone','$pin_code','$address', '$password', '$cpassword')";
            
            // Print the query for debugging
            echo "Query: $sql<br>";

            $query = mysqli_query($conn, $sql);

            if (!$query) {
                // Query execution failed, provide detailed error information
                echo "<script>
                Swal({
                    title: 'Error!',
                    text: 'Failed to Register to data. Please try again later.',
                    icon: 'error',
                    confirmButtonText: 'OK'
                }).then(function() {
                    window.location.href = 'registerPage.php';
                });
            </script>";
            }

            echo "<script>
                swal({
                    title: 'Registration Successfully',
                    text: 'Your Are Successful Register At FOODIIs',
                    icon: 'success',
                    button: 'Ok, Done!',
                }).then(function() {
                    window.location.href = 'loginPage.php';
                });
              </script>";
        }
    }
    ?>
</body>

</html>
