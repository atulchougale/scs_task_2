<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <script>
    document.addEventListener("DOMContentLoaded", function() {
      document.getElementById("registrationForm").addEventListener("submit", function(event) {
        const firstName = document.getElementById("firstname").value.trim();
        const lastName = document.getElementById("lastname").value.trim();
        const phoneNumber = document.getElementById("phonenumber").value.trim();
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("confirmpassword").value;
        const dob = document.getElementById("dob").value.trim();
        const address = document.getElementById("address").value.trim();
        const city = document.getElementById("city").value.trim();
        const state = document.getElementById("state").value.trim();

        // Password requirements
        const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^\w\s]).{8,}$/;

        // Validation for First Name - only letters
        if (!/^[A-Za-z]+$/.test(firstName)) {
          event.preventDefault();
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please enter a valid First Name!',
          });
          return;
        }

        // Validation for Last Name - only letters
        if (!/^[A-Za-z]+$/.test(lastName)) {
          event.preventDefault();
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please enter a valid Last Name!',
          });
          return;
        }

        // Validation for Phone Number
        if (phoneNumber.length !== 10 || isNaN(phoneNumber)) {
          event.preventDefault();
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please enter a valid 10-digit phone number!',
          });
          return;
        }

        // Validation for Email
        if (!/\S+@\S+\.\S+/.test(email)) {
          event.preventDefault();
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please enter a valid email address!',
          });
          return;
        }

        
           // Validation for Password with special character check
           if (!passwordRegex.test(password)) {
          event.preventDefault();
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password must contain at least 8 characters, including one number, one lowercase, one uppercase letter, and one special character!',
          });
          return;
        }

        // Validation for Confirm Password
        if (password !== confirmPassword) {
          event.preventDefault();
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Passwords do not match!',
          });
          return;
        }
      });
    });
  </script>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style14.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
        /* display: flex;
    justify-content: center;
    align-items: center;*/
    min-height: 100vh; 
    background: url("https://png.pngtree.com/back_origin_pic/03/51/90/3e455440921065c1d264cb84bf226a84.jpg") no-repeat;
    background-size: cover; 
    background-position: center;}
        .card {
            background-color:rgb(118, 155, 187);
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="mask d-flex align-items-center h-100 gradient-custom-3">

    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-7">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                    <div class="demo">
      <a class="navbar-brand " href="index.php"><img src="avatu pic/logo1.png" class="img I1" alt="..."></a>
    </div>
                        <h2> Registration Form</h2>
                        <form method="post" action="#" id="projectForm">
                            <div class="form-outline mb-4">
                                <label for="name">Name:</label>
                                <input type="text" name="name" class="form-control form-control-lg" id="name">
                                <div class="error" id="name_error"></div>
                            </div>
                            <div class="form-outline mb-4">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control form-control-lg" id="email">
                                <div class="error" id="email_error"></div>
                            </div>
                            <div class="form-outline mb-4">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control form-control-lg" id="password">
                                <div class="error" id="pass_error"></div>
                            </div>
                            <div class="form-outline mb-4">
                                <label for="confirm_password">Confirm Password:</label>
                                <input type="password" name="confirm_password" class="form-control form-control-lg" id="confirm_password">
                                <div class="error" id="confirmpass_error"></div>
                            </div>
                            <div class="form-outline mb-4">
                                <label for="mobile_number">Mobile Number:</label>
                                <input type="text" name="mobile_number" class="form-control form-control-lg" id="mobile">
                                <div class="error" id="mobile_error"></div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="abc">
                                    <button class="btn btn-primary" type="submit" name="submit">Register</button>
                                    <div class="col-md-6 d-flex justify-content-center">
                    <!-- Simple link -->
                    <div class="text-center">
                  <p>Already Register click on Here? <a href="login.php ">Login</a></p>
                </div>
                  </div>
                                </div>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- validation -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

<script>   var projectForm = document.getElementById('projectForm');

    projectForm.addEventListener('submit', function (e) {
        if (!validateForm()) {
            e.preventDefault(); // Prevent form submission if validation fails
        }
    });

    function validateForm() {
        var isValid = true;

        var name = document.getElementById('name');
        var email = document.getElementById('email');
        var pass = document.getElementById('password');
        var cpass = document.getElementById('confirm_password');
        var phone = document.getElementById('mobile');

        setError('name_error', '');
        setError('email_error', '');
        setError('pass_error', '');
        setError('confirmpass_error', '');
        setError('mobile_error', '');

        if (name.value.trim() === '') {
            setError('name_error', 'Name is required');
            isValid = false;
        }
        else if (!/^[a-zA-Z\s]+$/.test(name.value.trim())) {
                setError('name_error', 'Invalid characters in name');
                isValid = false;
            }

        if (email.value.trim() === '') {
            setError('email_error', 'Email is required');
            isValid = false;
        }
       
        if (pass.value.trim() === '') {
            setError('pass_error', 'Password is required');
            isValid = false;
        }  else if (!/^(?=.*[a-zA-Z])(?=.*[!@#$%^&*(),.?":{}|<>])(?=.*\d)[a-zA-Z\d!@#$%^&*(),.?":{}|<>]{1,8}$/.test(pass.value.trim())) {
            setError('pass_error', 'Password must be 8 characters or less, contain at least one special character, and no spaces');
            isValid = false;
        }

        if (cpass.value.trim() === '') {
            setError('confirmpass_error', 'Confirm Password is required');
            isValid = false;
        }
        else if (cpass.value.trim() !== pass.value.trim()) {
            setError('confirmpass_error', 'Passwords do not match');
            isValid = false;
        }
        if (phone.value.trim() === '') {
            setError('mobile_error', 'Mobile Number is required');
            isValid = false;
        }
        else if (!/^\d{10}$/.test(phone.value.trim())) {
            
            setError('mobile_error', 'Mobile Number must contain exactly 10 digits and no characters or spaces');
            isValid = false;
        }

        return isValid;
    }

    function setError(id, message) {
        const errorElement = document.getElementById(id);
        errorElement.innerText = message;
    }
   
    
</script>

<?php
include 'conection.php';
error_reporting(0);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $mobile_number = $_POST['mobile_number'];

    // Check if the data already exists in the database
    $checkQuery = "SELECT * FROM register WHERE name = '$name' OR email = '$email' OR mobile_number = '$mobile_number'";
    $checkResult = mysqli_query($conn, $checkQuery);

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
        $sql = "INSERT INTO register(id, name, email, password, confirm_password, mobile_number) VALUES ('', '$name', '$email', '$password', '$confirm_password', '$mobile_number')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script>
                    swal({
                        title: 'Successful',
                        text: 'Data inserted successfully',
                        icon: 'success',
                        button: false,
                        timer: 2000
                    }).then(function() {
                        window.location.href = 'login.php';
                    });
                  </script>";
        } else {
            echo "<script>
                    swal({
                        title: 'Failed',
                        text: 'Invalid data',
                        icon: 'error',
                        button: 'OK'
                    });
                  </script>";
        }
    }
}
?>

</body>
</html>