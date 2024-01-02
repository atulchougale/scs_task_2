<?php
session_start();
include 'dbconnect.php';

if (isset($_POST['submit'])) {

    $email    = $_POST['email'];
    $password = $_POST['password'];


    // Validate if fields are not empty
    if (empty($email) || empty($password)) {
        echo "<script>
            alert('Both email and password are required');
            window.location.replace('loginPage.php');
        </script>";
        exit();
    }

    $query = "SELECT * FROM registration WHERE email = '$email' && password = '$password' ";

    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);

    if ($total == 1) {

        $_SESSION['user_email'] = $email;
        if ($email === "admin@gmail.com") {
            echo "<script>
                    alert('Admin Login Successful');
                    window.location.replace('adminDashboard.php');
                 </script>";
            exit();
        } else {
            echo "<script>
                alert('Login Successful');
                window.location.replace('index.php');
                </script>";
        
            exit();
        }
    } else {
        echo "<script>
        alert('Invalid email or password');
        window.location.replace('loginPage.php');
    </script>";
        exit();
    }
} else {
    echo "<script>
        alert('Invalid request');
        window.location.replace('loginPage.php');
    </script>";
    exit();
}
