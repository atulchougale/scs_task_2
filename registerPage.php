<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form | FOODII</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <div class="container1 ">
        <div class="wrapper">
            <div class="title"><span>Registration Form</span></div>
            <form action="registerconnect.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="file" placeholder="Profile Photo" name="photo11" required>
                </div>
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Full Name" name="name" required>
                </div>
                <div class="row">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="row">
                    <i class="fas fa-phone"></i>
                    <input type="text" placeholder="Phone No." name="phone" required>
                </div>
                <div class="row">
                    <i class="fas fa-thumbtack"></i>
                    <input type="text" placeholder="Pin Code" name="pin_code" required>
                </div>
                <div class="row">
                    <i class="fas fa-address-book"></i>
                    <input type="text" placeholder="Address" name="address" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Conform Password" name="cpassword" required>
                </div>



                <div class="row button">
                    <input type="submit" name="submit" value="SignUp">
                </div>
                <div class="signup-link">You have Already Account Go To <a href="loginPage.php">SignIn now</a></div>
            </form>
        </div>
    </div>

</body>

</html>