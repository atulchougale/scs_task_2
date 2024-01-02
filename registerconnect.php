<?php
include 'dbconnect.php';

if (isset($_POST['submit'])) {

    // Profile Photo 
    $file_name = $_FILES['photo11']['name'];
    $file_temp = $_FILES['photo11']['tmp_name'];
    $folder = 'profile/' . $file_name;
    move_uploaded_file($file_temp, $folder);


    // Define variables and initialize to empty values
    $name = $email = $phone = $pin_code = $address = $password = $cpassword = "";

    // Function to sanitize and validate input
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Validate name
    if (empty($_POST["name"])) {
        echo "<script>
            alert('Name is required');
            window.location.replace('registerPage.php');
        </script>";
        exit();
    } else {
        $name = test_input($_POST["name"]);
        // Check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            echo "<script>
                alert('Only letters and white space allowed in the name');
                window.location.replace('registerPage.php');
            </script>";
            exit();
        }
    }

    

    // Validate email
    if (empty($_POST["email"])) {
        echo "<script>
            alert('Email is required');
            window.location.replace('registerPage.php');
        </script>";
        exit();
    } else {
        $email = test_input($_POST["email"]);
        // Check if the email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>
                alert('Invalid email format');
                window.location.replace('registerPage.php');
            </script>";
            exit();
        }
    }



     // Check if the email already exists
     $checkEmailQuery = "SELECT COUNT(*) as count FROM registration WHERE email = '$email'";
     $result = mysqli_query($conn, $checkEmailQuery);
 
     if ($result) {
         $row = mysqli_fetch_assoc($result);
         $emailCount = $row['count'];
 
         if ($emailCount > 0) {
             // Email already exists
             echo "<script>
                 alert('Email is already exists. Please try another email.');
                 window.location.replace('registerPage.php');
             </script>";
             exit();
         }
     } else {
         // Handle the query error
         echo "<script>
             alert('Error checking email existence');
             window.location.replace('registerPage.php');
         </script>";
         exit();
     }

    // Validate phone
    if (empty($_POST["phone"])) {
        echo "<script>
            alert('Phone number is required');
            window.location.replace('registerPage.php');
        </script>";
        exit();
    } else {
        $phone = test_input($_POST["phone"]);
        // Check if the phone number is exactly 10 digits
        if (!preg_match("/^\d{10}$/", $phone)) {
            echo "<script>
                alert('Phone number must be 10 digits');
                window.location.replace('registerPage.php');
            </script>";
            exit();
        }
    }

    // Validate pin code
    if (empty($_POST["pin_code"])) {
        echo "<script>
            alert('Pin code is required');
            window.location.replace('registerPage.php');
        </script>";
        exit();
    } else {
        $pin_code = test_input($_POST["pin_code"]);
        // Check if the pin code is exactly 6 digits
        if (!preg_match("/^\d{6}$/", $pin_code)) {
            echo "<script>
                alert('Pin code must be 6 digits');
                window.location.replace('registerPage.php');
            </script>";
            exit();
        }
    }

    // Validate address
    if (empty($_POST["address"])) {
        echo "<script>
            alert('Address is required');
            window.location.replace('registerPage.php');
        </script>";
        exit();
    } else {
        $address = test_input($_POST["address"]);
        // You can add more address validation rules here if needed
    }

    // Validate password
    if (empty($_POST["password"])) {
        echo "<script>
            alert('Password is required');
            window.location.replace('registerPage.php');
        </script>";
        exit();
    } else {
        $password = test_input($_POST["password"]);
        // Check if the password meets the criteria
        if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_])[a-zA-Z\d\W_]{6,8}$/", $password)) {
            echo "<script>
                alert('Password must contain at least one digit, one uppercase letter, one lowercase letter, one special character, and be 6 to 8 characters long');
                window.location.replace('registerPage.php');
            </script>";
            exit();
        }
    }

    // Validate confirm password
    if (empty($_POST["cpassword"])) {
        echo "<script>
            alert('Confirm Password is required');
            window.location.replace('registerPage.php');
        </script>";
        exit();
    } else {
        $cpassword = test_input($_POST["cpassword"]);
        // Check if the password and confirm password match
        if ($password !== $cpassword) {
            echo "<script>
                alert('Passwords do not match');
                window.location.replace('registerPage.php');
            </script>";
            exit();
        }
    }



    
    // // Hash the password for storage
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // $hashedCPassword = password_hash($cpassword, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO `registration`(`photo`, `name`, `email`, `phone`, `pin_code`, `address`, `password`, `cpassword`)
            VALUES('$folder', '$name', '$email', '$phone', '$pin_code', '$address', '$password', '$cpassword')";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>
            alert('Registration successful');
            window.location.replace('loginPage.php');
        </script>";
        exit();
    } else {
        echo "<script>
            alert('Error: " . mysqli_error($conn) . "');
            window.location.replace('registerPage.php');
        </script>";
        exit();
    }
} else {
    echo "<script>
        alert('Registration failed');
        window.location.replace('registerPage.php');
    </script>";
    exit();
}
?>
