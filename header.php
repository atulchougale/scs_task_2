
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #e3f2fd">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./images/logo.png" alt="FOODII" width="60" height="50" />
        </a>
        <a class="navbar-brand" href="./index.php">FOODII</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./products.php">Order Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Service.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact.php">Contact</a>
                </li>
            </ul>

            <?php
            

            
            if (isset($_SESSION['user_email']) && $_SESSION['user_email'] == 'admin@gmail.com') {
                // User is logged in as admin
                echo '<form class="d-flex" action="logout.php" method="post">';
                echo '<a href="adminDashboard.php" class="btn btn-outline-warning me-2" >Admin Dashboard</a>';
                echo '</form>';
            } 
            ?>

            <form class="d-flex">


                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success me-2" type="submit">
                    Search
                </button>
            </form>
            
             <!-- Check if the user is logged in -->
             <?php
            
            if (isset($_SESSION['user_email'])) {
                // User is logged in
                echo '<form class="d-flex" action="logout.php" method="post">';
                echo '<a href="profile.php" class="btn btn-outline-secondary me-2" >PROFILE</a>';
                echo '<button class="btn btn-outline-danger me-2" type="submit" name="logout">LOGOUT</button>';
                echo '</form>';
            } else {
                

                echo '<a href="loginPage.php" class="btn btn-outline-success me-2" >LOGIN</a>';
            }
            ?>
        </div>
    </div>
</nav>