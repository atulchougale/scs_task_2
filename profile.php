<?php
session_start();
include("dbconnect.php");
$email = $_SESSION['user_email'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include("head.php");
    ?>
    <link rel="stylesheet" href="./css/profile.css">
</head>

<body>
    <?php
    include("header.php");
    ?>

    <main>
        <div class="container">
            <div class="about_us container row rounder m-4">
                <div class="container profile-container">

                    <?php
                    include("dbconnect.php");

                    $view = "SELECT * FROM `registration` WHERE email ='$email'";
                    $query = mysqli_query($conn, $view);
                    while ($data = mysqli_fetch_assoc($query)) {
                    ?>

                        <div class="profile-picture">
                            <img src="<?php echo $data['photo'] ?>" alt="<?php echo $data['name'] ?>">
                        </div>

                        <div class="profile-info">
                            <h2><?php echo $data['name'] ?></h2>
                            <p>Email: <?php echo $data['email'] ?></p>
                        </div>

                        <div class="profile-details">
                            <table>
                                <tr>
                                    <th>Phone</th>
                                    <td class="text-dark"><?php echo $data['phone'] ?></td>
                                </tr>
                                <tr>
                                    <th>Pin Code</th>
                                    <td class="text-dark"><?php echo $data['pin_code'] ?></td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td class="text-dark"><?php echo $data['address'] ?></td>
                                </tr>
                            </table>
                        </div>
                   

                    <div class="edit-profile-btn text-center">
                        <a href="adminCustUpdate.php?id=<?php echo $data['id'] ?>" class="btn btn-primary">Edit Profile</a>
                    </div>

                    <?php
                    };
                    ?>
                </div>
            </div>

        </div>
    </main>

    <?php
    include("footer.php");
    ?>
</body>

</html>