<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include("head.php");
  ?>
</head>
  <body>
  <?php
     include("header.php");
 ?>

    <main>
      <div class="home_cont">
        <div class="home_cont2">
          <h1> FOODII</h1>
          <h2>Welcome to a world of flavors !!</h2>
          <h3>"Where every dish tells a story. Join us on a culinary journey that delights the senses. 🍽️✨ #FoodiiExperience"</h3>
          <div class="check_menu1 m-3">
            <a class="text-decoration-none" href="./products.php">
              <button type="button" class="btn btn-secondary">
                Order Now
              </button></a>
          </div>
          <?php
              if(isset($_SESSION['user_email'])) {
              } else {
            ?>
                <div class="check_menu1 m-3  ">
            <a class="text-decoration-none" href="./loginPage.php">
              <button type="button" class="btn btn-secondary ">
                LOGIN
              </button></a>
          </div>
          <?php
              }
          ?>
        </div>
      </div>

      <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="3"
            aria-label="Slide 4"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="4"
            aria-label="Slide 5"
          ></button>
        </div>
        <div class="carousel-inner at">
          <div class="carousel-item active">
            <div class="d-md-block cap">
              <h3>Delicious Delivered</h3>
              <p>Bringing Your Favorites to Your Doorstep!</p>
            </div>
            <img src="./images/hyd_biryani.jpg" class="d-block w-100" alt="" />
          </div>
          <div class="carousel-item">
            <div class="cap d-md-block">
              <h3>From Kitchen to Yours</h3>
              <p>Fast, Fresh, and Fabulous Delivery!</p>
            </div>
            <img
              src="./images/masala_dosa (1).jpg"
              class="d-block w-100"
              alt=""
            />
          </div>
          <div class="carousel-item">
            <div class="cap d-md-block">
              <h3>Good Food, Fast Mood</h3>
              <p>Unwrap the Goodness at Your Door!</p>
            </div>
            <img
              src="./images/chiken_masala.jpg"
              class="d-block w-100"
              alt=""
            />
          </div>
          <div class="carousel-item">
            <div class="cap d-md-block">
              <h3>Dine In, Delivered</h3>
              <p>Your Culinary Journey Starts Here!</p>
            </div>
            <img
              src="./images/tambda_pandhara.jpg"
              class="d-block w-100"
              alt=""
            />
          </div>
          <div class="carousel-item">
            <div class="cap d-md-block">
              <h3>Flavors On-Demand</h3>
              <p>Where Your Favorites Come to You!</p>
            </div>
            <img src="./images/misal_pav.jpg" class="d-block w-100" alt="" />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="check_menu m-3">
        <a class="text-decoration-none" href="./products.php"
          ><button type="button" class="btn btn-secondary">Order Now</button></a
        >
      </div>

      <div class="container-fluid special_main">
        <div class="container-fluid special">
          <div class="special_title">
            <h2>OUR SPECIALS</h2>
          </div>
          <div class="slider">
            <div class="slide-track">
              <div class="slide_cust row shadow-lg">
                <img src="./images/Ambur-Chicken-Biryani.jpg" alt="image 1" />
                <h5>Ambur Chicken Biryani</h5>
              </div>
              <div class="slide_cust row">
                <img src="./images/tambda_pandhara.jpg" alt="image 2" />
                <h5>Tambada Pandhara</h5>
              </div>
              <div class="slide_cust row">
                <img src="./images/paneer-butter-masala.jpg" alt="image 3" />
                <h5>Paneer Butter Masala</h5>
              </div>
              <div class="slide_cust row">
                <img src="./images/Handi-chicken.jpg" alt="" />
                <h5>Chicken Handi</h5>
              </div>
              <div class="slide_cust row">
                <img src="./images/hyd_biryani.jpg" alt="image 4" />
                <h5>Hyadrabadi Biryani</h5>
              </div>
              <div class="slide_cust row">
                <img src="./images/ChickenManchurian.jpg" alt="image 5" />
                <h5>Chicken Manchurian</h5>
              </div>
              <div class="slide_cust row">
                <img src="./images/Rava-Uttapam.jpg" alt="image 6" />
                <h5>Rava Uttapam</h5>
              </div>
              <div class="slide_cust row">
                <img src="./images/kolhapuri-kat-wada.jpg" alt="image 7" />
                <h5>Kolhapuri kat Wada</h5>
              </div>
              <div class="slide_cust row">
                <img src="./images/mysore-bonda.jpg" alt="image 7" />
                <h5>Mysore Bonda</h5>
              </div>
              <div class="slide_cust row">
                <img src="./images/masala_dosa (1).jpg" alt="image 7" />
                <h5>Masala Dosa</h5>
              </div>
              <div class="slide_cust row">
                <img src="./images/veg_biryani.jpg" alt="image 7" />
                <h5>Veg Biryani</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
      <div class="container row rounder m-4 coll1 p-3">
        <h1 class="text-center">Testimonials</h1>
        <div
          class="container text-center m-2 testimonials col-lg-4 col-md-6 col-xl-4"
        >
          <img src="./images/test_m-1.jpg" alt="test_m-1" />
          <h3>John S. - Food Lover</h3>
          <p class="heading-mgn">
            "I'm constantly amazed by the variety and quality of dishes from
            FOODII. Each bite is a journey of flavors, and the delivery is
            always on time. My taste buds thank you!"
          </p>
        </div>

        <div
          class="container text-center m-2 testimonials col-lg-4 col-md-4 col-xl-4"
        >
          <img src="./images/test-f-2.jpg" alt="test_m-1" />
          <h3>Emily M. - Busy Professional</h3>
          <p class="heading-mgn">
            "As a busy professional, I rely on FOODII for quick and delicious
            meals. The convenience of ordering and the lightning-fast delivery
            make my hectic days a bit more manageable. Highly recommended!"
          </p>
        </div>

        <div
          class="container text-center m-2 testimonials col-lg-4 col-md-4 col-xl-4"
        >
          <img src="./images/test_m-3.png" alt="test_m-1" />
          <h3>Mike G. - Repeat Customer</h3>
          <p class="heading-mgn">
            "FOODII has won me over as a loyal customer. The user-friendly app,
            reliable delivery, and consistently delicious meals keep me coming
            back. It's the only food delivery service I trust."
          </p>
        </div>

        <div
          class="container text-center m-2 testimonials col-lg-4 col-md-4 col-xl-4"
        >
          <img src="./images/test_m-4.jpeg" alt="test_m-1" />
          <h3>David L. - Foodie Explorer</h3>
          <p class="heading-mgn">
            "I consider myself a foodie, and FOODII has never disappointed. The
            range of cuisines and the attention to detail in every dish are
            impressive. It's become my go-to for exploring culinary delights
            without leaving home."
          </p>
        </div>

        <div
          class="container text-center m-2 testimonials col-lg-4 col-md-4 col-xl-4"
        >
          <img src="./images/test_f-5.webp" alt="test_m-1" />
          <h3>Jessica H. - Occasional Indulger</h3>
          <p class="heading-mgn">
            "I don't order often, but when I do, it's from FOODII. The
            occasional indulgence is made extra special with their gourmet
            offerings. The decadent desserts are my weakness!"
          </p>
        </div>

        <div
          class="container text-center m-2 testimonials col-lg-4 col-md-4 col-xl-4"
        >
          <img src="./images/test_m-6.jpeg" alt="test_m-1" />
          <h3>Alex R. - Health Enthusiast</h3>
          <p class="heading-mgn">
            "Finding healthy yet tasty options used to be a challenge until I
            discovered FOODII. The fresh ingredients and diverse menu keep me on
            track with my fitness goals. It's like having a personal chef at my
            fingertips!"
          </p>
        </div>
      </div>
     
    </main>

   

    <?php
     include("footer.php");
 ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>

</html>
