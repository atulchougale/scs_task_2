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

    <div class=" about_cont ">

      <div class="about_cont2">
        <h1>Are You Hungry ?</h1>
        <h2>Don't Wait !!!</h2>
        <h3>Let Start To Order Food Now !</h3>
      </div>

    </div>

    <div class="container">
      <div id="about_us" class="about_us container row rounder m-4">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12 about_img">
          <img src="./images/about_us.jpg" alt="" class="rounder">
        </div>


        <div class="col-lg-6 col-md-6 col-sm-12 col-12 about_desc">
          <h2>ABOUT US</h2>
          <h3>We Deliver Delicious FOOD</h3>
          <p class="heading-mgn">Welcome to FOODII, your go-to destination for delicious and convenient food delivery. We are passionate about connecting people with a diverse range of cuisines, right at their doorstep.</p>
        </div>
      </div>

      <div class="container row rounder m-4 coll p-3">
        <div class="container-fluid text-center m-3  story col-lg-5  m-2">
          <h2>Our Story</h2>
          <p class="heading-mgn">Founded in 2023, Food Delivery Express started with a simple mission: to make food delivery fast, easy, and enjoyable for everyone. What began as a small team of food enthusiasts has now grown into a community dedicated to delivering culinary delights to your home or office.</p>
        </div>



        <div class="container-fluid m-3  text-center mission col-lg-5 m-2">
          <h2>Our Mission</h2>
          <p class="heading-mgn">At Food Delivery Express, our mission is to redefine the dining experience by providing a seamless and delightful journey from order to delivery. We strive to offer a diverse menu, prompt service, and a commitment to quality that ensures your satisfaction with every bite.</p>
        </div>
      </div>

      <div class="container m-4  choose text-center">
        <h2>Why Choose Us?</h2>
        <p class="heading-mgn">• Wide Variety: Explore a diverse menu with options for every palate.<br>
          • Quick Delivery: Enjoy prompt and reliable delivery services.<br>
          • Quality Assurance: We prioritize quality to ensure a delightful dining experience.<br>
          • User-Friendly Platform: Order with ease through our user-friendly website and mobile app.<br>
          • Customer Support: Our dedicated support team is ready to assist you with any queries.</p>
      </div>
    </div>

  </main>




  <?php
  include("footer.php");
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>